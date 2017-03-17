<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:36:"../themes/default/article\index.html";i:1488249541;s:27:"../themes/default/base.html";i:1488249008;}*/ ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php echo $title['title']; ?></title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/icomoon-social.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="__CSS__/leaflet.css" />
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="__CSS__/leaflet.ie.css" />
    <![endif]-->
    <link rel="stylesheet" href="__CSS__/main.css">

    <script src="__JS__/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="__STATIC__/favicon.ico">

</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please
    <a href="http://browsehappy.com/">upgrade your browser</a> or
    <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->


<!-- Navigation & Logo-->
<div class="mainmenu-wrapper">
    <div class="container">
        <div class="menuextras">
            <div class="extras">
                <ul>
                    <li class="shopping-cart-items"><i class="glyphicon glyphicon-shopping-cart icon-white">

                    </i> <a href="page-shopping-cart.html"><b>购物车数量3</b></a></li>
                    <li>
                        <div class="dropdown choose-country">
                            <a class="#" data-toggle="dropdown" href="#"><img src="__STATIC__/images/flags/cn.png" alt="Great Britain"> 中国</a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="menuitem"><a href="#"><img src="__STATIC__/images/flags/us.png" alt="United States"> US</a></li>
                                <li role="menuitem"><a href="#"><img src="__STATIC__/images/flags/de.png" alt="Germany"> DE</a></li>
                                <li role="menuitem"><a href="#"><img src="__STATIC__/images/flags/es.png" alt="Spain"> ES</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="page-login.html">登录</a></li>
                </ul>
            </div>
        </div>
        <nav id="mainmenu" class="mainmenu">
            <ul>
                <li class="logo-wrapper"><a href="index.html"><img src="__STATIC__/images/mPurpose-logo.png" alt="Multipurpose Twitter Bootstrap Template"></a></li>
                <li class="active">
                    <a href="<?php echo url('index/Index/index'); ?>">首页</a>
                </li>
                <li>
                    <a href="<?php echo url('index/Blog/index'); ?>">文章</a>
                </li>
                <li class="has-submenu">
                    <a href="<?php echo url('index/About/about'); ?>">更多页面</a>
                    <div class="mainmenu-submenu">
                        <div class="mainmenu-submenu-inner">
                            <div>
                                <h4>Homepage</h4>
                                <ul>
                                    <li><a href="index.html">Homepage (Sample 1)</a></li>
                                    <li><a href="page-homepage-sample.html">Homepage (Sample 2)</a></li>
                                </ul>
                                <h4>Services & Pricing</h4>
                                <ul>
                                    <li><a href="page-services-1-column.html">Services/Features (Rows)</a></li>
                                    <li><a href="page-services-3-columns.html">Services/Features (3 Columns)</a></li>
                                    <li><a href="page-services-4-columns.html">Services/Features (4 Columns)</a></li>
                                    <li><a href="page-pricing.html">Pricing Table</a></li>
                                </ul>
                                <h4>Team & Open Vacancies</h4>
                                <ul>
                                    <li><a href="page-team.html">Our Team</a></li>
                                    <li><a href="page-vacancies.html">Open Vacancies (List)</a></li>
                                    <li><a href="page-job-details.html">Open Vacancies (Job Details)</a></li>
                                </ul>
                            </div>
                            <div>
                                <h4>Our Work (Portfolio)</h4>
                                <ul>
                                    <li><a href="page-portfolio-2-columns-1.html">Portfolio (2 Columns, Option 1)</a></li>
                                    <li><a href="page-portfolio-2-columns-2.html">Portfolio (2 Columns, Option 2)</a></li>
                                    <li><a href="page-portfolio-3-columns-1.html">Portfolio (3 Columns, Option 1)</a></li>
                                    <li><a href="page-portfolio-3-columns-2.html">Portfolio (3 Columns, Option 2)</a></li>
                                    <li><a href="page-portfolio-item.html">Portfolio Item (Project) Description</a></li>
                                </ul>
                                <h4>General Pages</h4>
                                <ul>
                                    <li><a href="page-about-us.html">About Us</a></li>
                                    <li><a href="page-contact-us.html">Contact Us</a></li>
                                    <li><a href="page-faq.html">Frequently Asked Questions</a></li>
                                    <li><a href="page-testimonials-clients.html">Testimonials & Clients</a></li>
                                    <li><a href="page-events.html">Events</a></li>
                                    <li><a href="page-404.html">404 Page</a></li>
                                    <li><a href="page-sitemap.html">Sitemap</a></li>
                                    <li><a href="page-login.html">Login</a></li>
                                    <li><a href="page-register.html">Register</a></li>
                                    <li><a href="page-password-reset.html">Password Reset</a></li>
                                    <li><a href="page-terms-privacy.html">Terms & Privacy</a></li>
                                    <li><a href="page-coming-soon.html">Coming Soon</a></li>
                                </ul>
                            </div>
                            <div>
                                <h4>eShop</h4>
                                <ul>
                                    <li><a href="page-products-3-columns.html">Products listing (3 Columns)</a></li>
                                    <li><a href="page-products-4-columns.html">Products listing (4 Columns)</a></li>
                                    <li><a href="page-products-slider.html">Products Slider</a></li>
                                    <li><a href="page-product-details.html">Product Details</a></li>
                                    <li><a href="page-shopping-cart.html">Shopping Cart</a></li>
                                </ul>
                                <h4>Blog</h4>
                                <ul>
                                    <li><a href="page-blog-posts.html">Blog Posts (List)</a></li>
                                    <li><a href="page-blog-post-right-sidebar.html">Blog Single Post (Right Sidebar)</a></li>
                                    <li><a href="page-blog-post-left-sidebar.html">Blog Single Post (Left Sidebar)</a></li>
                                    <li><a href="page-news.html">Latest & Featured News</a></li>
                                </ul>
                            </div>
                        </div><!-- /mainmenu-submenu-inner -->
                    </div><!-- /mainmenu-submenu -->
                </li>
                <li>
                    <a href="<?php echo url('index/Article/index'); ?>">文章</a>
                </li>
            </ul>
        </nav>
    </div>
