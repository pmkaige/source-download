<?php
namespace app\index\controller;

class Index extends Common
{
    public function index()
    {
    	//最新资源
    	$newSource=model('article')->newSource(0,13);
    	//最新音乐
    	$newMusic=model('article')->newSource(31,12);
    	//最新电影
    	$newFilm=model('article')->newSource(8,12);
    	//最新游戏
    	$newGam=model('article')->newSource(16,12);
    	//最新动漫
    	$newKatong=model('article')->newSource(20,12);
    	//最新图书
    	$newBook=model('article')->newSource(21,12);
    	//最新综艺
    	$newZongyi=model('article')->newSource(22,12);
    	//最新软件
    	$newSoft=model('article')->newSource(23,12);
    	//最新资料
    	$newZiliao=model('article')->newSource(24,12);
    	//最新教育
    	$newEdu=model('article')->newSource(25,12);
    	//全站热门资源
    	$hotRes=model('article')->hotSource(13);
    	//本周热点
    	$weekHot=model('article')->weekSource(20);
    	$this->assign([
    		'newSource'=>$newSource,//最新资源
    		'newMusic'=>$newMusic,//最新音乐
    		'newFilm'=>$newFilm,//最新电影
    		'newGam'=>$newGam,//最新游戏
    		'newKatong'=>$newKatong,//最新动漫
    		'newBook'=>$newBook,//最新图书
    		'newZongyi'=>$newZongyi,//最新综艺
    		'newSoft'=>$newSoft,//最新软件
    		'newZiliao'=>$newZiliao,//最新资料
    		'newEdu'=>$newEdu,//最新教育
    		'hotRes'=>$hotRes,//全站热门资源
    		'weekHot'=>$weekHot,
    		]);
        return view();
    }
}
