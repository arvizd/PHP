<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {
    public function _initialize(){
       // echo 2;
    	if(!isset($_SESSION['name'])){
			
    		$this->redirect(U('Login/index'));

    	
    	}
    }
}
?>