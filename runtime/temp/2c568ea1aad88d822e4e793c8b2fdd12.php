<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:50:"../application/admin/admin_themes/login\index.html";i:1489639039;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>Think Admin 后台管理系统</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="__JS__/layui/css/layui.css">
    <link rel="stylesheet" href="__CSS__/admin.css">
    <!--[if lt IE 9]>
    <script src="__JS__/html5shiv.min.js"></script>
    <script src="__JS__/respond.min.js"></script>
    <style>
        .login .login-form input {color: #000;}
    </style>
    <![endif]-->
</head>
<body class="login">
<div class="login-title">Think Admin 后台管理系统</div>
<form class="layui-form login-form" action="<?php echo url('admin/login/login'); ?>" method="post">
    <div class="layui-form-item">
        <label class="layui-form-label">用户名</label>
        <div class="layui-input-block">
            <input type="text" name="username" required lay-verify="required" autocomplete="off" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">密码</label>
        <div class="layui-input-block">
            <input type="password" name="password" required lay-verify="required" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">验证码</label>
        <div class="layui-input-block">
            <input type="text" name="verify" required lay-verify="required" class="layui-input layui-input-inline">
            <img src="<?php echo captcha_src(); ?>" alt="点击更换" title="点击更换" onclick="this.src='<?php echo captcha_src(); ?>?time='+Math.random()" class="captcha">
        </div>
    </div>
    <div class="layui-form-item">
        <div class="layui-input-block">
            <button class="layui-btn" lay-submit lay-filter="*">登 录</button>
        </div>
    </div>
</form>
<script>
    // 定义全局JS变量
    var GV = {
        current_controller: "admin/<?php echo (isset($controller) && ($controller !== '')?$controller:''); ?>/"
    };
</script>
<script src="__JS__/jquery.min.js"></script>
<script src="__JS__/layui/lay/dest/layui.all.js"></script>
<script src="__JS__/admin.js"></script>
</body>
</html>