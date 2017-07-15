<?php
return array(
	//'配置项'=>'配置值'
	//'TEPL_PARSE_STRING'=>array(
		//'__PUBLIC__'=>__ROOT__.'/Admin/Public/',
			///	),
	// 'DB_TYPE'=>'mysql',
	// 'DB_HOST'=>'127.0.0.1',
	// 'DB_USER'=>'root',
	// 'DB_PWD'=>'1234',
	// 'DB_NAME'=>'blog',
	// 'DB_PREFIX'=>'b_',
	'MODULE_ALLOW_LIST' => array('Admin'),
	//'DEFAULT_MODULE'=>'Admin',  // 默认模块
  	'DEFAULT_CONTROLLER'=>'Login', // 默认控制器名称
    'DEFAULT_ACTION'=>'index', // 默认操作名称
	'LOAD_EXT_CONFIG'=>'verify',
	'SHOW_PAGE_TRACE'=>true,
	// 'URL_ROUTER_ON' => TRUE,
    //'URL_ROUTE_RULES' => array(
   //     'Admin' => 'Admin/Login/index',
   // ),
);