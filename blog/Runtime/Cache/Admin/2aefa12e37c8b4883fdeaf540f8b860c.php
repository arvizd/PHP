<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<link rel="stylesheet" href="<?php echo acss_url;?>public.css" />
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<!--<css file="<?php echo acss_url;?>public.css"/>-->	
	</head>
	<body>
		<form action="<?php echo U('Admin/Category/sortCate');?>" method="post">
			<table class="table">
				<tr>
					<th>ID</th>
					<th>标题</th>
					<th>所属分类</th>
					<th>点击次数</th>
					<th>发布时间</th>
					<th>操作</th>
				</tr>
				<?php if(is_array($blog)): foreach($blog as $key=>$v): ?><tr>
					<td><?php echo ($v["id"]); ?></td>
					<td>
						<?php echo ($v["title"]); if(is_array($v["attr"])): foreach($v["attr"] as $key=>$a): ?><strong style="color:<?php echo ($a["color"]); ?>">[<?php echo ($a["name"]); ?>]</strong><?php endforeach; endif; ?>
					</td>
					<td><?php echo ($v["cate"]); ?></td>
					<td><?php echo ($v["click"]); ?></td>
					<td><?php echo (date('Y-m-d H:i',$v["time"])); ?></td>
					<td>
					<?php if(ACTION_NAME == "index"): ?>[<a href="">修改</a>]
						[<a href="<?php echo U('Admin/Blog/toTrach',array('id'=>$v['id'],'type'=>1,));?>">删除</a>]
					<?php else: ?>
						[<a href="<?php echo U('Admin/Blog/toTrach',array('id'=>$v['id'],'type'=>0,));?>">还原</a>]
						[<a href="<?php echo U('Admin/Blog/delete',array('id'=>$v['id'],));?>">彻底删除</a>]
					</else><?php endif; ?>
					</td>
				</tr><?php endforeach; endif; ?>
				<tr>
					<td colspan="5" align="center">
						<input type="submit" value="排序" />
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>