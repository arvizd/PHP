<?php 

/**
* 分类
*/
namespace Admin\Controller;
//namespace Home\framework;
//namespace Think\Controller;
class Category {
	//组合一维数组
	static  function unlimtedForLevel($cate,$html='--',$pid=0,$level=0){
		$arr=array();
		foreach ($cate as $v) {
			if ($v['pid']==$pid) {
				$v['level']=$level+1;
				$v['html']=str_repeat($html, $level);
				$arr[]=$v;
				$arr=array_merge($arr,self::unlimtedForLevel($cate,$html,$v['id'],$level+1));
			}
		}
		return $arr;
	}
	//组合多维数组
	static  function unlimtedForLayer($cate,$pid=0,$name='cate'){
		$arr=array();
		foreach ($cate as $v) {
			if ($v['pid']==$pid) {
				$v[$name]=self::unlimtedForLayer($cate,$v['id'],$name);
				$arr[]=$v;
				 
			}
		}
		return $arr;
	}
	//从子类id找到父类
	static  function getParents($cate,$id){
		$arr=array();
		foreach ($cate as $v) {
			if ($v['id']==$id) {
				$arr[]=$v;
				$arr=array_merge(self::getParents($cate,$v['pid']),$arr);
				 
			}
		}
		return $arr;
	}
	//从父类id找到所有子类id
	static  function getChildsId($cate,$pid){
		$arr=array();
		foreach ($cate as $v) {
			if ($v['pid']==$pid) {
				$arr[]=$v['id'];
				$arr=array_merge($arr,self::getChildsId($cate,$v['id']));
				 
			}
		}
		return $arr;
	}
	//从父类id找到所有子类
	static  function getChilds($cate,$pid){
		$arr=array();
		foreach ($cate as $v) {
			if ($v['pid']==$pid) {
				$arr[]=$v;
				$arr=array_merge($arr,self::getChildsId($cate,$v['id']));
				 
			}
		}
		return $arr;
	}
}
?>