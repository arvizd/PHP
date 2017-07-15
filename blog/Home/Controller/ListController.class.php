<?php
namespace Home\Controller;
use Think\Controller;
class ListController extends Controller {
    public function index(){
    	//dump($_GET['id']);
    	//die;
    	import("Org.Util.Category");
    	//import("Think.Page");
    	$id=(int)$_GET['id'];
    	$Cate=M('Cate')->order('sort ASC')->select();
    	$Category=new \Org\Util\Category();
        $cids=$Category::getChildsId($Cate,$id);
        $cids[]=$id;
        $where=array('cid'=>array('IN',$cids));
        $count=M('blog')->where($where)->count();
        $Page=new \Think\Page($count,15);
       // $show= // 分页显示输出
       $limit=$Page->firstRow.','.$Page->listRows;

      //dump($limit);die;
      /// dump($count);die;
       $blog=D('BlogView')->limit($Page->firstRow.','.$Page->listRows)-> getAll($where);

        $this->blog=$blog;	
    	//dump($blog);die; 
    	$this->page=$Page->show();
		//$this->assign('page',$show);// 赋值分页输出
        $this->display();
    }
}