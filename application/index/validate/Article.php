<?php
namespace app\index\validate;
use think\Validate;
class Article extends Validate
{
    protected $rule = [
        'title' =>  'require|min:3|unique:article',
        'type' =>  'require',
        'dowurl' =>  'require',
        'cate_id'=>'require',
    ];
    
    protected $message = [
        'title.require' =>  '标题必须！',
        'title.min' =>  '标题不能少于3位！',
        'title.unique' =>  '标题必须唯一！',
        'type.require' =>  '资源类型必须！',
        'cate_id.require' =>  '所属栏目必须！',
        'dowurl.require' =>  '下载地址必须！',
    ];

    protected $scene = [
        'add'  =>  ['title','type','dowurl','cate_id'],
        'edit'  =>  ['title','type','dowurl','cate_id'],
    ];
       
}