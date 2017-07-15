<?php
namespace Admin\Model;
use Think\Model\RelationModel;
class BlogModel extends RelationModel{
	//关联两个表
	//Protected $tableName='blog';
	protected $_link=array(
		'attr'=>array(
			'mapping_type'=>self::MANY_TO_MANY,
            'foreign_key'=>'bid',
            'relation_foreign_key'=>'aid',
            'relation_table'=>'b_blog_attr',
			),
		'cate'=>array(
			'mapping_type'=>self::BELONGS_TO,
            'foreign_key'=>'cid',
            'mapping_fields'=>'name',
            'as_fields'=>'name:cate',
            //'relation_foreign_key'=>'id',
            //'relation_table'=>'b_attr',
			),		
		
		);
	public function getBlogs($type=0){
		 $field=array('del');
        $where=array('del'=>$type,);
        return $this->relation(true)->field($field,true)->where($where)->select();
	}
} 
?>