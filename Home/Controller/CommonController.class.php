<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
    public function _initialize(){
    	if(!isset($_SESSION['did'])&&!isset($_SESSION['oid'])&&!isset($_SESSION['name'])){
			$this->error('您还没有登录！',U('Login/index'));
    	}
    }
}
?>