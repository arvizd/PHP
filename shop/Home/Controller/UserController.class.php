<?php
namespace Home\Controller;
use Think\Controller;
//用户控制器
class UserController extends Controller{
	//登录功能
	function login(){
		//echo 'I am logining';
		$this->display();
	}
	//注册功能
	function register(){
		//echo 'I am registering';
			$this->display();
	}
}
?>