</div>


<div class="blog-content">
    <div id="fh5co-blog-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                    <h2>tp5 测试博客系统</h2>
                    <p><span>Created with <i class="sl-icon-heart"></i> xiayulei <a href="https://github.com/xiayulei/think_admin">github</a></span></p>
                </div>
            </div>

                <?php if(is_array($results) || $results instanceof \think\Collection || $results instanceof \think\Paginator): if( count($results)==0 ) : echo "" ;else: foreach($results as $key=>$result): ?>

                    <div class="blog-inner">
                        <a href="#"><img class="img-responsive" src="<?php echo $result['thumb']; ?>" alt="Blog"></a>
                        <div class="desc">
                            <h3><a href="#"><?php echo $result['title']; ?></a></h3>
                            <p><?php echo $result['introduction']; ?></p>
                            <p><a href="<?php echo url('index/article/detail',['id'=>$result['id']]); ?>" class="btn btn-primary btn-outline with-arrow">阅读全文<i class="icon-arrow-right"></i></a></p>
                        </div>
                    </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>


        </div>
    </div>

</div>

<!-- Page Title -->
<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Theme Features</h1>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">



        <div class="row service-wrapper-row">
            <div class="col-sm-4">
                <div class="service-image">
                    <img src="__STATIC__/images/homepage-slider/slide2.png" alt="Color Schemes">
                </div>
            </div>
            <div class="col-sm-8">
                <h3>Color Scheme matching your branding</h3>
                <p>
                    Template comes with five color themes (Blue, Orange, Green, Red and Grey). All you need to do is to use relevant CSS file.
                </p>
                <p>
                    There is no color scheme that matches your branding? No problem.  You can easily compile your own by changing one variable - thanks to LESS!
                </p>
            </div>
        </div>


        <?php if(is_array($results) || $results instanceof \think\Collection || $results instanceof \think\Paginator): if( count($results)==0 ) : echo "" ;else: foreach($results as $key=>$result): ?>
        <div class="row service-wrapper-row">
            <div class="col-sm-4">
                <div class="service-image">
                    <img src="__STATIC__/images/less-logo.png" alt="<?php echo $result['title']; ?>">
                </div>
            </div>
            <div class="col-sm-8">
                <h3><?php echo $result['title']; ?></h3>
                <p><?php echo $result['introduction']; ?></p>
                <p><?php echo $result['introduction']; ?></p>
            </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>

        <div class="row service-wrapper-row">
            <div class="col-sm-4">
                <div class="service-image">
                    <img src="__STATIC__/images/homepage-slider/slide1.png" alt="Responsive">
                </div>
            </div>
            <div class="col-sm-8">
                <h3>Fully Responsive</h3>
                <p>
                    It looks great on desktops, laptops, tablets and smartphones - mPurpose template was built to shine on all devices :)
                </p>
                <p>
                    You can be sure that all the components are responsive.
                </p>
            </div>
        </div>
        <div class="row service-wrapper-row">
            <div class="col-sm-4">
                <div class="service-image">
                    <img src="__STATIC__/images/flags.png" alt="Flags">
                </div>
            </div>
            <div class="col-sm-8">
                <h3>Additional Icons - Flags</h3>
                <p>
                    Template comes with 247 flag icons representing most countries in the world
                </p>
            </div>
        </div>
    </div>
