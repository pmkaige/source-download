<?php
namespace app\admin\model;
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
      static $arr=array();
      foreach ($data as $k => $v) {
        if($v['pid']==$id){
          $arr[]=$v['id'];
          $this->_getChildIds($data,$v['id']);
        }
      }
      return $arr;
   }


}
