<?php
namespace Home\Controller;
use Think\Controller;
class AdminController extends CommonController {
    //展示管理首页
    public function index(){
    	$name=session('name');
    	$this->name=$name;
        $this->display();
    }
}