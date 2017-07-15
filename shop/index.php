<?php
header('content-type:text/html;charset=utf-8');
//生产和开发模式
define('APP_DEBUG',true);//开发
//define('APP_DEBUG',false);//生产
//静态文件
define('css_url','/shop/Public/CSS/');
define('img_url','/shop/Public/images/');
define('js_url','/shop/Public/js/');
//admin
define('acss_url','/shop/Admin/Public/CSS/');
define('aimg_url','/shop/Admin/Public/images/');
define('ajs_url','/shop/Admin/Public/js/');
//引入框架接口文件
include('../ThinkPHP/ThinkPHP.php');



?>