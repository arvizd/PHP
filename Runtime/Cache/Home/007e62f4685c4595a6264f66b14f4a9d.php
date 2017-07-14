<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
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
                            <li><a href="<?php echo U('Home/Driver/d_manage');?>">Driver</a></li>
                            <li><a href="<?php echo U('Home/Car/c_manage');?>">Car</a></li>
                            <li><a href="<?php echo U('Home/Owner/o_manage');?>">Owner</a></li>
                            <li><a href="<?php echo U('Home/Source/s_manage');?>">Source</a></li>
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
                <h4 class="header-line">Welcome Page</h4>
            </div>
        </div>
             <div class="row">
             <div class="col-md-12">
               <div class="alert alert-info text-center">
                <!-- <font size="3">  Hello,<?php echo ($data['name']); ?>！</font><br/> -->
                 <div class="table-responsive">
                   <p>欢迎来到管理员页面</p>
                   <p>在这里</p>
                   <p>您可以对司机、货主、车辆、货源信息进行管理</p>
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