<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:48:"../application/web/view/default/index\base2.html";i:1488620179;s:43:"../application/web/view/default/base01.html";i:1488622854;}*/ ?>

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


这是电脑端访问的

    <div style="position:fixed; top:0px; left:20%; width:220px; height: 150px;">

        <img class="ad01" style="margin:10px 0; " src="__STATIC__/images/002.jpg">

    </div>

    <div class="ad" style="position:fixed; width:220px; top:20px; right:19%; border:solid 1px #ccc;padding-left:10px; padding-right:10px; padding-bottom:10px; padding-top:10px;" >


    <img  style="margin:10px 0; display:block; padding:0px;margin:0px;" src="__STATIC__/images/003.jpg">
    <h2 style="font-size:14px;color: rgb(63, 63, 63); text-align:center; font-weight:400; width:220px;">老中医——中共党员，河北永清人，1936年出生。教授、主任医师。现任炎黄国医馆馆长、中国中医药学会男性学专业委员会主任委员、中国保健协会委员。</h2>

    <h5 style="font-size:18px; text-align: left;padding-top: 10px; padding-left: 20px;"><span style="font-weight: 600;">微信号：</span>

       <br> <span style="color:#ff0000 "> </span><b><span style="color:#ff0000 ">  <script>document.write(stxlwx);</script> </span></b><span style="background-color:#fafafa "></h5>


    <div class="qr_code_pc_inner">
        <div class="qr_code_pc">
            <img id="js_pc_qr_code_img" class="qr_code_pc_img"  src="__STATIC__/images/0.gif">
            <p>微信扫一扫<br>加老中医微信</p>
        </div>
    </div>

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


