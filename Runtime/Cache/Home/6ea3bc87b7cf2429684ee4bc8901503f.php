<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
    <head>
        <meta charset="utf-8">
        <title>User Register </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- CSS -->
        <link rel="stylesheet" href="<?php echo hcss_url;?>bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo hcss_url;?>stylish_register.css">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>
    <body>
        <div class="header">
            <div class="container">
                <div class="row">
                       <h1>User Register</h1>
                       <!--注册选项卡-->
                            <ul class="nav nav-pills" >
                              <li class="active"><a href="#driver" data-toggle="tab">driver</a></li>
                              <li><a href="#owner"data-toggle="tab">owner</a></li>
                            </ul>        
                </div>       
            </div>
        </div>
        <div class="tab-content">
                <div class="tab-pane active" id="driver">
                    <div class="register-container container">
                        <div class="row">
                        <div class="iphone col-md-6">
                            <img src="<?php echo himg_url;?>register/car.jpg" alt="">
                        </div>
                        <div class="register col-md-6">
                            <form action="<?php echo U('Home/Register/register');?>" method="post" id="Driver">
                                <h2>REGISTER TO <span class="red"><strong>W2T</strong></span></h2>
                                <label for="d_name" id="df_name">Your Name</label>
                                <input type="text" id="d_name" name="d_name" placeholder="enter your  name...">
                                 <label for="d_password" id="df_pass">Password</label>
                                <input type="password" id="d_password" name="d_password" placeholder="enter your password..." required>
                                <label for="d_ID" id="df_ID">ID</label>
                                <input type="text" id="d_ID" name="d_ID" placeholder="enter your ID..."
                                required>
                                <label for="d_tel" id="df_tel">Telphone</label>
                                <input type="text" id="d_tel" name="d_tel" placeholder="enter Your telphone..." required>
                                <label for="d_email" id="df_email">Email</label>
                                <input type="text" id="d_email" name="d_email" placeholder="enter your email...">
                                <label for="d_place" id="df_place">Place</label>
                                <input type="text" id="d_place" name="d_place" placeholder="enter your place...">
                                <label for="d_age" id="df_age">drive age</label>
                                <input type="text" id="d_age" name="d_age" placeholder="enter your driver age...">
                                <label for="d_type" id="df_type">drive type</label>
                                <input type="text" id="d_type" name="d_type" placeholder="enter your driver type...">
                               
                                <button type="submit" class="text-center" id="d" name="register" value="0">REGISTER</button>
                                <br/>
                                 <br/>
                               <p class="text-center">  
                                   Have an account?
                                  <a href="<?php echo U('Home/Login/index');?>" class="to_register"> Go and log in </a>
                               </p>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="tab-pane " id="owner">
                    <div class="register-container container">
                        <div class="row">
                        <div class="iphone col-md-6">
                            <img src="<?php echo himg_url;?>register/car.jpg" alt="">
                        </div>
                        <div class="register col-md-6">
                            <form action="<?php echo U('Home/Register/register');?>" method="post" id="Owner">
                                <h2>REGISTER TO <span class="red"><strong>W2T</strong></span></h2>
                                <label for="o_name" id="of_name">Your Name</label>
                                <input type="text" id="o_name" name="o_name" placeholder="enter your  name...">
                                 <label for="o_password" id="of_pass">Password</label>
                                <input type="password" id="o_password" name="o_password" placeholder="enter your password..." required>
                                <label for="o_ID" id="of_ID">ID</label>
                                <input type="text" id="o_ID" name="o_ID" placeholder="enter your ID..." required>
                                <label for="o_tel" id="of_tel">Telphone</label>
                                <input type="text" id="o_tel" name="o_tel" placeholder="enter Your telphone..." required>
                                <label for="o_email" id="of_email">Email</label>
                                <input type="text" id="o_email" name="o_email" placeholder="enter your email...">
                                <label for="o_place" id="of_place">Place</label>
                                <input type="text" id="o_place" name="o_place" placeholder="enter your place...">
                                <label for="o_comp" id="of_comp">company name</label>
                                <input type="text" id="o_comp" name="o_comp" placeholder="enter your company name...">
                                 <button type="submit" class="text-center" id="o" name="register" value="1">REGISTER</button>
                                <br/>
                                <br/>
                               <p class="text-center">  
                                   Have an account?
                                  <a href="<?php echo U('Home/Login/index');?>" class="to_register"> Go and log in </a>
                               </p>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
        </div>
	
    <!-- Javascript -->
        <script src="<?php echo hjs_url;?>jquery.js"></script>
        <script src="<?php echo hjs_url;?>bootstrap.min.js"></script>
        // <script src="<?php echo hjs_url;?>verify.js"></script>
         <script src="<?php echo hjs_url;?>jquery-1.8.3.min.js"></script>
    </body>

