<?php
namespace app\admin\controller;
class Cate extends Common
{
    public function lst()
    {
        if(request()->isPost()){
            $data=input('post.'); 
            foreach ($data['sort'] as $k => $v) {
                db('cate')->where('id',$k)->update(['sort'=>$v]);
            }
            $this->success('排序成功！');
            return;
        }
        $cateRes=model('cate')->cateTree();
        $this->assign([
            'cateRes'=>$cateRes,
            ]);
        return view('list');
    }

    public function add()
    {
        if(request()->isPost()){
            $data=input('post.');
            $validate=validate('cate');
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
            }
            $add=db('cate')->insert($data);
            if($add){
                $this->success('添加栏目成功','lst');
            }else{
                $this->error('添加栏目失败');
            }
            return;
        }
        $cateRes=model('cate')->cateTree();
        $this->assign([
            'cateRes'=>$cateRes,
            ]);
        return view();
    }

    public function edit()
    {
        if(request()->isPost()){
            $data=input('post.');
            $validate=validate('cate');
            if(!$validate->scene('edit')->check($data)){
                $this->error($validate->getError());
            }
            $save=db('cate')->update($data);
            if($save !== false){
                $this->success('修改栏目成功！','lst');
            }else{
                $this->error('修改栏目失败！');
            }
            return;
        }
        $cateId=input('id');
        $cates=db('cate')->find($cateId);
        $cateRes=model('cate')->cateTree();
        $this->assign([
            'cateRes'=>$cateRes,
            'cates'  =>$cates
            ]);
        return view();
    }


    public function del(){
        $id=input('id');
        $childIds=model('cate')->getChildIds($id);
        $childIds[]=intval($id);
        db('article')->where('cate_id','in',$childIds)->delete();//批量删除栏目下的文章
        $del=db('cate')->delete($childIds);
        if($del !== false){
            $this->success('删除栏目成功！','lst');
        }else{
            $this->error('删除栏目失败！');
        }

    }

















}
