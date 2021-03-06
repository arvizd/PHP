<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Admin</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="<?php echo hcss_url;?>bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="<?php echo hcss_url;?>font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="<?php echo hcss_url;?>style_public.css" rel="stylesheet" />

</head>
<body>
    <div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header navbar-brand">
                <a href="<?php echo U('Home/Admin/index');?>">
                    <img src="<?php echo himg_url;?>logo.png" />  
                </a> 
            </div>
            <div class="right-div">
                <a href="<?php echo U('Home/Index/logout');?>" class="btn btn-danger pull-right">LOG OUT</a>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li>
                                <a href="<?php echo U('Home/Driver/d_manage');?>">Driver</a>
                            </li>
                            <li>
                                <a href="<?php echo U('Home/Car/c_manage');?>">Car</a>
                            </li>
                            <li><a href="<?php echo U('Home/Owner/o_manage');?>">Owner</a></li>
                            <li  class="menu-top-active">
                                <a href="<?php echo U('Home/Source/s_manage');?>">Source</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
            <p class="text-right">Welcome to wwt! 
                <?php echo ($name); ?> 
            </p>
                <h4 class="header-line">Source Manage Page</h4>
            </div>
        </div>
             <div class="row">
             <div class="col-md-12">
               <div class="alert alert-info text-center">
                <!-- <font size="3">  Hello,<?php echo ($data['name']); ?>！</font><br/> -->
                 <div class="table-responsive">
                   <h3>货源信息</h3>
                   <?php if($count > 0): ?><table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <tr class="odd gradeX ">
                             <th class="text-center">姓名</th> 
                             <th class="text-center">身份证号</th> 
                             <th class="text-center">电话号码</th> 
                             <th class="text-center">发布时间</th>
                             <th class="text-center">出发地</th> 
                             <th class="text-center">目的地</th> 
                             <th class="text-center">距离</th> 
                             <th class="text-center">重量</th> 
                             <th class="text-center">金额</th> 
                             <th class="text-center">类型</th>
                             <th class="text-center">运输时间</th>
                             <th class="text-center">管理</th>                 
                        </tr>
                    <?php if(is_array($data)): foreach($data as $key=>$v): ?><tr class="even gradeC">
                             <td class="center"><?php echo ($v["name"]); ?></td>
                             <td class="center"><?php echo ($v["id"]); ?></td>
                             <td class="center"><?php echo ($v["tel"]); ?></td>
                             <td class="center"><?php echo ($v["s_time"]); ?></td>
                             <td class="center"><?php echo ($v["s_start"]); ?></td>
                             <td class="center"><?php echo ($v["s_end"]); ?></td>
                             <td class="center"><?php echo ($v["s_distance"]); ?></td>
                             <td class="center"><?php echo ($v["weight"]); ?></td>
                             <td class="center"><?php echo ($v["amount"]); ?></td>
                             <td class="center"><?php echo ($v["des"]); ?></td>
                             <td class="center"><?php echo ($v["s_t_time"]); ?></td>
                             <td class="center">
                                  <a  href="<?php echo U('Home/Source/sm_delete',array('sid'=>$v['sid']));?>"  class="btn btn-danger btn-xs" >删除</a>
                             </td>
                        </tr><?php endforeach; endif; ?> 
                    </table>
                    <?php else: ?><h4>还没有货源信息</h4><?php endif; ?>
                  </div>

               </div>
             </div>
        </div>
    </div>
    </div>
     <!-- CONTENT-WRAPPER SECTION END-->
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                   Copyright &copy;2017 wwt All rights reserved</div>
            </div>
        </div>
    </section>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="<?php echo hjs_url;?>jquery.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="<?php echo hjs_url;?>bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="<?php echo hjs_url;?>custom.js"></script>
  
</body>
</html>