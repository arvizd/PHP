<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>wwt</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo hcss_url;?>bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo hcss_url;?>stylish-index.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
</head>
<body>
    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i>Nav</a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i>close</a>
            <li class="sidebar-brand">
                <a href="#top" onclick=$("#menu-close").click();>WWT</a>
            </li>
            <li>
                <a href="#top" onclick=$("#menu-close").click();>Home</a>
            </li>
            <li>
                <a href="#about" onclick=$("#menu-close").click();>About</a>
            </li>
            <li>
                <a href="#portinfo" onclick=$("#menu-close").click();>portinfo</a>
            </li>
            <li>
                <a href="#contact" onclick=$("#menu-close").click();>Contact</a>
            </li>
        </ul>
    </nav>
    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>Join Us</h1>
            <h3>W2T Bring you chances</h3>
        </div>
    </header>
    <!-- About -->
    <section id="about" class="about bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>wwt is a website dedicated to shipping information!</h2>
                    <p class="lead">Where the driver and the owner can find the most satisfactory information! </p>
                    <p class="lead">We have strict information to control!</p>
                    <p class="lead">We have a professional information analysis team!</p>
                    <p class="lead">Service-oriented, information security, win-win cooperation!</p>
                </div>
            </div>
        </div>
    </section>
    <!-- portinfo -->
    <section id="portinfo">
        <div class="callout" >
            <div class="text-vertical-center">
                 <a href="<?php echo U('Home/Login/index');?>" class="btn btn-dark btn-lg" target="_blank">Entrance</a>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer  class="bg-info"  id="contact">
        <div class="container  " >
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center ">
                    <h4><strong>WWt</strong>
                    </h4>
                    <p>Hubei.Wuhan
                        <br>Jiangxia District · Sunshine Avenue No. 1
                        </p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i>13071280327</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:arvinzd@163.com">arvinzd@163.com</a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy;2017 wwt All rights reserved</p>
                </div>
            </div>
        </div>
        <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x">TOP</i></a>
    </footer>
    <!-- jQuery -->
    <script src="<?php echo hjs_url;?>jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo hjs_url;?>bootstrap.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    //#to-top button appears after scrolling
    var fixed = false;
    $(document).scroll(function() {
        if ($(this).scrollTop() > 250) {
            if (!fixed) {
                fixed = true;
                // $('#to-top').css({position:'fixed', display:'block'});
                $('#to-top').show("slow", function() {
                    $('#to-top').css({
                        position: 'fixed',
                        display: 'block'
                    });
                });
            }
        } else {
            if (fixed) {
                fixed = false;
                $('#to-top').hide("slow", function() {
                    $('#to-top').css({
                        display: 'none'
                    });
                });
            }
        }
    });
     </script>
</body>
</html>