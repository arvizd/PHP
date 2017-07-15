<?php
namespace Admin\Controller;
use Think\Controller;
class AttributeController extends CommonController {
	//属性列表
    public function index(){
        $this->attr=M('attr')->select();
        $this->display();
        
    }
    //添加属性
    public function addAttr(){
    	 $this->display();
    }
    public function runAddAttr(){
         //dump($_POST);
         if(M('attr')->add($_POST)){
            $this->success('添加成功',U('Attribute/index'));
        }
        else{
            $this->error('添加失败');
        }
    }
}
