<?php
namespace app\admin\controller;
use think\Controller;
class Login extends Controller
{
    public function index()
    {
    	if(session('id')&&session('username')){
    		$this->error('您已经登录系统，不能重复登录！','Index/index');
    	}
    	if(request()->isPost()){
    		$data=input('post.');
    		$status=model('admin')->login($data);
    		if($status==3){
    			$this->success('登录成功！','index/index');
    		}else{
    			$this->error('用户名或者密码错误！');
    		}
    		return;
    	}
        return view('login');
    }
}
