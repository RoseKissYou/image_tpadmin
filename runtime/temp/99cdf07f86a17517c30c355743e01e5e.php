<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:36:"../themes/default/about\contact.html";i:1488104360;s:27:"../themes/default/base.html";i:1488246045;}*/ ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title['title']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
    <meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="__STATIC__/favicon.ico">
    <!-- Animate.css -->
    <link rel="stylesheet" href="__CSS__/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="__CSS__/icomoon.css">
    <!-- Simple Line Icons -->
    <link rel="stylesheet" href="__CSS__/simple-line-icons.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="__CSS__/bootstrap.css">
    <!-- Theme style  -->
    <link rel="stylesheet" href="__CSS__/style.css">

    <!-- Modernizr JS -->
    <script src="__JS__/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="__JS__/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="main-home">

    <header id="fh5co-header" role="banner">
        <div class="container">
            <div class="header-inner">
                <h1><i class="sl-icon-energy"></i><a href="index.html">TP5_admin</a></h1>
                <nav role="navigation">
                    <ul>
                        <li><a <?php if($title['id'] == '1'): ?> class="active"<?php endif; ?>  href="<?php echo url('index/Index/index'); ?>">首页</a></li>

                        <li><a <?php if($title['id'] == '2'): ?> class="active"<?php endif; ?> href="<?php echo url('index/Blog/index'); ?>">博客</a></li>
                        <li><a <?php if($title['id'] == '3'): ?> class="active"<?php endif; ?> href="<?php echo url('index/About/about'); ?>">关于我们</a></li>
                        <li><a <?php if($title['id'] == '4'): ?> class="active"<?php endif; ?> href="<?php echo url('index/About/contact'); ?>">联系我们</a></li>
                        <li><a <?php if($title['id'] == '5'): ?> class="active"<?php endif; ?> href="<?php echo url('index/Article/index'); ?>">文章</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!--主体-->
    

<div >
    关于我们

</div>


    <!--底部-->
    <footer id="fh5co-footer" role="contentinfo">

        <div class="container">
            <div class="col-md-3 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
                <h3>About Us</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            </div>
            <div class="col-md-6 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
                <h3>Our Services</h3>
                <ul class="float">
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">Branding &amp; Identity</a></li>
                    <li><a href="#">Free HTML5</a></li>
                    <li><a href="#">HandCrafted Templates</a></li>
                </ul>
                <ul class="float">
                    <li><a href="#">Free Bootstrap Template</a></li>
                    <li><a href="#">Free HTML5 Template</a></li>
                    <li><a href="#">Free HTML5 &amp; CSS3 Template</a></li>
                    <li><a href="#">HandCrafted Templates</a></li>
                </ul>

            </div>


            <div class="col-md-12 fh5co-copyright text-center">
                <p>&copy; 2017  All Rights Reserved. <span>Designed with <i class="icon-heart">

                </i> by <a href="https://github.com/xiayulei/think_admin" target="_blank">xiayulei</a>

                </span></p>
            </div>

        </div>
    </footer>
</div>

<!-- jQuery -->
<script src="__JS__/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="__JS__/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="__JS__/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="__JS__/jquery.waypoints.min.js"></script>
<!-- MAIN JS -->
<script src="__JS__/main.js"></script>

<!--页面JS脚本-->


</body>
</html>