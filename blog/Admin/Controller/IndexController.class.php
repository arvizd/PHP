<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {
	//展示后台首页
    public function index(){
        $this->display();
        //echo GROUP_NAME;
    }
    //退出功能
    public function logout(){
    	session_unset();
    	session_destroy();
    	redirect('http://www.thinkphp.com/blog/index.php/Admin/Login/index');
    }
}
