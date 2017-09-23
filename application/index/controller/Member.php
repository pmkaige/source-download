<?php
namespace app\index\controller;

class Member extends Common
{

    protected $beforeActionList = [
        'checkLogin' =>  ['except'=>'info'],
    ];

    public function checkLogin(){
        if(!session('uid')){
            $this->error('请先登录！','User/login');
        }
    }

    //资料展示
    public function info($uid){
        $infos=db('userinfo')->where(array('uid'=>$uid))->find();
        $users=db('user')->field('email')->where(array('id'=>$uid))->find();
        $email=$users['email'];
        //发布资源数
        $sourceNum=db('article')->where(array('uid'=>$uid,'status'=>1))->count();
        $this->assign([
            'infos'=>$infos,
            'email'=>$email,
            'sourceNum'=>$sourceNum,
            'userid'=>$uid,
            ]);
        return view();
    }

    //我的资源
    public function mySource($uid){
        // $uid=session('uid');
        $artRes=db('article')->field('a.*,c.cate_name')->alias('a')->join('ed_cate c','a.cate_id = c.id')->where(array('a.uid'=>$uid,'a.status'=>1))->paginate(2);
        $uinfos=db('userinfo')->field('uname')->where(array('uid'=>$uid))->find();
        $currentPage=$artRes->currentPage(); 
        $lastPage=$artRes->lastPage(); 
        $this->assign([
            'artRes'=>$artRes,
            'currentPage'=>$currentPage,
            'lastPage'=>$lastPage,
            'uname'=>$uinfos['uname'],
            'userid'=>$uid,
            ]);
        return view();
    }

    //删除我的资源
    public function delSource($aid){
        $del=db('article')->delete($aid);
        if($del){
            $this->success('删除资源成功！','mySource');
        }else{
            $this->error('删除资源失败！');
        }
    }
    //编辑资源
    public function editSource($aid){
        if(request()->isPost()){
            $data=input('post.');
            //验证码
            if(!captcha_check($data['code'])){
             //验证失败
                $this->error('验证码错误！');
            };
            // dump($data); die;
            $uid=session('uid');
            $data['uid']=$uid;
            $data['updatetime']=time();
            $data['status']=2;
            $data['tags']=implode(',', $data['tags']);
            unset($data['code']);
            $validate=validate('article');
            if (!$validate->scene('edit')->check($data)) {
                $this->error($validate->getError());
            }
            $save=db('article')->update($data);
            if($save!==false){
                $this->success('修改资源成功，请等待审核！');
            }else{
                $this->error('修改资源失败！');
            }
        }
        $arts=db('article')->find($aid);
        $cateRes=model('cate')->cateTree();
        $this->assign([
            'cateRes'=>$cateRes,
            'arts'=>$arts,
            ]);
        return view();
    }
    //发布资源
    public function Source(){
        $this->checkLogin();
        if(request()->isPost()){
            $data=input('post.');
            //验证码
            if(!captcha_check($data['code'])){
             //验证失败
                $this->error('验证码错误！');
            };
            // dump($data); die;
            $uid=session('uid');
            $data['uid']=$uid;
            $data['addtime']=time();
            $data['updatetime']=time();
            $data['status']=2;
            $data['tags']=implode(',', $data['tags']);
            unset($data['code']);
            $validate=validate('article');
            if (!$validate->scene('add')->check($data)) {
                $this->error($validate->getError());
            }
            $add=db('article')->insert($data);
            if($add){
                $this->success('发布资源成功，请等待审核！');
            }else{
                $this->error('发布资源失败！');
            }
        }
        $cateRes=model('cate')->cateTree();
        // dump($cateRes); die;
        $this->assign([
            'cateRes'=>$cateRes,
            ]);
        return view();
    }

