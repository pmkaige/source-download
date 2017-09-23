<?php
namespace app\admin\validate;
use think\Validate;
class Article extends Validate
{
    protected $rule =   [
        'title'  => 'require|unique:article',
        'type'   => 'require|number',  
    ];

    protected $message  =   [
        'title.require' => '标题名称不得为空！',
        'title.unique' => '标题名称不得重复！',
        'type.require' => '资源类型不得为空！',
        'type.number'   => '资源类型必须是数字',
    ];

    protected $scene = [
        'edit'  =>  ['title','type'],
        'add'  =>  ['title','type'],
    ];


















}
