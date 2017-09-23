<?php
namespace app\index\controller;

class Search extends Common
{
    public function lst($key='',$tag='')
    {   
        $artRes=db('article')->field('a.*,c.cate_name')->alias('a')->join('ed_cate c','a.cate_id=c.id')->where(array('a.id'=>0,'a.status'=>1))->order('id desc')->paginate(2);

        if($key){
            $map['a.keywords']=['like','%'.$key.'%'];
            $artRes=db('article')->field('a.*,c.cate_name')->alias('a')->join('ed_cate c','a.cate_id=c.id')->where($map)->order('id desc')->paginate(2,false,['query'=>array('key'=>$key)]);
        }

        if($tag){
            $map['a.tags']=['like','%'.$tag.'%'];
            $artRes=db('article')->field('a.*,c.cate_name')->alias('a')->join('ed_cate c','a.cate_id=c.id')->where($map)->order('id desc')->paginate(2,false,['query'=>array('tag'=>$tag)]);
        }

        $currentPage=$artRes->currentPage(); 
        $lastPage=$artRes->lastPage(); 
    	$this->assign([
            'artRes'=>$artRes,
            'currentPage'=>$currentPage,
            'lastPage'=>$lastPage,
    		]);
        return view();
    }
}
