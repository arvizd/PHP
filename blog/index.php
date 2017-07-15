<?php
header('content-type:text/html;charset=utf-8');
//生产和开发模式
define('APP_DEBUG',true);//开发
//define('APP_DEBUG',false);//生产

//define('__PUBLIC__','/blog/');
define('BIND_MODULE','Admin');
//引入后台文件
define('acss_url','/blog/Admin/Public/Css/');
define('aimg_url','/blog/Admin/Public/images/');
define('ajs_url','/blog/Admin/Public/Js/');
//引入后台文件
define('hcss_url','/blog/Home/Public/Css/');
define('himg_url','/blog/Home/Public/images/');
define('hjs_url','/blog/Home/Public/Js/');
//引入框架接口文件
include('../ThinkPHP/ThinkPHP.php');

        echo '_PHP_FILE_:';dump(_PHP_FILE_);
echo 'dirname(_PHP_FILE_):';dump(dirname(_PHP_FILE_));
echo 'PHP_FILE:';dump(PHP_FILE);
echo '__APP__:';dump(__APP__);
echo '__MODULE__:';dump(__MODULE__);    
echo "U('Login/login',''):";            
dump(U('Login/login'));die();

?>