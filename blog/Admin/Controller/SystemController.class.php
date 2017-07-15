<?php
namespace Admin\Controller;
use Think\Controller;
class SystemController extends CommonController {
	//验证码设置
    public function verify(){
        $this->display();
    }
   	 public function updateVerify(){
        //$this->display();
        //dump($_POST);
        // if(F('verify',$_POST,'./Admin/Conf/')){
        // 	$this->success('修改成功','http://www.thinkphp.com/blog/index.php/Admin/System/verify');
        // }
        // else{
        // 	$this->error('修改失败');
        // }
         $file = './Admin/Conf/verify.php';

        if(writeArr($_POST,$file)){

            $this->success('修改成功','http://www.thinkphp.com/blog/index.php/Admin/System/verify');

        }
        else{

            $this->error('修改失败');

        }

    }
}
