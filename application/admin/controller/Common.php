<?php
namespace app\admin\controller;
use think\Controller;
class Common extends Controller
{
    public function _initialize(){
        if(!session('id') || !session('username')){
            $this->error('请先登录系统！','Login/index');
        }
    }
}
