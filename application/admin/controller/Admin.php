<?php
namespace app\admin\controller;
class Admin extends Common
{
    public function lst()
    {
    	$adminRes=db('admin')->field('id,username')->paginate(2);
    	$this->assign([
    		'adminRes'=>$adminRes,
    		]);
        return view('list');
    }

    public function add(){
    	if(request()->isPost()){
    		$data=input('post.');
    		//验证
    		$validate=validate('admin');
    		if (!$validate->scene('add')->check($data)) {
			    $this->error($validate->getError());
			}
    		$data['password']=md5($data['password']);
    		$add=db('admin')->insert($data);
    		if($add){
    			$this->success('添加管理员成功！','lst');
    		}else{
    			$this->error('添加管理员失败！');
    		}
    		return;
    	}
    	return view();
    }

    public function edit($id){
    	if(request()->isPost()){
    		$data=input('post.');
    		//验证
    		$validate=validate('admin');
    		if (!$validate->scene('edit')->check($data)) {
			    $this->error($validate->getError());
			}
    		if($data['password']){
    			$data['password']=md5($data['password']);
    		}else{
    			unset($data['password']);
    		}
    		$save=db('admin')->update($data);
    		if($save!==false){
    			$this->success('修改管理员成功！','lst');
    		}else{
    			$this->error('修改管理员失败！');
    		}
    		return;
    	}
    	$admins=db('admin')->find($id);
    	$this->assign([
    		'admins'=>$admins,
    		]);
    	return view();
    }

    public function del($id){
    	if($id!=1){
    		$del=db('admin')->delete($id);
    		if($del){
    			$this->success('删除管理员成功！','lst');
    		}else{
    			$this->error('删除管理员失败！');
    		}
    	}else{
    		$this->error('初始化管理员不允许删除！');
    	}
    }

    //退出登录
    public function logout(){
    	session(null);
    	$this->success('退出成功！','login/index');
    }




}
