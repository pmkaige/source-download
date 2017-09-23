<?php
namespace app\admin\model;
use think\Model;
class Admin extends Model
{
   
   public function login($data){
      $admins=db('admin')->where(array('username'=>$data['username']))->find();
      if($admins){
        $password=md5($data['password']);
        $_password=$admins['password'];
        if($password==$_password){
          session('id',$admins['id']);
          session('username',$admins['username']);
          return 3;//登录成功
        }else{
          return 2;//密码错误
        }
      }else{
        return 1;//用户不存在
      }
   }


}
