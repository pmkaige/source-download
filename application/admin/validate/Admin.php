<?php
namespace app\admin\validate;
use think\Validate;
class Admin extends Validate
{
    

    protected $rule =   [
        'username'  => 'require|unique:admin',
        'password'   => 'require|min:6',   
    ];

    protected $message  =   [
        'username.require' => '管理员名称不得为空！',
        'username.unique' => '管理员名称不得重复！',
        'password.require' => '密码不得为空！',
        'password.min' => '密码不得少于6位！',
    ];

    protected $scene = [
        'add'  =>  ['username','password'],
        'edit'  =>  ['username','password'=>'min:6'],
    ];


















}
