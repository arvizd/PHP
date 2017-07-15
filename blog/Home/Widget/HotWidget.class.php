<?php 
namespace Home\Widget;
use Think\Controller;
class HotWidget extends Controller{
	public function menu(){
		//dump($data);
		$field=array('id','title','click');
		$data=M('blog')->field($field)->order('click DESC')->limit(5)->select();
		$this->assign('data',$data);
        $this->display('Common:right');
		//return $this->renderFile('',$data);
	}
}
?>