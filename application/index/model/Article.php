<?php
namespace app\index\model;
use think\Model;
class Article extends Model
{
   //cateid=0表示取全站资源
   public function newSource($cateid,$num){
        if($cateid!=0){
            $sonIds=model('cate')->getChildIds($cateid);
            $sonIds[]=$cateid;
            $artRes=db('article')->field('a.title,a.id,a.addtime,a.cate_id,c.cate_name,c.pid')->alias('a')->join('ed_cate c','a.cate_id = c.id')->limit($num)->order('addtime desc')->where('a.cate_id','in',$sonIds)->select();
        }else{
          $artRes=db('article')->field('a.title,a.id,a.addtime,a.cate_id,c.cate_name,c.pid')->alias('a')->join('ed_cate c','a.cate_id = c.id')->limit($num)->order('addtime desc')->select();
        }
        return $artRes;
   }

   //全站热门资源
   public function hotSource($num){
    $artRes=db('article')->field('a.title,a.id,a.addtime,a.cate_id,c.cate_name,c.pid')->alias('a')->join('ed_cate c','a.cate_id = c.id')->limit($num)->order('click desc')->select();
    return $artRes;
   }

   //本周热点
   public function weekSource($num){
    $artRes=db('article')->field('a.title,a.id,a.addtime,a.cate_id,c.cate_name,c.pid')->alias('a')->join('ed_cate c','a.cate_id = c.id')->order('click desc')->select();
    foreach ($artRes as $k => $v) {
      $sTime=604800;
      if((time()-$v['addtime'])>$sTime){
        unset($artRes[$k]);
      }
    }
    foreach ($artRes as $k => $v) {
      if($k>=$num){
        unset($artRes[$k]);
      }
    }
    return $artRes;
   }

   


}
