<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	if(!$list=S('index_list')){
    	$list=M('cate')->order('sort ASC')->where(array('pid'=>0,))->select();
    	//$this->cate=$list;
    	$db=M('blog');
    	$field=array('id','title','time');
    	import("Org.Util.Category");
    	$Cate=M('cate')->order('sort ASC')->select();
    	$Category=new \Org\Util\Category();
        foreach ($list as $k => $v){
        	$cids=$Category::getChildsId($Cate,$v['id']);
        	$cids[]=$v['id'];
        	$where=array('cid'=>array('IN',$cids));
        	$list[$k]['blog']=$db->field($field)->where($where)->order('time DESC')->select();
        	//dump($cids);
        }
       // dump($list);
       //  die;
        S('index_list',$list,3600*24);
    	}

    	$this->Cate=$list;
        $this->display();
    }
} 