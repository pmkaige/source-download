<?php
namespace app\admin\controller;
class Article extends Common
{
    public function lst(){
        $artRes=db('article')->field('a.*,b.cate_name,u.uname')->alias('a')->join('ed_cate b','a.cate_id = b.id')->join('ed_userinfo u','a.uid = u.uid')->order('id desc')->paginate(3);
        $this->assign([
            'artRes'=>$artRes,
            ]);
        return view('list');
    }

    public function add(){
        if(request()->isPost()){
            $data=input('post.');
            $data['addtime']=time();
            $data['updatetime']=time();
            if($data['tags']){
                $data['tags']=str_replace('，', ',', $data['tags']);
            }
            if($data['type']==2){
                $data['size']='cl'; //磁力资源
            }elseif($data['type']==3){
                $data['size']='wp'; //网盘资源
            }elseif($data['type']==4){
                $data['size']='xl'; //网盘资源
            }else{
                $dowulr=str_replace(' ', '', $data['dowurl']);
                $arr=explode('@@', $dowulr);
                $size=0;
                foreach ($arr as $k => $v) {
                    if(!$v){
                        unset($arr[$k]);
                        continue;
                    }
                    $arr2=explode('|', $v);
                    $size+=$arr2[3];
                }
                // $_size=jsSize($size);
                $data['size']=$size;

            } 
            $validate=validate('article');
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
            }
            $add=db('article')->insert($data);
            if($add){
                $this->success('添加文章成功！','lst');
            }else{
                $this->error('添加文章失败！');
            }
            return;
        }
        $cateRes=model('cate')->cateTree();
        $this->assign([
            'cateRes'=>$cateRes,
            ]);
        return view();
    }

    public function edit($id){
        if(request()->isPost()){
            $data=input('post.');
            $data['updatetime']=time();
            if($data['tags']){
                $data['tags']=str_replace('，', ',', $data['tags']);
            }
            if($data['type']==2){
                $data['size']='cl'; //磁力资源
            }elseif($data['type']==3){
                $data['size']='wp'; //网盘资源
            }elseif($data['type']==4){
                $data['size']='xl'; //网盘资源
            }else{
                $dowulr=str_replace(' ', '', $data['dowurl']);
                $arr=explode('@@', $dowulr);
                $size=0;
                foreach ($arr as $k => $v) {
                    if(!$v){
                        unset($arr[$k]);
                        continue;
                    }
                    $arr2=explode('|', $v);
                    $size+=$arr2[3];
                }
                // $_size=jsSize($size);
                $data['size']=$size;

            } 
            $validate=validate('article');
            if(!$validate->scene('edit')->check($data)){
                $this->error($validate->getError());
            }
            $save=db('article')->update($data);
            if($save){
                $this->success('修改文章成功！','lst');
            }else{
                $this->error('修改文章失败！');
            }
            return;
        }
        $arts=db('article')->find($id);
        $cateRes=model('cate')->cateTree();
        $this->assign([
            'cateRes'=>$cateRes,
            'arts'   =>$arts,
            ]);
        return view();
    }

    public function del($id){
        $del=db('article')->delete($id);
        if($del){
            $this->success('删除文章成功！','lst');
        } else{
            $this->error('删除文章失败！');
        }
    }

















}
