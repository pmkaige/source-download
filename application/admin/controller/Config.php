<?php
namespace app\admin\controller;
use think\Request;
class Config extends Common
{
   public function lst(){
    $confRes=db('config')->paginate(2);
    $this->assign([
        'confRes'=>$confRes,
        ]);
    return view();
   }

   public function add(){
    if(request()->isPost()){
        $data=input('post.');
        if($data['values']){
            $data['values']=str_replace('，', ',', $data['values']);
        }
        $add=db('config')->insert($data);
        if($add){
            $this->success('添加配置成功！','lst');
        }else{
            $this->error('添加配置失败！');
        }
        return;
    }
    return view();
   }


   public function edit($id){
    if(request()->isPost()){
        $data=input('post.');
        if($data['values']){
            $data['values']=str_replace('，', ',', $data['values']);
        }
        $save=db('config')->update($data);
        if($save !== false){
            $this->success('修改配置成功！','lst');
        }else{
            $this->error('修改配置失败！');
        }
        return;
    }
    $confs=db('config')->find($id);
    $this->assign([
        'confs'=>$confs,
        ]);
    return view();
   }

   public function conflist(){
    if(request()->isPost()){
        $data=input('post.');
        $dataFile=$_FILES;
        foreach ($dataFile as $k => $v) {
            if($v['name']!=""){
                $data[$k]=$this->upload($k);
            }
        }
        foreach ($data as $k => $v) {
            db('config')->where(array('ename'=>$k))->update(['value'=>$v]);
        }
        $this->success('修改配置成功！');
        return;
    }
    $confRes=db('config')->select();
    $this->assign([
        'confRes'=>$confRes,
        ]);
    return view();
   }

   public function del($id){
        $del=db('config')->delete($id);
        if($del){
            $this->success('删除配置成功！','lst');
        }else{
            $this->error('删除配置失败！');
        }
   }


   public function upload($imgName){
    // 获取表单上传文件 例如上传了001.jpg
    $file = request()->file($imgName);
    // 移动到框架应用根目录/public/uploads/ 目录下
    $info = $file->move(ROOT_PATH . 'public' . DS . 'static/index/uploads');
    if($info){
        // 成功上传后 获取上传信息
        // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
        return $info->getSaveName();
    }else{
        // 上传失败获取错误信息
        return '';
    }
}

















}
