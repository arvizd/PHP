<?php
namespace Home\Controller;
use Think\Controller;
//用户控制器
class GoodsController extends Controller{
	//商品列表
	function showlist(){
		
		$this->display();
	}
	//商品详情
	function detail(){
		
		$this->display();
	}
}
?>