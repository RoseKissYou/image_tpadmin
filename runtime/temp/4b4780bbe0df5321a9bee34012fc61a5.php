<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:49:"../application/web/view/default/index\detail.html";i:1488535708;s:41:"../application/web/view/default/base.html";i:1488616421;}*/ ?>

<html>
<head>
    <title><?php echo $title['title']; ?></title>
    <meta charset="utf-8">
    
    <!--底部文字广告-->
    <link href="__CSS__/al1.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="__CSS__/gdt-style.css">
    <script type="text/javascript">
        arr_wx = ['cow060911', 'qqtang766', 'qqtang036', 'qqtang021'];
        var wx_index = Math.floor((Math.random() * arr_wx.length));
        var stxlwx = arr_wx[wx_index];
    </script>
<body>
<div class="side-bar">
    <img class="icon-qq" style="width:138px;height:138px;" src="__STATIC__/images/0.gif" alt="wechat">
</div>

这是电脑端访问的

<div class="w_head">
    <img src="__STATIC__/images/qb_icon.png" style="float:left;"/>
    <p>男人肾虚,别乱治,添加微信:
        <span class="wx"><span ontouchstart="_czc.push(['_trackEvent', '微信', '复制']);"><script>document.write(stxlwx);</script></span></span>（←长按复制/拷贝）
        <button><a class="ui-link" href="weixin://qr/GHUuIcDEiv71h9FCnyA8" target="_blank"><b style="color:#ff0000">打开微信</b></a></button>,添加微信好友，或扫描二维码,每天仅接受前30名免费咨询</p>
</div>

<!--主体-->

文案列表


<?php if(is_array($results) || $results instanceof \think\Collection || $results instanceof \think\Paginator): if( count($results)==0 ) : echo "" ;else: foreach($results as $key=>$result): ?>
<h1><?php echo $result['title']; ?></h1>
<?php echo $result['content']; endforeach; endif; else: echo "" ;endif; ?>


<br/><br/><br/><br/>


<!--底部-->
<div class="layui-footer footer">
    <div class="layui-main">
        <p>2016 &copy; <a href="https://github.com/xiayulei/think_admin" target="_blank">Think Admin</a></p>
    </div>
</div>



<!--页面JS脚本-->

</body>
</html>



