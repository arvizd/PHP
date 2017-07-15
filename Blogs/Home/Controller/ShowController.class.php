<?php
namespace Home\Controller;
use Think\Controller;
class ShowController extends Controller {
    public function index(){
    	$id=$_GET['id'];
         //M('blog')->where(array('id'=>$id,))->setInc('click');
    	$field=array('id','title','time','content','cid');
    	$this->blog=M('blog')->field($field)->find($id);
    	$cid=$this->blog['cid'];
        //dump($cid);die;
    	import("Org.Util.Category");
    	//import("Think.Page");
    	//$id=(int)$_GET['id'];
    	$Cate=M('cate')->order('sort ASC')->select();
       // dump($Cate);die;
    	$Category=new \Org\Util\Category();
        $this->parent=$Category::getParents($Cate,$cid);
       //dump($parent);die;

        $this->display();
    }
    public function clickNum(){
      $id=$_GET['id'];
      //echo $id;
      $where=array('id'=>$id,);
      M('blog')->where($where)->setInc('click');
      $click=M('blog')->where($where)->getField('click');
      //dump($click);die;
     echo 'document.write('.$click.')';
    }
}