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
    <title>Driver</title>
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
                <a href="<?php echo U('Home/Driver/index');?>">
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
                                <a href="<?php echo U('Home/Driver/d_modify');?>">Driver</a>
                            </li>
                            <li>
                                <a href="javascrrpt:void(0)" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown" >Car <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="<?php echo U('Home/Car/c_show');?>"
                                        >show info </a>
                                    </li>
                                    <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="<?php echo U('Home/Car/c_add');?>">add one</a>
                                     </li>
                                </ul>
                            </li>
                            <li class="menu-top-active"><a href="<?php echo U('Home/Source/s_select');?>">Source</a></li>
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
                <h4 class="header-line"> Source Page</h4>
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
                             <th class="text-center">货主姓名</th> 
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
                        </tr>
                    <?php if(is_array($data1)): foreach($data1 as $key=>$v): ?><tr class="even gradeC">
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