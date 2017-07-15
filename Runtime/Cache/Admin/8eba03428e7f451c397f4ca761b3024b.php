<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script type="text/javascript" src="<?php echo ajs_url;?>jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo ajs_url;?>index.js"></script>
<link rel="stylesheet" href="<?php echo acss_url;?>public.css" />
<link rel="stylesheet" href="<?php echo acss_url;?>index.css" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<base target="iframe"/>
<head>
</head>
<body>
	<div id="top">
		<div class="menu">
			<a href="#">选择按钮</a>
			<a href="#">选择按钮</a>
			<a href="#">选择按钮</a>
			<a href="#">选择按钮</a>
			<a href="#">选择按钮</a>
		</div>
		<div class="exit">
			<a href="<?php echo U('Index/logout');?>" target="_self">退出</a>
			<a href="#" target="_blank">获得帮助</a>
			<a href="#" target="_blank">后盾网</a>
		</div>
	</div>
	<div id="left">
		<dl>
			<dt>博文管理</dt>
			<dd><a href="<?php echo U('Admin/Blog/index');?>">博文列表</a></dd>
			<dd><a href="<?php echo U('Admin/Blog/blog');?>">添加博文</a></dd>
			<dd><a href="<?php echo U('Admin/Blog/trach');?>">回收站</a></dd>
		</dl>
		<dl>
			<dt>属性管理</dt>
			<dd><a href="<?php echo U('Admin/Attribute/index');?>">属性列表</a></dd>
			<dd><a href="<?php echo U('Admin/Attribute/addAttr');?>">添加属性</a></dd>
		</dl>
		<dl>
			<dt>分类管理</dt>
			<dd><a href="<?php echo U('Admin/Category/index');?>">分类列表</a></dd>
			<dd><a href="<?php echo U('Admin/Category/addCate');?>">添加分类</a></dd>
		</dl>
		<dl>
			<dt>系统设置</dt>
			<dd><a href="<?php echo U('Admin/System/verify');?>">验证码设置</a></dd>
			<dd><a href="#">功能标题</a></dd>
			<dd><a href="#">功能标题</a></dd>
		</dl>
	</div>
	<div id="right">
		<iframe name="iframe" src="#"></iframe>
	</div>
</body>
</html>