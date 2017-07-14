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
                                <a href="<?php echo U('Home/Owner/o_modify');?>">Owner</a>
                            </li>
                            <li>
                                <a href="javascrrpt:void(0)" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">Source<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="<?php echo U('Home/Source/s_show');?>">source info </a>
                                    </li> 
                                    <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="<?php echo U('Home/Source/s_add');?>">source add</a>
                                     </li>
                                </ul>
                            </li>
                            <li class="menu-top-active">
                               <a href="<?php echo U('Home/Driver/d_select');?>">Driver</a>
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
                <?php if($data['name']!='' ): echo ($data['name']); else: echo ($data['tel']); endif; ?>
            </p>
                <h4 class="header-line">Driver & Car  Page</h4>
            </div>
        </div>
             <div class="row">
             <div class="col-md-12">
               <div class="alert alert-info text-center">
                <!-- <font size="3">  Hello,<?php echo ($data['name']); ?>！</font><br/> -->
                 <div class="table-responsive">
                   <h3>司机车辆信息</h3>
                   <?php if($count > 0): ?><table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <tr class="odd gradeX ">
                             <th class="text-center">姓名</th> 
                             <th class="text-center">身份证号</th> 
                             <th class="text-center">电话号码</th> 
                             <th class="text-center">车牌号</th>
                             <th class="text-center">车类型</th> 
                             <th class="text-center">载重</th> 
                             <th class="text-center">长</th> 
                             <th class="text-center">宽</th> 
                             <th class="text-center">高</th>               
                        </tr>
                    <?php if(is_array($data1)): foreach($data1 as $key=>$v): ?><tr class="even gradeC">
                             <td class="center"><?php echo ($v["name"]); ?></td>
                             <td class="center"><?php echo ($v["id"]); ?></td>
                             <td class="center"><?php echo ($v["tel"]); ?></td>
                             <td class="center"><?php echo ($v["cid"]); ?></td>
                             <td class="center"><?php echo ($v["c_type"]); ?></td>
                             <td class="center"><?php echo ($v["weight"]); ?></td>
                             <td class="center"><?php echo ($v["c_long"]); ?></td>
                             <td class="center"><?php echo ($v["c_width"]); ?></td>
                             <td class="center"><?php echo ($v["c_high"]); ?></td>
                        </tr><?php endforeach; endif; ?> 
                    </table>
                    <?php else: ?><h4>还没有车辆信息</h4><?php endif; ?>
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