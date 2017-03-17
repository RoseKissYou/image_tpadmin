<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:53:"../application/index/themes/default/index\detail.html";i:1489646074;s:45:"../application/index/themes/default/base.html";i:1489648856;}*/ ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>美女图</title>
    <link rel="stylesheet" type="text/css" href="__CSS__/meitulu.css">
    
    <script src="__JS__/hm.js"></script>
    <script src="__JS__/jquery.js"></script>
    <script src="__JS__/jquery.lazyload.js"></script>
    <script src="__JS__/showgg.js"></script>
    <script src="__JS__/meitulu.js"></script>
    <script src="__JS__/slider.js"></script>
    <script src="__JS__/share.js"></script>
</head>
<body>




<div class="article-content">
    <?php if(is_array($results) || $results instanceof \think\Collection || $results instanceof \think\Paginator): if( count($results)==0 ) : echo "" ;else: foreach($results as $key=>$result): ?>
    <div class="c_l">
        <h2><?php echo $result['title']; ?></h2>
        <?php echo $result['introduction']; ?>
    </div>
    <div class="content">
        <?php if(is_array($photos) || $photos instanceof \think\Collection || $photos instanceof \think\Paginator): if( count($photos)==0 ) : echo "" ;else: foreach($photos as $key=>$photo): ?>

        <center>
            <img title="提示：点击图片，查看原尺寸高清大图" src="<?php echo $photo; ?>" alt="<?php echo $result['title']; ?>" class="content_img">
        </center>

        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>


    <?php endforeach; endif; else: echo "" ;endif; ?>
</div>

<!--这里对图片数组进行分组分页显示-->






<div class="main">
    <span><a href="http://www.meitulu.com/">美女图片</a>
        <a href="http://www.meitulu.com/html/shengming.html">版权声明</a>
        <a href="http://www.meitulu.com/html/about.html">关于我们</a></span>美图录，追求极致的高清体验！
</div>

<!--页面JS脚本-->

</body>
</html>