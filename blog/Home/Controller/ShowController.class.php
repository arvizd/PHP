<?php
namespace Home\Controller;
use Think\Controller;
class ShowController extends Controller {
    public function index(){
    	$id=$_GET['id'];
    	$this->blog=M('blog')->find($id);
        $this->display();
    }
}