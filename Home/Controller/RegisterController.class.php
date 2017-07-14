<?php
namespace Home\Controller;
use Think\Controller;
class RegisterController extends Controller {
	//展示注册页
    public function index(){
        $this->display();
    }
    //注册
    public function register(){

    	if(!IS_POST) halt('页面不存在');
    	if(I('register')==0){
             $db=M('driver');
             $dataList[] = array('did'=>null,'name'=>I('d_name'),'password'=>md5(I('d_password')),'ID'=>I('d_ID'),
                'tel'=>I('d_tel'),'email'=>I('d_email'),'place'=>I('d_place'),'d_age'=>I('d_age'),
                'd_type'=>I('d_type'),'status'=>0
                );
             $add=$db->addAll($dataList); 
             if($add){
                 $this->success('注册成功，即将前往登录',U('Login/index'));
                 
             }
             else{
                $this->error('注册失败，即将回到注册',U('Register/index'));
                
            }
         }
         else{
             $db=M('owner');
             $dataList[] = array('oid'=>null,'name'=>I('o_name'),'password'=>md5(I('o_password')),'ID'=>I('o_ID'),
                'tel'=>I('o_tel'),'email'=>I('o_email'),'place'=>I('o_place'),'comp'=>I('o_comp')
                );
             $add=$db->addAll($dataList); 
             if($add){
                 $this->success('注册成功，即将前往登录',U('Login/index'));
                 
             }
             else{
                $this->error('注册失败，即将回到注册',U('Register/index'));
                
            }
         }

    }
    //ajax验证
    //ID
    public function dID_verify(){
           $db=M('driver');
           $condition['ID']=I('d_ID');
           $dID=$db->where($condition)->find();
           if(!$dID){
                echo '- ok.';   
            }
            else{
                echo '<font color="red">- 身份证号被注册了</font>';
            }
        }
    public function oID_verify(){
           $db=M('owner');
           $condition['ID']=I('o_ID');
           $oID=$db->where($condition)->find();
           if(!$oID){
                echo '- ok.';   
            }
            else{
                echo '<font color="red">- 身份证号被注册了</font>';
            }
        }
    //tel
    public function dtel_verify(){
            $db=M('driver');
            $condition['tel']=I('d_tel');
            $dtel=$db->where($condition)->find();
            if(!$dtel){
                echo '- ok.';   
            }
            else{
                echo '<font color="red">- 手机号被注册了</font>';
            }
        }
     public function otel_verify(){
            $db=M('owner');
            $condition['tel']=I('o_tel');
            $otel=$db->where($condition)->find();
            if(!$otel){
                echo '- ok.';   
            }
            else{
                echo '<font color="red">- 手机号被注册了</font>';
            }
        }
    //email
    public function demail_verify(){
            $db=M('driver');
            $condition['email']=I('d_email');
            $demail=$db->where($condition)->find();
            if(!$demail){
                echo '- ok.';   
            }
            else{
                echo '<font color="red">- 邮箱被注册了</font>';
            }

        }
     public function oemail_verify(){
            $db=M('owner');
            $condition['email']=I('o_email');
            $oemail=$db->where($condition)->find();
            if(!$oemail){
                echo '- ok.';   
            }
            else{
                echo '<font color="red">- 邮箱被注册了</font>';
            }

        }

}