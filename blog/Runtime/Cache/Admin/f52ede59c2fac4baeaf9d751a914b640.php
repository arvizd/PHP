<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<link rel="stylesheet" href="<?php echo acss_url;?>public.css" />
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<!--<css file="<?php echo acss_url;?>public.css"/>-->	
	</head>
	<body>
		<form action="http://www.thinkphp.com/blog/index.php/Admin/System/updateVerify" method="post">
			<table class="table">
				<tr>
					<td colspan="3" align="center" ><h2>验证码设置</h2></td>
				</tr>
				<tr>
					<td align="right">验证码长度：</td>
					<td>
						<input type="text" name="VERIFY_LENGTH" value="<?php echo (C("VERIFY_LENGTH")); ?>" />
					</td>
					<td>验证码字符个数</td>
				</tr>
				<tr>
					<td align="right">验证码组成：</td>
					<td>
						<input type="text" name="VERIFY_MODE" value="<?php echo (C("VERIFY_MODE")); ?>" />
					</td>
					<td>0-大小写字母 1-数字 2-大写字母 3-小写字母 4-文字 默认-大小写字母数字</td>
				</tr>
				<tr>
					<td align="right">验证码类型：</td>
					<td>
						<input type="text" name="VERIFY_TYPE" value="<?php echo (C("VERIFY_TYPE")); ?>" />
					</td>
					<td>图片类型png gif jpg</td>
				</tr>
				<tr>
					<td align="right">验证码宽度：</td>
					<td>
						<input type="text" name="VERIFY_WIDTH" value="<?php echo (C("VERIFY_WIDTH")); ?>" />
					</td>
					<td></td>
				</tr>
				<tr>
					<td align="right">验证码高度：</td>
					<td>
						<input type="text" name="VERIFY_HEIGHT" value="<?php echo (C("VERIFY_HEIGHT")); ?>" />
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="3" align="center">
						<input type="submit" value="保存修改" />
					</td>
					<td></td>
				</tr>
			</table>
		</form>
	</body>
</html>