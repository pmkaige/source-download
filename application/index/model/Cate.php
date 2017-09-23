<?php
namespace app\index\model;
use think\Model;
class Cate extends Model
{
   
   public function cateTree(){
        $data=$this->order('sort desc')->select();
        return $this->sortCate($data);
   }

   public function sortCate($data,$pid=0,$level=0){
        static $arr=[];
        foreach ($data as $k => $v) {
            if($v['pid']==$pid){
                $v['level']=$level;
                $arr[]=$v;
                $this->sortCate($data,$v['id'],$level+1);
            }
        }
        return $arr;
   }

   //获取无限级子栏目id

   public function getChildIds($id){
      $data=$this->select();
      return $this->_getChildIds($data,$id);
   }

   private function _getChildIds($data,$id){
      $arr=array();
      foreach ($data as $k => $v) {
        if($v['pid']==$id){
          $arr[]=$v['id'];
          $this->_getChildIds($data,$v['id']);
        }
      }
      return $arr;
   }

   //面包屑导航
   public function pos($cateid=0,$sid=0,$aid=0){
      $posArr=array();
      if($sid!=0){
        $posArr[0]=db('cate')->field('id,cate_name,pid')->find($cateid);
        $posArr[1]=db('cate')->field('id,cate_name,pid')->find($sid);
      }else{
        if($aid!=0){
          $arts=db('article')->field('cate_id')->find($aid);
          $_cateid=$arts['cate_id'];
          $cates=db('cate')->field('id,cate_name,pid')->find($_cateid);
          if($cates['pid']==0){
            $posArr[0]=$cates;
          }else{
            $_cates=db('cate')->field('id,cate_name,pid')->find($cates['pid']);
            $posArr[0]=$_cates;
            $posArr[1]=$cates;
          }
          // $posArr[0]=db('cate')->field('id,cate_name')->find($cateid);
        }else{
          $posArr[0]=db('cate')->field('id,cate_name,pid')->find($cateid);
        }
      }

      return $posArr;
   }


}
