<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:52:"../application/index/themes/default/index\index.html";i:1489647629;s:45:"../application/index/themes/default/base.html";i:1489648856;}*/ ?>

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


<!-- 主体 -->
<div class="bk10"></div>

<div class="zuixin">精选美图</div>
<div class="boxs">
    <ul class="img">
        <?php if(is_array($results) || $results instanceof \think\Collection || $results instanceof \think\Paginator): if( count($results)==0 ) : echo "" ;else: foreach($results as $key=>$result): ?>
        <li>
            <a href="<?php echo url('index/index/detail',['id'=>$result['id']]); ?>" target="_blank">
                <img src="<?php echo $result['thumb']; ?>" alt="<?php echo $result['title']; ?>" width="<?php echo $result['width']; ?>" height="<?php echo $result['height']; ?>" >
            </a>
            <p>模特：<a href="http://www.meitulu.com/t/yanni/" target="_blank" class="tags"><?php echo $result['author']; ?></a></p>
            <p class="p_title"><a href="<?php echo url('index/index/detail',['id'=>$result['id']]); ?>" target="_blank"><?php echo $result['title']; ?></a></p>
        </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>

</div>





<div class="main">
    <span><a href="http://www.meitulu.com/">美女图片</a>
        <a href="http://www.meitulu.com/html/shengming.html">版权声明</a>
        <a href="http://www.meitulu.com/html/about.html">关于我们</a></span>美图录，追求极致的高清体验！
</div>

<!--页面JS脚本-->

</body>
</html>