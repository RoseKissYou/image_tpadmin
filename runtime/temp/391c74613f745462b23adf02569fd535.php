<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:51:"../application/photo/view/default/index\detail.html";i:1489490618;s:43:"../application/photo/view/default/base.html";i:1489490265;}*/ ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <script type="application/x-javascript">
        addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>美女图</title>
    <link rel="stylesheet" type="text/css" href="__CSS__/photo_style.css">
    <link rel="stylesheet" type="text/css" href="__CSS__/main.css">
    
</head>
<body>



<!-- //Global CSS for the page and tiles -->
<!---start-click-drop-down-menu----->
<script src="__JS__/jquery.min.js"></script>
<!----start-dropdown--->
<script type="text/javascript">
    var $ = jQuery.noConflict();
    $(function() {
        $('#activator').click(function(){
            $('#box').animate({'top':'0px'},500);
        });
        $('#boxclose').click(function(){
            $('#box').animate({'top':'-700px'},500);
        });
    });
    $(document).ready(function(){
        //Hide (Collapse) the toggle containers on load
        $(".toggle_container").hide();
        //Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
        $(".trigger").click(function(){
            $(this).toggleClass("active").next().slideToggle("slow");
            return false; //Prevent the browser jump to the link anchor
        });

    });
</script>
<!----//End-dropdown--->
<!---//End-click-drop-down-menu----->

<!---start-wrap---->
<!---start-header---->
<div class="header">
    <div class="wrap">
        <div class="logo">
            <a href="index.html"><img style="width:80px;height:auto;" src="__STATIC__/images/bxt_text.png" title="pinbal" /></a>
        </div>
        <div class="nav-icon">
            <a href="#" class="right_bt" id="activator"><span> </span> </a>
        </div>
        <div class="box" id="box">
            <div class="box_content">
                <div class="box_content_center">
                    <div class="form_content">
                        <div class="menu_box_list">
                            <ul>
                                <li><a href="#"><span>home</span></a></li>
                                <li><a href="#"><span>About</span></a></li>
                                <li><a href="#"><span>Works</span></a></li>
                                <li><a href="#"><span>Clients</span></a></li>
                                <li><a href="#"><span>Blog</span></a></li>
                                <li><a href="contact.html"><span>Contact</span></a></li>
                                <div class="clear"> </div>
                            </ul>
                        </div>
                        <a class="boxclose" id="boxclose"> <span> </span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-searchbar">
            <form>
                <input type="text" /><input type="submit" value="" />
            </form>
        </div>
        <div class="userinfo">
            <div class="user">
                <ul>
                    <li><a href="#"><img style="width:30px;height:auto;" src="__STATIC__/images/th1.jpg" title="user-name" /><span>Ipsum</span></a></li>
                </ul>
            </div>
        </div>
        <div class="clear"> </div>
    </div>
</div>






<div class="article-content">
    <?php if(is_array($results) || $results instanceof \think\Collection || $results instanceof \think\Paginator): if( count($results)==0 ) : echo "" ;else: foreach($results as $key=>$result): ?>
    <div class="c_l">
        <h2><?php echo $result['title']; ?></h2>
        <?php echo $result['content']; ?>
    </div>
    <div class="content">
        <?php if(is_array($photos) || $photos instanceof \think\Collection || $photos instanceof \think\Paginator): if( count($photos)==0 ) : echo "" ;else: foreach($photos as $key=>$photo): ?>

        <div class="box-img">
            <img style="width:80%;height:auto;margin:0 auto 0;" title="提示：点击图片，查看原尺寸高清大图" src="<?php echo $photo; ?>" alt="<?php echo $result['title']; ?>" class="content_img">
        </div>

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

<!----wookmark-scripts---->
<script src="__JS__/jquery.imagesloaded.js"></script>
<script src="__JS__/jquery.wookmark.js"></script>
<script type="text/javascript">
    (function ($){
        var $tiles = $('#tiles'),
                $handler = $('li', $tiles),
                $main = $('#main'),
                $window = $(window),
                $document = $(document),
                options = {
                    autoResize: true, // This will auto-update the layout when the browser window is resized.
                    container: $main, // Optional, used for some extra CSS styling
                    offset: 20, // Optional, the distance between grid items
                    itemWidth:280 // Optional, the width of a grid item
                };
        /**
         * Reinitializes the wookmark handler after all images have loaded
         */
        function applyLayout() {
            $tiles.imagesLoaded(function() {
                // Destroy the old handler
                if ($handler.wookmarkInstance) {
                    $handler.wookmarkInstance.clear();
                }

                // Create a new layout handler.
                $handler = $('li', $tiles);
                $handler.wookmark(options);
            });
        }
        /**
         * When scrolled all the way to the bottom, add more tiles
         */
        function onScroll() {
            // Check if we're within 100 pixels of the bottom edge of the broser window.
            var winHeight = window.innerHeight ? window.innerHeight : $window.height(), // iphone fix
                    closeToBottom = ($window.scrollTop() + winHeight > $document.height() - 100);

            if (closeToBottom) {
                // Get the first then items from the grid, clone them, and add them to the bottom of the grid
                var $items = $('li', $tiles),
                        $firstTen = $items.slice(0, 10);
                $tiles.append($firstTen.clone());

                applyLayout();
            }
        };

        // Call the layout function for the first time
        applyLayout();

        // Capture scroll event.
        $window.bind('scroll.wookmark', onScroll);
    })(jQuery);
</script>
<!----//wookmark-scripts---->
<!----start-footer--->
<div class="footer">
    <p>Design by <a href="http://www.xiaoming666.cn/">百姓堂</a></p>
</div>
<!----//End-footer--->
<!---//End-wrap---->

<!--页面JS脚本-->

</body>
</html>