</html>
<script type="text/javascript">
<!-- 表单验证 -->
$(document).ready(function(){
  var d_name = $("#d_name");
  var d_ID = $("#d_ID");
  var d_password = $("#d_password");
  var d_tel = $("#d_tel");
  var d_email = $("#d_email");
  var d_place=$("#d_place");
  var d_age=$("#d_age");
  var d_type=$("#d_type");
  var o_name = $("#o_name");
  var o_ID = $("#o_ID");
  var o_password = $("#o_password");
  var o_tel = $("#o_tel");
  var o_email = $("#o_email");
  var o_place=$("#o_place");
  var o_comp=$("#o_comp");
  var etel=/^(13[0-9]|14[5|7]|15[0|1|2|3|5|6|7|8|9]|18[0|1|2|3|5|6|7|8|9])\d{8}$/;
  var epass=/\w{5,19}/;
  var eemail=/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/; 
  var eID=/^[1-9]\d{5}[1-9]\d{3}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{4}$/;
//姓名
$("#d_name").blur(function(){
  //alert(d_name.val());
    if(d_name.val()==""){
        $("#df_name").children().remove();
        $("#df_name").append("<span style='display:none' class='red'> - Please enter your name.</span>");
        $("#df_name").find("span").fadeIn('medium');
        return false;   
    }
    else{
        $("#df_name").children().remove();
        $("#df_name").append("<span style='display:none' class='green'> - ok.</span>");
        $("#df_name").find("span").fadeIn('medium');
        return false;
    }
});
$("#o_name").blur(function(){
    if(o_name.val()==""){
        $("#of_name").children().remove();
        $("#of_name").append("<span style='display:none' class='red'> - Please enter your name.</span>");
        $("#of_name").find("span").fadeIn('medium');
        return false;   
    }
    else{
        $("#of_name").children().remove();
        $("#of_name").append("<span style='display:none' class='green'> - ok.</span>");
        $("#of_name").find("span").fadeIn('medium');
        return false;
    }
});
//密码
$("#d_password").blur(function(){
    if(d_password.val()==""){
        $("#df_pass").children().remove();
        $("#df_pass").append("<span style='display:none' class='red'> - Please enter your password.</span>");
        $("#df_pass").find("span").fadeIn('medium');
        return false;    
    }
    else{
        if(!epass.test(d_password.val())){
            $("#df_pass").children().remove();
            $("#df_pass").append("<span style='display:none' class='red'> -密码由数字字母下划线组成，至少6位，至多20位！</span>");
            $("#df_pass").find("span").fadeIn('medium');
            return false;     
        }
        else{
           $("#df_pass").children().remove();
            $("#df_pass").append("<span style='display:none' class='green'> - ok.</span>");
            $("#df_pass").find("span").fadeIn('medium');
            return false; 
        }
    }
});
$("#o_password").blur(function(){
    if(o_password.val()==""){
        $("#of_pass").children().remove();
        $("#of_pass").append("<span style='display:none' class='red'> - Please enter your password.</span>");
        $("#of_pass").find("span").fadeIn('medium');
        return false;    
    }
    else{
        if(!epass.test(o_password.val())){
            $("#of_pass").children().remove();
            $("#of_pass").append("<span style='display:none' class='red'> -密码由数字字母下划线组成，至少6位，至多20位！</span>");
            $("#of_pass").find("span").fadeIn('medium');
            return false;     
        }
        else{
           $("#of_pass").children().remove();
            $("#of_pass").append("<span style='display:none' class='green'> - ok.</span>");
            $("#of_pass").find("span").fadeIn('medium');
            return false; 
        }
    }
});
//ID
$("#d_ID").blur(function(){
    if(d_ID.val()==""){
        $("#df_ID").children().remove();
        $("#df_ID").append("<span style='display:none' class='red'> - Please enter your ID.</span>");
        $("#df_ID").find("span").fadeIn('medium');
        return false;    
    }
    else{
        if(!eID.test(d_ID.val())){
            $("#df_ID").children().remove();
            $("#df_ID").append("<span style='display:none' class='red'> - 输入有误！</span>");
            $("#df_ID").find("span").fadeIn('medium');
            return false;     
        }
        else{
            $.ajax({
            type:"POST",url:"<?php echo U('Home/Register/dID_verify');?>",
            data:{d_ID:$("#d_ID").val()},
            success:function(data){
               $("#df_ID").children().remove();
               $("#df_ID").append("<span style='display:none' class='green'></span>");
               $("#df_ID").find("span").html(data);
               $("#df_ID").find("span").fadeIn('medium');
            }
            
            });
        }
    }
});
$("#o_ID").blur(function(){
    if(o_ID.val()==""){
        $("#of_ID").children().remove();
        $("#of_ID").append("<span style='display:none' class='red'> - Please enter your ID.</span>");
        $("#of_ID").find("span").fadeIn('medium');
        return false;    
    }
    else{
        if(!eID.test(o_ID.val())){
            $("#of_ID").children().remove();
            $("#of_ID").append("<span style='display:none' class='red'> - 输入有误！</span>");
            $("#of_ID").find("span").fadeIn('medium');
            return false;     
        }
        else{
            $.ajax({
            type:"POST",url:"<?php echo U('Home/Register/oID_verify');?>",            
            data:{o_ID:$("#o_ID").val()},
            success:function(data){
                $("#of_ID").children().remove();
               $("#of_ID").append("<span style='display:none' class='green'></span>");
               $("#of_ID").find("span").html(data);
               $("#of_ID").find("span").fadeIn('medium');
            }
            
            });
        }
    }
});
//tel
$("#d_tel").blur(function(){
if(d_tel.val()==""){
    //alert(d_tel.val())
        $("#df_tel").children().remove();
        $("#df_tel").append("<span style='display:none' class='red'> - Please enter your tel.</span>");
        $("#df_tel").find("span").fadeIn('medium');
        return false;    
    }
    else{
        if(!etel.test(d_tel.val())){
            $("#df_tel").children().remove();
            $("#df_tel").append("<span style='display:none' class='red'> - 输入有误！</span>");
            $("#df_tel").find("span").fadeIn('medium');
            return false;     
        }
        else{ 
            $.ajax({
            type:"POST",url:"<?php echo U('Home/Register/dtel_verify');?>",
            data:{d_tel:$("#d_tel").val()},
            success:function(data){
                $("#df_tel").children().remove();
               $("#df_tel").append("<span style='display:none' class='green'></span>");
               $("#df_tel").find("span").html(data);
               $("#df_tel").find("span").fadeIn('medium');
            }
            
            });
        }
    }
});
$("#o_tel").blur(function(){
    if(o_tel.val()==""){
        $("#of_tel").children().remove();
        $("#of_tel").append("<span style='display:none' class='red'> - Please enter your tel.</span>");
        $("#of_tel").find("span").fadeIn('medium');
        return false;    
    }
    else{
        if(!etel.test(o_tel.val())){
            $("#of_tel").children().remove();
            $("#of_tel").append("<span style='display:none' class='red'> - 输入有误！</span>");
            $("#of_tel").find("span").fadeIn('medium');
            return false;     
        }
        else{
            $.ajax({
            type:"POST",url:"<?php echo U('Home/Register/otel_verify');?>",
            data:{o_tel:$("#o_tel").val()},
            success:function(data){
                $("#of_tel").children().remove();
               $("#of_tel").append("<span style='display:none' class='green'></span>");
               $("#of_tel").find("span").html(data);
               $("#of_tel").find("span").fadeIn('medium');
            }
            });
        }
    }
});
//邮箱
$("#d_email").blur(function(){
if(d_email.val()==""){
        $("#df_email").children().remove();
        $("#df_email").append("<span style='display:none' class='red'> - Please enter your email.</span>");
        $("#df_email").find("span").fadeIn('medium');
        return false;    
    }
    else{
        if(!eemail.test(d_email.val())){
            $("#df_email").children().remove();
            $("#df_email").append("<span style='display:none' class='red'> - 输入有误！</span>");
            $("#df_email").find("span").fadeIn('medium');
            return false;     
        }
        else{
            $.ajax({
           type:"POST",url:"<?php echo U('Home/Register/demail_verify');?>",
            data:{d_email:$("#d_email").val()},
            success:function(data){
                $("#df_email").children().remove();
               $("#df_email").append("<span style='display:none' class='green'></span>");
               $("#df_email").find("span").html(data);
               $("#df_email").find("span").fadeIn('medium');
            }
            });
        }
    }
});
$("#o_email").blur(function(){
    if(o_email.val()==""){
        $("#of_email").children().remove();
        $("#of_email").append("<span style='display:none' class='red'> - Please enter your email.</span>");
        $("#of_email").find("span").fadeIn('medium');
        return false;    
    }
    else{
        if(!eemail.test(o_email.val())){
            $("#of_email").children().remove();
            $("#of_email").append("<span style='display:none' class='red'> - 输入有误！</span>");
            $("#of_email").find("span").fadeIn('medium');
            return false;     
        }
        else{
            $.ajax({
            type:"POST",url:"<?php echo U('Home/Register/oemail_verify');?>",
            data:{o_email:$("#o_email").val()},
            success:function(data){
                $("#of_email").children().remove();
               $("#of_email").append("<span style='display:none' class='green'></span>");
               $("#of_email").find("span").html(data);
               $("#of_email").find("span").fadeIn('medium');
            }
            });
        }
    }
});
//place
$("#d_place").blur(function(){
  //alert(d_place.val());
    if(d_place.val()==""){
        $("#df_place").children().remove();
        $("#df_place").append("<span style='display:none' class='red'> - Please enter your place.</span>");
        $("#df_place").find("span").fadeIn('medium');
        return false;   
    }
    else{
        $("#df_place").children().remove();
        $("#df_place").append("<span style='display:none' class='green'> - ok.</span>");
        $("#df_place").find("span").fadeIn('medium');
        return false;
    }
});
$("#o_place").blur(function(){
    if(o_place.val()==""){
        $("#of_place").children().remove();
        $("#of_place").append("<span style='display:none' class='red'> - Please enter your place.</span>");
        $("#of_place").find("span").fadeIn('medium');
        return false;   
    }
    else{
        $("#of_place").children().remove();
        $("#of_place").append("<span style='display:none' class='green'> - ok.</span>");
        $("#of_place").find("span").fadeIn('medium');
        return false;
    }
});
//驾龄
$("#d_age").blur(function(){
  //alert(d_age.val());
    if(d_age.val()==""){
        $("#df_age").children().remove();
        $("#df_age").append("<span style='display:none' class='red'> - Please enter your age.</span>");
        $("#df_age").find("span").fadeIn('medium');
        return false;   
    }
    else{
        $("#df_age").children().remove();
        $("#df_age").append("<span style='display:none' class='green'> - ok.</span>");
        $("#df_age").find("span").fadeIn('medium');
        return false;
    }
});
//驾照类型
$("#d_type").blur(function(){
  //alert(d_type.val());
    if(d_type.val()==""){
        $("#df_type").children().remove();
        $("#df_type").append("<span style='display:none' class='red'> - Please enter your type.</span>");
        $("#df_type").find("span").fadeIn('medium');
        return false;   
    }
    else{
        $("#df_type").children().remove();
        $("#df_type").append("<span style='display:none' class='green'> - ok.</span>");
        $("#df_type").find("span").fadeIn('medium');
        return false;
    }
});
//公司名
$("#o_comp").blur(function(){
    if(o_comp.val()==""){
        $("#of_comp").children().remove();
        $("#of_comp").append("<span style='display:none' class='red'> - Please enter your comp.</span>");
        $("#of_comp").find("span").fadeIn('medium');
        return false;   
    }
    else{
        $("#of_comp").children().remove();
        $("#of_comp").append("<span style='display:none' class='green'> - ok.</span>");
        $("#of_comp").find("span").fadeIn('medium');
        return false;
    }
});
//提交
$("#d").click(function(){
    if( $("#df_tel").find("span").text().indexOf("ok")>=0 && 
        $("#df_pass").find("span").text().indexOf("ok"   )>=0 &&
        $("#df_ID").find("span").text().indexOf("ok"   )>=0
        ){
        return true;
    }
    else{
        return false;
    }
 });
$("#o").click(function(){
    if( $("#of_tel").find("span").text().indexOf("ok")>=0 &&
     $("#of_pass").find("span").text().indexOf("ok"   )>=0 &&
     $("#of_ID").find("span").text().indexOf("ok"   )>=0
     ){
        return true;
    }
    else{
        return false;
    }
 });
});
</script>