<?php if (!defined('THINK_PATH')) exit();?>1<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Owner</title>
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
                <a href="<?php echo U('Home/Owner/index');?>">
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
                                <a href="javascrrpt:void(0)" class="dropdown-toggle menu-top-active" id="ddlmenuItem" data-toggle="dropdown">Source<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="<?php echo U('Home/Source/s_show');?>">source info </a>
                                    </li> 
                                    <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="<?php echo U('Home/Source/s_add');?>">source add</a>
                                     </li>
                                </ul>
                            </li>
                            <li><a href="<?php echo U('Home/Driver/d_select');?>">Driver</a></li>
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
                <?php if($data['name']!=''): echo ($data['name']); else: echo ($data['tel']); endif; ?> 
            </p>
                <h4 class="header-line">Source update Page</h4>
            </div>
        </div>
             <div class="row">
             <div class="col-md-12">
               <div class="alert alert-info text-center">
                <!-- <font size="3">  Hello,<?php echo ($data['name']); ?>！</font><br/> -->
                 <div class="table-responsive">
                   <h3>更新货源信息</h3>
                    <form action="<?php echo U('Home/Source/ds_modify');?>" method="post">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <tr class="odd gradeX">
                             <td class="text-right">出发地</td>
                             <td class="text-center">
                             <input type="hidden" name="sid" value="<?php echo ($data1['sid']); ?>">
                             <input type="text"  name="s_start" value="<?php echo ($data1['s_start']); ?>" required>
                             </td>         
                        </tr>
                        <tr class="even gradeC">
                             <td class="text-right">目的地</td>
                             <td class="text-center"><input type="text" name="s_end" value="<?php echo ($data1['s_end']); ?>" required/></td>
                        </tr> 
                        <tr class="odd gradeX">
                             <td class="text-right">距离</td>
                             <td class="text-center">
                                  <input type="text"  name="s_distance" value="<?php echo ($data1['s_distance']); ?>" required/>
                             </td>
                        </tr>   
                        <tr class="even gradeC">
                             <td class="text-right">重量</td>
                             <td class="text-center"><input type="text"  name="weight" value="<?php echo ($data1['weight']); ?>" required></td>
                        </tr>
                        <tr class="odd gradeX">
                             <td class="text-right">金额</td>
                             <td class="text-center"><input type="text" name="amount" value="<?php echo ($data1['amount']); ?>" required></td>
                        </tr>
                        <tr class="even gradeC">
                             <td class="text-right">详细描述</td>
                             <td class="text-center"><input type="text" name="des" value="<?php echo ($data1['des']); ?>"></td>
                        </tr> 
                        <tr class="odd gradeX">
                             <td class="text-right">开始运输日期</td>
                             <td class="text-center"><input type="date" name="s_t_time" required></td>
                        </tr>
                        <tr class="even gradeC">
                             <td class="text-right">状态</td>
                             <td class="text-center"><input type="text" name="status" value="<?php echo ($data1['status']); ?>"></td>
                        </tr> 
                        <tr class="even gradeC">
                             <td class="text-center" colspan="2">
                                <input type="submit" value="update" class="btn btn-success" id="ca"/>
                                <input type="reset" value="reset" class="btn btn-danger"/ >
                             </td>
                        </tr>          
                    </table>
                    </form>
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
    <script src="<?php echo hjs_url;?>jquery-1.8.3.min.js"></script>
</body>
</html>