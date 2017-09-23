<?php
namespace app\index\model;
use think\Model;
class User extends Model
{
  public function reg($data){
        //用户表
        $dataUser=array();
        // 用户信息表 
        $dataUserInfo=array();
        $dataUser['email']=$data['email'];
        $dataUser['password']=$data['password'];
        $dataUser['dopassword']=$data['dopassword'];
        //
        $ip=getIP();
        $adress=getCity($ip);
        $dataUserInfo['uname']=$data['uname'];
        $dataUserInfo['qq']=$data['qq'];
        $dataUserInfo['sex']=$data['sex'];
        $dataUserInfo['regtime']=time();
        $dataUserInfo['lasttime']=time();
        $dataUserInfo['ip']=$ip;
        $dataUserInfo['adress']=$adress;
        $user = $this::create([
            'email'  =>  $dataUser['email'],
            'password' =>  md5($dataUser['password']),
        ]);
        //
        if($user){
          $uid=$user->id;
          $dataUserInfo['uid']=$uid;
          $add=db('userinfo')->insert($dataUserInfo);
          if($add){
            session('uid',$uid);
            session('uname',$dataUserInfo['uname']);
            return 2;//注册成功
          }else{
            return 3;//用户信息添加失败
          }
        }else{
          return 1;//注册失败
        }
  }

  //登录
  public function login($data){
    $email=$data['email'];
    $user=db('user')->where(array('email'=>$email))->find();
    if($user){
      $uid=$user['id'];
      $uinfo=db('userinfo')->field('uname,lasttime')->where(array('uid'=>$uid))->find();
      $uname=$uinfo['uname'];
      $password=md5($data['password']);
      $_password=$user['password'];
      if($password==$_password){
          session('uid',$uid);
          session('uname',$uname);
          //计算活跃天数
          $dayTime=86400;
          if((time()-$uinfo['lasttime'])>=$dayTime){
            db('userinfo')->where(array('uid'=>$uid))->setInc('live_day');
          }
          //修改最后登录时间
          db('userinfo')->where(array('uid'=>$uid))->update(['lasttime'=>time()]);
          return 3;//登录成功
      }else{
        return 2;//密码错误
      }
    }else{
      return 1;//没有该用户名
    }
  }


}
