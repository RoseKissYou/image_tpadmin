<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:51:"../application/index/themes/default/index\list.html";i:1488770817;s:45:"../application/index/themes/default/base.html";i:1488770864;}*/ ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>美女图</title>
    <link rel="stylesheet" type="text/css" href="__CSS__/meitulu.css">
    
<link rel="stylesheet" href="__CSS__/style.css">
<link rel="stylesheet" href="__CSS__/jPages.css">
<link rel="stylesheet" href="__CSS__/animate.css">
<link rel="stylesheet" href="__CSS__/github.css">


    <script src="__JS__/hm.js"></script>
    <script src="__JS__/jquery.js"></script>
    <script src="__JS__/jquery.lazyload.js"></script>
    <script src="__JS__/showgg.js"></script>
    <script src="__JS__/meitulu.js"></script>
    <script src="__JS__/slider.js"></script>
    <script src="__JS__/share.js"></script>
</head>
<body>


<style type="text/css">
    .holder {
        margin: 15px 0;
    }

    .holder a {
        font-size: 12px;
        cursor: pointer;
        margin: 0 5px;
        color: #333;
    }

    .holder a:hover {
        background-color: #222;
        color: #fff;
    }

    .holder a.jp-previous { margin-right: 15px; }
    .holder a.jp-next { margin-left: 15px; }

    .holder a.jp-current, a.jp-current:hover {
        color: #FF4242;
        font-weight: bold;
    }

    .holder a.jp-disabled, a.jp-disabled:hover {
        color: #bbb;
    }

    .holder a.jp-current, a.jp-current:hover,
    .holder a.jp-disabled, a.jp-disabled:hover {
        cursor: default;
        background: none;
    }

    .holder span { margin: 0 5px; }

    form { float: right; margin-right: 10px; }

    form label { margin-right: 5px; }
</style>
<!------------------------------------------------------------------------------------------------------------------------>

<div id="content" class="defaults">

    <?php if(is_array($results) || $results instanceof \think\Collection || $results instanceof \think\Paginator): if( count($results)==0 ) : echo "" ;else: foreach($results as $key=>$result): ?>
    <h2><?php echo $result['title']; ?></h2>
    <?php echo $result['content']; ?>
    <!-- Nº of items per page form -->
    <form>
        <label>每一页显示数量: </label>
        <select>
            <option>5</option>
            <option>10</option>
            <option>15</option>
        </select>
    </form>
    <?php endforeach; endif; else: echo "" ;endif; ?>
    <!-- navigation holder -->
    <div class="holder"></div>

    <!-- item container -->
    <ul id="itemContainer">
        <?php if(is_array($photos) || $photos instanceof \think\Collection || $photos instanceof \think\Paginator): if( count($photos)==0 ) : echo "" ;else: foreach($photos as $key=>$photo): ?>
        <li><img style="width:300px;height: auto;" src="<?php echo $photo; ?>" alt="image"></li>

        <?php endforeach; endif; else: echo "" ;endif; ?>
       </ul>

</div> <!--! end of #content -->

<!------------------------------------------------------------------------------------------------------------------------>







<div class="main">
    <span><a href="http://www.meitulu.com/">美女图片</a>
        <a href="http://www.meitulu.com/html/shengming.html">版权声明</a>
        <a href="http://www.meitulu.com/html/about.html">关于我们</a></span>美图录，追求极致的高清体验！
</div>

<script type="text/javascript" src="__JS__/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="__JS__/highlight.pack.js"></script>
<script type="text/javascript" src="__JS__/tabifier.js"></script>
<script src="__JS__/js.js"></script>
<script src="__JS__/jPages.js"></script>

<!--页面JS脚本-->

<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-28718218-1']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>

<script>
    /* when document is ready */
    $(function() {

        /* initiate plugin */
        $("div.holder").jPages({
            containerID : "itemContainer",
            perPage : 5
        });

        /* on select change */
        $("select").change(function(){
            /* get new nº of items per page */
            var newPerPage = parseInt( $(this).val() );

            /* destroy jPages and initiate plugin again */
            $("div.holder").jPages("destroy").jPages({
                containerID   : "itemContainer",
                perPage       : newPerPage
            });
        });

    });
</script>

</body>
</html>