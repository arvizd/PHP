<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>
 <!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="<?php echo hcss_url;?>bootstrap.min.css">
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="<?php echo hjs_url;?>jquery.min.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="<?php echo hjs_url;?>bootstrap.min.js"></script>

<script type="text/javascript" runat="server">
	//刷新验证码
	function refresh(){
		document.getElementById('icaptcha').src="http://www.wwt.com/index.php/Login/verify?id=Math.random()";
	}
</script>
<style>
	.main{position:relative;top:100px;}
	body{background: url(<?php echo himg_url;?>login/bg.jpg) no-repeat center center scroll;
    background-size:100% 200%;}
</style>
</head>
<body>
<div class="main">
	<form action="<?php echo U('Home/Login/login');?>" method="post" id="login"></form>
	<div class="col-md-offset-4 col-md-3" > 
		<div class="panel panel-primary"> 
		 	<div class="tab-pane fade in active" id="Prv">
		 		<div class="well well-sm "><h3 class="panel-title text-center">User Login</h3> </div>
		 	</div>
			<div class="form-group">
 			    <div class="input-group">
 				   	<span class="input-group-addon"><img src="<?php echo himg_url;?>login/user.jpg" width="40px" height="20px"/></span>
 				  	<input type="text" name="user" id="user"  class="form-control" form="login" required="required" placeholder="telphone/mail">
 	      	    </div>
         	</div>
         	<div class="form-group">
 			    <div class="input-group">
 				   	<span class="input-group-addon"><img src="<?php echo himg_url;?>login/pass.jpg" width="40px" height="20px"/></span>
 				  	<input type="password" name="pass" id="pass"  class="form-control" form="login" required="required">
 	      	    </div>
         	</div>
			<div class="form-group">
				<div class="input-group">
 				   	<span class="input-group-addon">验证码</span>			
					<input type="text" name="captcha" id="captcha" form="login"  class="form-control" form="login" required="required"/>
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<img height="32" width="174" title="看不清？点击更换" 
						alt="CAPTCHA" src="<?php echo U('Home/Login/verify');?>" onclick="this.src='http://www.wwt.com/index.php/Login/verify?id='+Math.random()" id="icaptcha" />
					<span class="input-group-addon" onclick="refresh()">看不清？点击刷新</span>	
				</div>
			</div>
			<div class="form-group text-center">
 				<label class="radio-inline"><input type="radio" name="roles" value="0" form="login" align="left" checked="checked">Driver</label>
				<label class="radio-inline"><input type="radio" name="roles" value="1" form="login" align="left">Owner</label>
				<label class="radio-inline"><input type="radio" name="roles" value="2" form="login" align="left">Admin</label>
 			</div>
			<div class="form-group">
				<input type="image"  height="50" width="100%" src="<?php echo himg_url;?>login/login.jpg" form="login" align="absMiddle"/>
			</div>
			<p class="text-center">
				No account? 
			    <a href="<?php echo U('Home/Register/index');?>" class="to_register">Join us</a>
			</p>
		</div>
	</div>
</div>

</body>
</html>