<?php
namespace Admin\Controller;
use Think\Controller;
class BlogController extends CommonController {
	//博文列表
    public function index(){
        $this->blog= D('Blog')->getBlogs();
       // dump($blog);
        //die;
        $this->display();
        
    }
    //删除到回收站/还原
    public function toTrach(){
        $type=(int)$_GET[type];
        $msg=$type?'删除':'还原';
        $update=array(
            'id'=>(int)$_GET['id'],
            'del'=>$type,
            );
       if(M('blog')->save($update)){
        $this->success($msg.'成功',U('Admin/Blog/index'));
       } 
       else{
        $this->error($msg.'失败');
       }
    }
    //回收站
    public function trach(){
       $this->blog=D('Blog')->getBlogs(1);
       $this->display('index');
      // dump($blog);
    }
    //彻底删除
    public function delete(){
        $id=(int)$_GET['id'];
        if(D('Blog')->relation('attr')->delete($id)){
            $this->success('彻底删除成功',U('Admin/Blog/trach'));
        }
        else{
            $this->error('删除失败');
        }
    }
    //添加博文
    public function blog(){
        //博文所属分类
        include './Admin/framework/Category.class.php';
        $cate=M('cate')->order('sort ASC')->select();
        $this->cate=Category::unlimtedForLevel($cate);
        //博文属性
        $this->attr=M('attr')->select();

    	$this->display();
    }
    //处理添加博文表单
    public function addBlog(){
        $data=array(
            'title'=>$_POST['title'],
            'content'=>$_POST['content'],
            'summary'=>$_POST['summary'],
            'time'=>time(),
            'click'=>(int)$_POST['click'],
            'cid'=>(int)$_POST['cid'],
            );
        if($bid=M('blog')->add($data)){
            if(isset($_POST['aid'])){
                $sql='INSERT INTO b_blog_attr (bid,aid) VALUES';
                foreach ($_POST['aid'] as $v) {
                    $sql.='('.$bid.','.$v.'),';
                }
                $sql=rtrim($sql,',');
                //dump($sql);
                M('blog_attr')->execute($sql);
            }
            $this->success('添加成功',U('Admin/Blog/index'));
        }
       else{
        $this->error('添加失败');
       }
        
    }
    
}
