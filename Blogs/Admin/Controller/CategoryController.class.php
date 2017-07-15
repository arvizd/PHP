<?php
namespace Admin\Controller;
use Think\Controller;
class CategoryController extends CommonController {
    //分类列表
    public function index(){
        include './Blogs/Admin/framework/Category.class.php';
        $cate=M('cate')->order('sort ASC')->select();
        // $cate=Category::unlimtedForLayer($cate);
        // $cate=Category::getParents($cate,12);
        // $cate=Category::getChildsId($cate,4);
         $this->cate=Category::unlimtedForLevel($cate,'&ensp;&ensp;&ensp;&ensp;');
        // dump($cate);
        // die;
        // $this->cate=$cate;
        $this->display();
    }
	//展示添加分类
    public function addCate(){
        $this->pid=I('pid',0,'intval');
        $this->display();
        //echo GROUP_NAME;
    }
    //处理添加分类表单
    public function runAddCate(){
    	//dump($_POST);
        if(M('cate')->add($_POST)){
            $this->success('添加成功',U('Category/index'));
        }
        else{
            $this->error('添加失败');
        }
    }
     public function sortCate(){
        // $this->display();
        //echo GROUP_NAME;
        $db=M('cate');
        foreach ($_POST as $id => $sort) {
            $db->where(array('id'=>$id))->setField('sort',$sort);
        }
       redirect(U('Category/index'));
    }
}
