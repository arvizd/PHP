<?php
return array(
	//'配置项'=>'配置值'
	// 'APP_GROUP_LIST'=>'Index,Admin',
	// 'DEFAULR_GROUP'=>'Index',
	// 'APP_GROUP_MODE'=>'1',
	//'APP_GROUP_PATH'=>'blog',
	'MODULE_ALLOW_LIST'=>  array('Home','Admin',), // 配置你原来的分组列表
    //'DEFAULT_MODULE'=>'Home',  // 默认模块
  	'DEFAULT_CONTROLLER'=>'Index', // 默认控制器名称
    'DEFAULT_ACTION'=>'index', // 默认操作名称
	'APP_GROUP_MODE'=>'1',
	
	'DB_TYPE'=>'mysql',
	'DB_HOST'=>'127.0.0.1',
	'DB_USER'=>'root',
	'DB_PWD'=>'1234',
	'DB_NAME'=>'blog',
	'DB_PREFIX'=>'b_',
	//'DEFAULT_C_LAYER'       =>  'Action', // 默认的控制器层名称
	
	//'DEFAULT_MODULE'        =>  'Home'， // 配置你原来的默认分组
	//'MULTI_MODULE'=> true, // 单模块访问



	

);