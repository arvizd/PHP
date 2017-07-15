<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="<?php echo hcss_url;?>common.css" />
	<script type="text/JavaScript" src='<?php echo hjs_url;?>jquery-1.7.2.min.js'></script>
	<script type="text/JavaScript" src='<?php echo hjs_url;?>common.js'></script>
<link rel="stylesheet" href="<?php echo hcss_url;?>list.css" />
</head>
<body>
<!--头部-->
	<div class='top-list-wrap'>
		<div class='top-list'>
			<ul class='l-list'>
				<li><a href="http://www.houdunwang.com" target='_blank'>后盾网</a></li>
				<li><a href="http://bbs.houdunwang.com" target='_blank'>后盾网论坛</a></li>
				<li><a href="http://study.houdunwang.com" target='_blank'>后盾学习社区</a></li>
			</ul>
			<ul class='r-list'>
				<li><a href="http://www.hdphp.com" target='_blank'>HDPHP框架</a></li>
				<li><a href="http://bbs.houdunwang.com" target='_blank'>免费视频教程</a></li>
			</ul>
		</div>
	</div>
	<div class='top-search-wrap'>
		<div class='top-search'>
			<a href="http://bbs.houdunwang.com" target='_blank' class='logo'>
				<img src="<?php echo himg_url;?>logo.png"/>
			</a>
			<div class='search-wrap'>
				<form action="" method='get'>
					<input type="text" name='keyword' class='search-content'/>
					<input type="submit" name='search' value='搜索'/>
				</form>
			</div>
		</div>
	</div>
	
<div class='top-nav-wrap'>
		<ul class='nav-lv1'>
			<li class='nav-lv1-li'>
				<a href="<?php echo U('Index/index');?>" class='top-cate'>博客首页</a>
			</li>
					<?php
 import("Org.Util.Category"); $_nav_cate=M('cate')->order("sort")->select(); $Category=new \Org\Util\Category(); $_nav_cate=$Category::unlimtedForLayer($_nav_cate); foreach ($_nav_cate as $v): extract($v); $url=U('/c_'.$id); ?><li class='nav-lv1-li'>
					<a href="<?php echo ($url); ?>" class='top-cate'><?php echo ($name); ?></a>
					<ul>
						<?php if(is_array($cate)): foreach($cate as $key=>$a): ?><li><a href="<?php echo U('/c_'.$a['id']);?>"><?php echo ($a["name"]); ?></a></li><?php endforeach; endif; ?>
					</ul>
				</li><?php endforeach;?>
		</ul>
	</div>
<!--主体-->
	<div class='main'>
		<div class='main-left'>
		<?php if(is_array($blog)): foreach($blog as $key=>$v): ?><dl>
				<dt><?php echo ($v["name"]); ?></dt>
				<dd class='channel'><?php echo ($v["title"]); ?></dd>
				<dd class='info'>
					<span class='time'>发布于：<?php echo (date('Y年m月d日 H:i:s',$v["time"])); ?></span>
					<span class='click'>点击：<?php echo ($v["click"]); ?></span>
				</dd>
				<dd class='content'><?php echo ($v["summary"]); ?></dd>
				<dd class='read'>
					<a href="<?php echo U('/'.$v['id']);?>" target="_blank">阅读全文>></a>
				</dd>
			</dl><?php endforeach; endif; ?>
			<p><?php echo ($page); ?>sdffsdfsaf</p>
		</div>
	<!--主体右侧-->
		<div class='main-right'>
		
		<dl>

				<dt>热门博文</dt>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>(1024)</span>
				</dd>

				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>(1024)</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>(1024)</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>(1024)</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>(1024)</span>
				</dd>
			</dl>

			<dl>
				<dt>最发布发</dt>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>(1024)</span>
				</dd>

				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>(1024)</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>(1024)</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>(1024)</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>(1024)</span>
				</dd>
			</dl>

			<dl>
				<dt>友情连接</dt>
				<dd>
					<a href="">后盾网</a>
				</dd>

				<dd>
					<a href="">后盾网论坛</a>
				</dd>
				<dd>
					<a href="">后盾网学习社区</a>
				</dd>
			</dl>
		</div>
	</div>
<!--底部-->
	<div class='bottom'>
		<div></div>
	</div>
</body>
</html>