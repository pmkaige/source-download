<?php
namespace app\index\controller;

class Category extends Common
{
    public function lst($id,$sid=0)
    {
    	//根据主栏目id查询子栏目数据
    	$sonRes=db('cate')->where(array('pid'=>$id))->order('sort desc')->select();
    	//调用列表数据
    	if($sid==0){
    		$ids=model('cate')->getChildIds($id);
    		$ids[]=intval($id);
    		$artRes=db('article')->field('a.*,c.cate_name')->alias('a')->join('ed_cate c','a.cate_id=c.id')->where('cate_id','in',$ids)->where(array('a.status'=>1))->order('id desc')->paginate(2);
    	}else{
    		$artRes=db('article')->field('a.*,c.cate_name')->alias('a')->join('ed_cate c','a.cate_id=c.id')->where('cate_id','=',$sid)->order('id desc')->paginate(2);
    	}
        $currentPage=$artRes->currentPage(); 
        $lastPage=$artRes->lastPage(); 
    	$this->assign([
    		'sonRes'=>$sonRes,
    		'id'=>$id,
            'artRes'=>$artRes,
            'currentPage'=>$currentPage,
            'lastPage'=>$lastPage,
    		]);
        return view();
    }

    public function cate_index($id){
        if(!$id){
            $this->error('非法操作！');
        }
        $cates=db('cate')->find($id);
        $this->assign([
            'cates'=>$cates,
            ]);
        return view();
    }
}
