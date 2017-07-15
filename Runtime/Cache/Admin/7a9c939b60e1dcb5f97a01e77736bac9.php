<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<link rel="stylesheet" href="<?php echo acss_url;?>public.css" />
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<!--<css file="<?php echo acss_url;?>public.css"/>-->	
	</head>
	<body>
		<form action="<?php echo U('Admin/Category/runAddCate');?>" method="post">
			<table class="table">
				<tr>
					<td colspan="3" align="center" ><h2>添加栏目分类</h2></td>
				</tr>
				<tr>
					<td align="right">分类栏目名称：</td>
					<td>
						<input type="text" name="name" />
					</td>
					<td></td>
				</tr>
				<tr>
					<td align="right">排序：</td>
					<td>
						<input type="text" name="sort" value="100" />
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="3" align="center">
						<input type="hidden" name="pid" value="<?php echo ($pid); ?>" />
						<input type="submit" value="保存修改" />
					</td>
					<td></td>
				</tr>
			</table>
		</form>
	</body>
</html>