<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    //展示首页
    public function index(){
        $this->display();
    }
    //退出功能
    public function logout(){
    	session_unset();
    	session_destroy();
        $this->success('即将退出，回到首页',U('Home/Index/index'));
    }
}