<?php
namespace app\index\validate;
use think\Validate;
class User extends Validate
{
    protected $rule = [
        'email' =>  'require|email|unique:user',
        'password' =>  'require|min:6',
        'dopassword' =>  'require|min:6|confirm:password',
        'uname'=>'require|unique:userinfo',
        'sex'=>'require',
    ];
    
    protected $message = [
        'email.require' =>  '邮箱必须！',
        'email.email' =>  '邮箱格式错误！',
        'email.unique' =>  '邮箱必须唯一！',
        'password.require' =>  '密码必须！',
        'password.min' =>  '密码不得少于6位！',
        'dopassword.confirm' =>  '两次输入的密码不一致！',
        'dopassword.require' =>  '确认密码必须！',
        'dopassword.min' =>  '确认密码不得少于6位！',
        'uname.require'=>'用户昵称必填！',
        'uname.unique'=>'用户昵称不能重复！',
    ];

    protected $scene = [
        'edit'  =>  ['email','uname','sex','password'=>'min:6','dopassword'=>'min:6|confirm:password'],
    ];
       
}