<?php
return array(
	//'配置项'=>'配置值'
	// 'DB_TYPE'=>'mysql',
	// 'DB_HOST'=>'127.0.0.1',
	// 'DB_USER'=>'root',
	// 'DB_PWD'=>'1234',
	// 'DB_NAME'=>'blog',
	// 'DB_PREFIX'=>'b_',
	'DEFAULT_MODULE'=>'Home',  // 默认模块
  	'DEFAULT_CONTROLLER'=>'Index', // 默认控制器名称
    'DEFAULT_ACTION'=>'index', // 默认操作名称
	'APP_AUTOLOAD_PATH'=>'@.TagLib',
	'TAGLIB_BUILD_IN'=>'Cx,Home\TagLib\TagLibBlog',
	//'TAGLIB_PRE_LOAD'=>'Home\\TagLib\\TagLibBlog',
	//    路由规则
	//'BIND_MODULE'=>'Home',
	//'MODULE_ALLOW_LIST' => array('Home'),

	'URL_ROUTER_ON' => TRUE,
    'URL_ROUTE_RULES' => array(
        '/^c_(\d+)$/' =>'Home/List/index?id=:1',
        ':id\d'=>'Home/Show/index',
        //'Home'=>'Home/Index/index',
       // 'Admin'=>'Admin/Index/index',
    'URL_MODEL'=>2,

    ),
//'SHOW_PAGE_TRACE'=>true,
    //开启静态缓存
     'HTML_CACHE_ON'=>true,
     'HTML_CACHE_RULES'=>array(
     	'Show:index'=>array('{:module}_{:action}_{id}',0),
     	),
     //动态缓存
     //'DATA_CACHE_TYPE'=>'Memcache',
);