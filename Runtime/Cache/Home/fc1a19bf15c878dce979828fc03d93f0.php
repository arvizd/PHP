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
                                <a href="javascrrpt:void(0)" class="dropdown-toggle menu-top-active" id="ddlmenuItem" data-toggle="dropdown">Car <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="<?php echo U('Home/Car/c_show');?>">show info </a>
                                    </li>
                                    <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="<?php echo U('Home/Car/c_add');?>">add one</a>
                                     </li>
                                </ul>
                            </li>
                            <li><a href="<?php echo U('Home/Source/s_select');?>">Source</a></li>
                            
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
                <h4 class="header-line">Car add Page</h4>
            </div>
        </div>
             <div class="row">
             <div class="col-md-12">
               <div class="alert alert-info text-center">
                <!-- <font size="3">  Hello,<?php echo ($data['name']); ?>！</font><br/> -->
                 <div class="table-responsive">
                   <h3>添加车辆信息</h3>
                    <form action="<?php echo U('Home/Car/dc_add');?>" method="post">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <tr class="odd gradeX">
                             <td class="text-right">车牌号</td>
                             <td class="text-center"><input type="text"  name="cid" required id="cid"></td>         
                        </tr>
                        <tr class="even gradeC">
                             <td class="text-right">车类型</td>
                             <td class="text-center"><input type="text" name="c_type" </td>
                        </tr> 
                        <tr class="odd gradeX">
                             <td class="text-right">载重</td>
                             <td class="text-center">
                                  <input type="text"  name="weight">
                             </td>
                        </tr>   
                        <tr class="even gradeC">
                             <td class="text-right">车长</td>
                             <td class="text-center"><input type="text"  name="c_long"></td>
                        </tr>
                        <tr class="odd gradeX">
                             <td class="text-right">车宽</td>
                             <td class="text-center"><input type="text" name="c_width"></td>
                        </tr>
                        <tr class="even gradeC">
                             <td class="text-right">车高</td>
                             <td class="text-center"><input type="text" name="c_high"></td>
                        </tr> 
                        <tr class="even gradeC">
                             <td class="text-center" colspan="2">
                                <input type="submit" value="add" class="btn btn-success" id="ca"/>
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
<script type="text/javascript">
<!-- 表单验证 -->
$(document).ready(function(){
  var cid = $("#cid");
  var mark=-1;
  var ecid=/^[京津沪渝冀豫云辽黑湘皖鲁新苏浙赣鄂桂甘晋蒙陕吉闽贵粤青藏川宁琼使领A-Z]{1}[A-Z]{1}[A-Z0-9]{4}[A-Z0-9挂学警港澳]{1}$/;
 //车牌号
$("#cid").blur(function(){
    if(cid.val()==""){
        mark=0;
        cid.focus();
       return false;   
    }
    else{
        if(!ecid.test(cid.val())){
             mark=1;
            cid.focus();
            return false;
                
        }
        else{
             mark=3;
        }
       
    }
});
//提交
$("#ca").click(function(){
    if(mark==3){
        return true;
    }
    else{
        return false;
    }
 });
});
//邮箱

</script>