</div>




<!------------------------------footer------------------------------------->
<!-- Footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-footer col-md-3 col-xs-6">
                <h3>Our Latest Work</h3>
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <a href="page-portfolio-item.html"><img src="__STATIC__/images/portfolio6.jpg" alt="Project Name"></a>
                    </div>
                </div>
            </div>
            <div class="col-footer col-md-3 col-xs-6">
                <h3>Navigate</h3>
                <ul class="no-list-style footer-navigate-section">
                    <li><a href="page-blog-posts.html">Blog</a></li>
                    <li><a href="page-portfolio-3-columns-2.html">Portfolio</a></li>
                    <li><a href="page-products-3-columns.html">eShop</a></li>
                    <li><a href="page-services-3-columns.html">Services</a></li>
                    <li><a href="page-pricing.html">Pricing</a></li>
                    <li><a href="page-faq.html">FAQ</a></li>
                </ul>
            </div>

            <div class="col-footer col-md-4 col-xs-6">
                <h3>Contacts</h3>
                <p class="contact-us-details">
                    <b>Address:</b> 123 Fake Street, LN1 2ST, London, United Kingdom<br/>
                    <b>Phone:</b> +44 123 654321<br/>
                    <b>Fax:</b> +44 123 654321<br/>
                    <b>Email:</b> <a href="mailto:getintoutch@yourcompanydomain.com">getintoutch@yourcompanydomain.com</a>
                </p>
            </div>
            <div class="col-footer col-md-2 col-xs-6">
                <h3>Stay Connected</h3>
                <ul class="footer-stay-connected no-list-style">
                    <li><a href="#" class="facebook"></a></li>
                    <li><a href="#" class="twitter"></a></li>
                    <li><a href="#" class="googleplus"></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="footer-copyright">Copyright &copy; 2015.Company name All rights reserved.<a target="_blank" href="http://www.cssmoban.com/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></div>
            </div>
        </div>
    </div>
</div>

<!-- Javascripts -->
<script src="__JS__/jquery-1.9.1.min.js"></script>
<script src="__JS__/bootstrap.min.js"></script>
<script src="__JS__/leaflet.js"></script>
<script src="__JS__/jquery.fitvids.js"></script>
<script src="__JS__/jquery.sequence-min.js"></script>
<script src="__JS__/jquery.bxslider.js"></script>
<script src="__JS__/main-menu.js"></script>
<script src="__JS__/template.js"></script>


<!--页面JS脚本-->


</body>
</html>