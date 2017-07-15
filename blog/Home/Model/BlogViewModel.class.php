<?php 
namespace Home\Model;
use Think\Model\ViewModel;
class BlogViewModel extends ViewModel {
   public $viewFields = array(
     'Blog'=>array('id','title','time','click','summary',
     	'_type'=>'LEFT'
     	),
     'Cate'=>array('name','_on'=>'blog.cid=cate.id'),
     //'User'=>array('name'=>'username', '_on'=>'Blog.user_id=User.id'),
   );
   public function getAll($where){
   	 	return $this->where($where)->select(); 
   }
 }
?>