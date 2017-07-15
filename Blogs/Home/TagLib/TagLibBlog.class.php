<?php 
namespace Home\TagLib;
//自定义标签
//import('TagLib');
use Think\Template\TagLib;
class TagLibBlog extends TagLib{
	protected $tags=array(
		'nav'=>array('attr'=>'limit,order','close'=>1,),
		);
	public function _nav($attr,$content){
		//$attr=$this->parseXmlAttr($attr);
		//dump($attr);
		$str=<<<str
		<?php
		//require_once '../../../framework/Category.class.php';
		import("Org.Util.Category");
       \$_nav_cate=M('cate')->order("{$attr['order']}")->select();
       \$Category=new \Org\Util\Category();
        \$_nav_cate=\$Category::unlimtedForLayer(\$_nav_cate);
       //dump(\$cate);
		foreach (\$_nav_cate  as \$v):
			extract(\$v);
			\$url=U('/c_'.\$id);
		?>
str;
		$str.=$content;
		$str.='<?php endforeach;?>';
		return $str;
	}
}
?>