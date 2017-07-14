<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
	//展示登录页
    public function index(){
         $this->display();
    }
    //登录
    public function login(){
    	if(!IS_POST) halt('页面不存在');
    	if(I('captcha','','strtoupper')!=strtoupper(session('code'))) $this->error('验证码错误');
        if(I('roles')==0){
           $db=M('driver');
           $condition['tel']=I('user');
           $condition['_logic'] = 'or';
           $condition['email']=I('user');
           $user=$db->where($condition)->find();
           if(!$user||$user['password']!=I('pass','','md5')){
               $this->error('帐号或密码错误');
            }
        session('did',$user['did']);
        redirect(U('Home/Driver/index'));
        }
        else if(I('roles')==1){
            $db=M('owner');
            $condition['tel']=I('user');
            $condition['_logic'] = 'or';
            $condition['email']=I('user');
            $user=$db->where($condition)->find();
           if(!$user||$user['password']!=I('pass','','md5')){
               $this->error('帐号或密码错误');
            }
            session('oid',$user['oid']);
            redirect(U('Home/Owner/index'));
        }
        else{
            $db=M('admin');
            $condition['username']=I('user');
            $user=$db->where($condition)->find();
           if(!$user||$user['password']!=I('pass','','md5')){
               $this->error('帐号或密码错误');
            }
               $data=array(
               'name'=>$user['username'],
              );
            $db->save($data);
            session('name',$user['username']);
            redirect(U('Home/Admin/index'));

        }
    	

    }
    //验证码
     public function verify(){
       require_once (hframe_url.'Captcha.class.php');
       $t_captcha=new Captcha();
       $t_captcha->makeImage();
    }
}
