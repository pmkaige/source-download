<?php
namespace app\index\controller;
use think\Controller;
class Common extends Controller
{
    public function _initialize(){
        $this->getTopNav();
    	$this->getbottomNav();
    	$this->current(input('id'),input('aid'));
    	$this->position(input('id'),input('sid'),input('aid'));
    }

    //调用顶部导航
    public function getTopNav(){
    	$topNav=db('cate')->where(array('pid'=>0,'pos'=>1))->order('sort desc')->select();
    	$this->assign([
    		'topNav'=>$topNav,
    		]);
    }

    //调用底部导航
    public function getbottomNav(){
        $bottomNav=db('cate')->where(array('pid'=>0,'pos'=>2))->order('sort desc')->select();
        $this->assign([
            'bottomNav'=>$bottomNav,
            ]);
    }

    //栏目高亮处理
    public function current($cateid=0,$aid=0){
    	$pid=0;
    	if($aid!=0){
    		$arts=db('article')->field('cate_id')->find($aid);
    		$cateid=$arts['cate_id'];
    		$cates=db('cate')->find($cateid);
    		$pid=$cates['pid'];
    	}
    	$this->assign([
    		'cateid'=>$cateid,
    		'pid'=>$pid,
    		]);
    }

    //面包屑导航
    public function position($cateid=0,$sid=0,$aid=0){
    	$posArr=model('cate')->pos($cateid,$sid,$aid);
    	$this->assign([
    		'position'=>$posArr,
    		]);
    }



}