    public function editInfo(){
        $this->checkLogin();
        $uid=session('uid');
        if(request()->isPost()){
            $data=input('post.');
            // dump($data); die;
            $validate=validate('user');
            if (!$validate->scene('edit')->check($data)) {
                $this->error($validate->getError());
            }
            //数据验证
            //分组
            $userArr=array();
            $userArr['password']=$data['password'];
            $infoArr=array();
            $infoArr['uname']=$data['uname'];
            $infoArr['birthday']=$data['birthday'];
            $infoArr['sex']=$data['sex'];
            $infoArr['qq']=$data['qq'];
            $infoArr['sign']=$data['sign'];
            //修改主表密码
            if($userArr['password']){
                $password=md5($userArr['password']);
                db('user')->where(array('id'=>$uid))->update(['password'=>$password]);
            }
            //附加信息表数据修改
            $save=db('userinfo')->where(array('uid'=>$uid))->update($infoArr);
            if($save!==false){
                $this->success('修改成功！');
            }else{
                $this->error('修改失败！');
            }
            return;
        }

        //资源统计开始
        //本月
        $date=date('Y-m-d',time());//当前日期
        $TmonthArr=getMonth($date);//获取当前月份第一天和最后一天，返回数组格式
        $Tfirstday=strtotime($TmonthArr[0]);  //本月第一天 2017-06-01 转换为时间戳
        $Tlastday=strtotime($TmonthArr[1]);   //本月第一天 2017-06-30 转换为时间戳
        $TallSoruceNum=db('article')->where(array('uid'=>$uid))->where('addtime','between',[$Tfirstday,$Tlastday])->count();//本月所有资源数量
        $TrightSoruceNum=db('article')->where(array('uid'=>$uid,'status'=>1))->where('addtime','between',[$Tfirstday,$Tlastday])->count();//本月通过审核的资源数量
        //上个月
        $LmonthArr=getlastMonthDays($date);
        $Lfirstday=strtotime($LmonthArr[0]);  //上个月第一天 2017-05-01 转换为时间戳
        $Llastday=strtotime($LmonthArr[1]);   //上个月第一天 2017-05-31 转换为时间戳
        $LallSoruceNum=db('article')->where(array('uid'=>$uid))->where('addtime','between',[$Lfirstday,$Llastday])->count();//上个月所有资源数量
        $LrightSoruceNum=db('article')->where(array('uid'=>$uid,'status'=>1))->where('addtime','between',[$Lfirstday,$Llastday])->count();//上个月通过审核的资源数量
        //上上个月
        $Lday=date('Y-m-d',$Lfirstday);
        $BLmonthArr=getlastMonthDays($Lday);
        $BLfirstday=strtotime($BLmonthArr[0]);  //上上个月第一天 2017-04-01 转换为时间戳
        $BLlastday=strtotime($BLmonthArr[1]);   //上上个月第一天 2017-04-30 转换为时间戳
        $BLallSoruceNum=db('article')->where(array('uid'=>$uid))->where('addtime','between',[$BLfirstday,$BLlastday])->count();//上上个月所有资源数量
        $BLrightSoruceNum=db('article')->where(array('uid'=>$uid,'status'=>1))->where('addtime','between',[$BLfirstday,$BLlastday])->count();//上上个月通过审核的资源数量

        $uinfos=db('user')->alias('u')->field('u.email,u.id,i.uname,i.birthday,i.sex,i.qq,i.sign')->join('ed_userinfo i','u.id=i.uid')->find($uid);
        // dump($uinfos); die;
        $this->assign([
            'uinfos'=>$uinfos,
            //本月
            'Tfirstday'=>$Tfirstday,
            'TallSoruceNum'=>$TallSoruceNum,
            'TrightSoruceNum'=>$TrightSoruceNum,
            //上个月
            'Lfirstday'=>$Lfirstday,
            'LallSoruceNum'=>$LallSoruceNum,
            'LrightSoruceNum'=>$LrightSoruceNum,
            //上上个月
            'BLfirstday'=>$BLfirstday,
            'BLallSoruceNum'=>$BLallSoruceNum,
            'BLrightSoruceNum'=>$BLrightSoruceNum,
            ]);
        return view();
    }

    public function logout(){
        session(null);
        $this->success('退出成功！','User/login');
    }
}
