<?php
namespace app\admin\validate;
use think\Validate;
class Cate extends Validate
{
    protected $rule =   [
        'cate_name'  => 'require|unique:cate',
        'pid'   => 'require|number',  
        'type'   => 'require|number',  
    ];

    protected $message  =   [
        'cate_name.require' => '栏目名称不得为空！',
        'cate_name.unique' => '栏目名称不得重复！',
        'pid.require' => '上级栏目不得为空！',
        'pid.number'   => '上级栏目必须是数字',
        'type.require' => '栏目类型不得为空！',
        'type.number'   => '栏目类型必须是数字',
    ];

    protected $scene = [
        'edit'  =>  ['cate_name','pid','type'],
        'add'  =>  ['cate_name','pid','type'],
    ];


















}
