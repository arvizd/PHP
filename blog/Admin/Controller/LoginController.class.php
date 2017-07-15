<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
	//展示登录页
    public function index(){
        $this->display();
    }
    //登录
    public function login(){
    	//dump($_POST);
    	if(!IS_POST) halt('页面不存在');
    	if(I('code','','strtoupper')!=strtoupper(session('verify'))) $this->error('验证码错误');
    	$db=M('user');
    	$user=$db->where(array('username'=>I('username')))->find();
    	//dump($user);
    	if(!$user||$user['password']!=I('password','','md5')){
    		$this->error('帐号或密码错误');
    	}
    	$data=array(
    		'id'=>$user['id'],
    		'logintime'=>$user['logintime'],
    		'loginip'=>$user['loginip'],
    		);
    	$db->save($data);
    	session('id',$user['id']);
    	session('username',$user['username']);
    	session('logintime',date('Y-m-d H:i:s',$user['logintime']));
    	session('loginip',$user['loginip']);
    	//dump($_SESSION);
    	redirect('http://www.thinkphp.com/blog/index.php/Admin');

    }
    //验证码
     public function verify(){
        //$this->display();
       require_once './Admin/framework/Image.class.php';
       Image::buildImageVerify(); 


    
    }
}
