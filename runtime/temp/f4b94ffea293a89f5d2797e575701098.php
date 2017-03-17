<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:34:"../themes/default/about\about.html";i:1488104727;s:27:"../themes/default/base.html";i:1488246045;}*/ ?>
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
    
<link rel="stylesheet" href="__JS__/layui/css/layui.css">
<style>
    .header {
        width: 100%;
        height: 400px;
        background: url(__STATIC__/images/login-bg.png) #56bc94;
        text-align: center;
    }

    .header .top-nav {
        height: 60px;
        background-color: rgba(255, 255, 255, 0.3);
    }

    .header .top-nav h1 {
        display: inline-block;
        width: 300px;color: #fff;
        position: absolute;
        left: 0;
        top: 0;
        font-size: 24px;
        line-height: 60px;
        text-align: left;
    }

    .header .top-nav .layui-nav {
        position: absolute;
        top: 0;right: 0;
        width: 600px;
        text-align: right;
        background: none;
    }
    .header .top-nav .layui-nav a {color: #fff;}
    .header .download-btn {
        display: inline-block;
        width: 200px;
        height: 60px;
        line-height: 60px;
        margin-top: 150px;
        border: 1px solid rgba(255, 255, 255, 0.3);
        color: #fff;
        font-size: 18px;
        transition: all .3s;
    }
    .header .download-btn:hover {
        border-radius: 10px;
        background-color: rgba(255, 255, 255, 0.3);
    }

    .header .description {
        width: 200px;
        margin: 30px auto;
        text-align: left;
        color: #fff;
    }

    .content {margin-top: 50px;}
</style>

<div class="header">


    <div class="top-nav">
        <div class="layui-main">
            <h1>Think Admin</h1>

            <ul class="layui-nav">
                <li class="layui-nav-item"><a href="">首页</a></li>
                <li class="layui-nav-item"><a href="https://github.com/RoseKissYou/tp5_admin" target="_blank">rose Github</a></li>
                <li class="layui-nav-item"><a href="https://github.com/xiayulei/think_admin" target="_blank">大神 GitHub</a></li>
            </ul>
        </div>

    </div>

    <a href="https://github.com/xiayulei/think_admin/releases/download/v1.1/think_admin_full_v1.1.zip" target="_blank" class="download-btn">下 载 （v1.1）</a>

    <div class="description">
        <iframe frameborder="0" src="http://ghbtns.com/github-btn.html?user=xiayulei&amp;repo=think_admin&amp;type=star&amp;count=true" width="90" height="20"></iframe>
        <iframe frameborder="0" src="http://ghbtns.com/github-btn.html?user=xiayulei&amp;repo=think_admin&amp;type=fork&amp;count=true" width="90" height="20"></iframe>
    </div>
</div>

<div class="layui-main content">
    <fieldset class="layui-elem-field">
        <legend>Think Admin</legend>
        <div class="layui-field-box">
            <h3 style="font-weight: bold;">Think Admin是什么?</h3>
            <br />
            <p>一个节省开发时间的后台管理系统，程序基于ThinkPHP 5开发，后台UI使用LayUI搭建。</p>
            <br />
            <br />

            <h3 style="font-weight: bold;">2016.12.29更新：</h3>
            <br />
            <p>
                后台演示默认用户名和密码都是admin  访问路径 是 域名/admin
                * 核心框架同步更新为官方5.0.4<br />
                * 后台UI同步更新为官方1.0.7<br />
                * 调整`model`模型目录至`common`公共目录<br />
                * 统一上传接口为`api`模块下`Upload`控制器<br />
                * 分类表增加path字段，优化子分类查询<br />
                * 增加单独密码修改功能，防止低权管理员随意修改自己权限组<br />
                * 更换后台富文本编辑器为KindEditor<br />
                * 恢复入口文件至public目录，减少整体结构调整<br />
                * 修复一些BUG<br />
            </p>
            <br />
            <br />
        </div>
    </fieldset>

    <p>2016 © xiyilou.com</p>
</div>

<script src="__JS__/layui/lay/dest/layui.all.js"></script>
<script>
    var element = layui.element();
</script>

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