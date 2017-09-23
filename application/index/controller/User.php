<?php
namespace app\index\controller;

class User extends Common
{
    protected $beforeActionList = [
        'checkLogin',
    ];

    public function checkLogin(){
        if(session('uid')){
            $this->error('您已经登录成功！','Index/index');
        }
    }

    public function reg(){
    	if(request()->isPost()){
    		$data=input('post.');
    		if(!captcha_check($data['verifycode'])){
			 //验证失败
    			$this->error('验证码错误！');
			};
    		$validate=validate('user');
    		if (!$validate->check($data)) {
			    $this->error($validate->getError());
			}
    		$status=model('User')->reg($data);
    		if($status=2){
    			$this->success('注册成功！','Member/editInfo');
    		}else{
    			$this->error('注册失败！');
    		}
    		return;
    	}
        return view();
    }

    public function login(){
    	if(request()->isPost()){
    		$data=input('post.');
    		$status=model('User')->login($data);
    		if($status==3){
    			$url=$_SERVER["HTTP_REFERER"];
    			$this->success('登录成功！','index/index');
    		}else{
    			$this->error('用户名或者密码错误！');
    		}
    		return;
    	}
    	return view();
    }
}
