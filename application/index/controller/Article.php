<?php
namespace app\index\controller;

class Article extends Common
{
    public function index($aid){
        db('article')->where(array('id'=>$aid))->setInc('click');
        $arts=db('article')->field('a.*,u.uname')->alias('a')->join('ed_userinfo u','a.uid=u.uid')->find($aid);
        //根据登录情况判断是否可以点赞
        if(session('uid')){
            $uid=session('uid');
            $points=db('point')->where(array('uid'=>$uid,'article_id'=>$aid))->find();
            if($points){
                $class=true;
            }else{
                $class=false;
            }
        }else{
            $class=false;
            $uid='';
        }
        //点赞数量
        $zanNum=db('point')->where(array('article_id'=>$aid))->count();
        $this->assign([
            'arts'=>$arts,
            'uid'=>$uid,
            'class'=>$class,
            'zanNum'=>$zanNum,
            'id'=>$aid,
            ]);
        return view();
    }

    public function ajaxZan(){
        if(request()->isAjax()){
            $data=input('post.');
            $uid=$data['uid'];
            $articleId=$data['article_id'];
            if($uid){
                $arts=db('point')->where(array('uid'=>$uid,'article_id'=>$articleId))->find();
                if($arts){
                    $aid=$arts['id'];
                    db('point')->delete($aid);
                    echo 1;//取消点赞
                }else{
                    db('point')->insert($data);
                    echo 2;//点赞成功
                }
            }else{
                echo 3;//用户未登录，登陆后点赞
            }
        }else{
            $this->error('非法操作！');
        }
    }



}
