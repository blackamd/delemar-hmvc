<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\helpers\Url;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>DELEMAR GROUP</title>
    <meta name="author" content="Ahmed Soliman">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="<?= Url::to(['../frontend/web/assets_tamplet/img/small-logo1.png'])?>">
    <link rel="apple-touch-icon-precomposed" href="<?= Url::to(['../frontend/web/assets_tamplet/img/small-logo1.png'])?>">
    <!--[if lt IE 9]>
    <script src="javascript/html5shiv.js"></script>
    <script src="javascript/respond.min.js"></script>
    <![endif]-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIEU6OT3xqCksCetQeNLIPps6-AYrhq-s&region=GB"></script>
    <?php $this->registerCsrfMetaTags() ?>

    <?php $this->head() ?>
</head>

<?php $this->beginBody() ?>
<body class="header-fixed page no-sidebar header-style-2 topbar-style-2 menu-has-search">

<div id="wrapper" class="animsition">
    <div id="page" class="clearfix">
    <!-- Header Wrap -->
    <div id="site-header-wrap">
        <!-- Top Bar -->
            <!--        <div id="top-bar">-->
            <!--            <div id="top-bar-inner" class="container">-->
            <!--                <div class="top-bar-inner-wrap">-->
            <!--                    <div class="top-bar-content">-->
            <!--                        <div class="inner">-->
            <!--                            <span class="address content">4946 Marmora Road, Central New</span>-->
            <!--                            <span class="phone content">+61 3 8376 6284</span>-->
            <!--                            <span class="time content">Mon-Sat: 8am - 6pm</span>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                    <div class="top-bar-socials">-->
            <!--                        <div class="inner">-->
            <!--                            <span class="text">Follow us:</span>-->
            <!--                            <span class="icons">-->
            <!--                                        <a href="#"><i class="fa fa-facebook"></i></a>-->
            <!--                                        <a href="#"><i class="fa fa-twitter"></i></a>-->
            <!--                                        <a href="#"><i class="fa fa-pinterest-p"></i></a>-->
            <!--                                        <a href="#"><i class="fa fa-rss"></i></a>-->
            <!--                                    </span>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
        <!-- /#top-bar -->

        <!-- Header -->
        <header id="site-header">
            <div id="site-header-inner" class="container">
                <div class="wrap-inner clearfix">
                    <div id="site-logo" class="clearfix">
                        <div id="site-log-inner">
                            <a href="<?= Url::to(['site/index'])?>" rel="home" class="main-logo">
                                <img src="<?= Url::to(['../frontend/web/assets_tamplet/img/logo-small.png'])?>" alt="DelemarGroup" width="186" height="39" data-retina="<?= Url::to(['../frontend/web/assets_tamplet/img/logo-small@2x.png'])?>" data-width="186" data-height="39">
                            </a>
                        </div>
                    </div><!-- /#site-logo -->

                    <div class="mobile-button">
                        <span></span>
                    </div><!-- /.mobile-button -->

                    <nav id="main-nav" class="main-nav">
                        <ul id="menu-primary-menu" class="menu">
                            <li class="menu-item menu-item">
                                <a href="<?= Url::to(['site/index'])?>">HOME</a>
<!--                                <ul class="sub-menu">-->
<!--                                    <li class="menu-item current-item"><a href="home.html">HOME 1</a></li>-->
<!--                                    <li class="menu-item"><a href="home-2.html">HOME 2</a></li>-->
<!--                                </ul>-->
                            </li>
                            <li class="menu-item menu-item">
                                <a href="<?= Url::to(['site/page-about'])?>">ABOUT US </a>
<!--                                <ul class="sub-menu">-->
<!--                                    <li class="menu-item"><a href="page-about.html">ABOUT US</a></li>-->
<!--                                    <li class="menu-item"><a href="page-about-detail.html">ABOUT DETAIL</a></li>-->
<!--                                    <li class="menu-item"><a href="page-about-team.html">ABOUT TEAM</a></li>-->
<!--                                    <li class="menu-item"><a href="page-about-careers.html">ABOUT CAREERS</a></li>-->
<!--                                </ul>-->
                            </li>
<!--                            <li class="menu-item menu-item-has-children">-->
<!--                                <a href="page-services.html">SERVICES</a>-->
<!--                                <ul class="sub-menu">-->
<!--                                    <li class="menu-item"><a href="page-services.html">SERVICES</a></li>-->
<!--                                    <li class="menu-item"><a href="page-services-detail.html">SERVICES DETAIL</a></li>-->
<!--                                </ul>-->
<!--                            </li>-->
                            <li class="menu-item menu-item-has-children">
                                <a href="<?= Url::to(['site/factories'])?>">FACTORIES</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="<?= Url::to(['site/aluminum-production'])?>">ALUMINUM PRODUCTION</a></li>
                                    <li class="menu-item"><a href="<?= Url::to(['site/aluminum-die-shop'])?>">ALUMINUM DIE SHOP</a></li>
                                    <li class="menu-item"><a href="<?= Url::to(['site/processed-glass'])?>">PROCESSED GLASS</a></li>
                                    <li class="menu-item"><a href="<?= Url::to(['site/aluminum-coating'])?>">ALUMINUM SERVICE</a></li>
                                </ul>
                            </li>
<!--                            <li class="menu-item menu-item-has-children">-->
<!--                                <a href="#">PROJECTS</a>-->
<!--                                <ul class="sub-menu">-->
<!--                                    <li class="menu-item"><a href="#">PROJECTS</a></li>-->
<!--                                    <li class="menu-item"><a href="#">PROJECTS FULL WIDTH</a></li>-->
<!--                                    <li class="menu-item"><a href="#">PROJECTS DETAIL</a></li>-->
<!--                                </ul>-->
<!--                            </li>-->
<!--                            <li class="menu-item menu-item-has-children" >-->
<!--                                <a href="page-testimonial.html">PAGE</a>-->
<!--                                <ul class="sub-menu">-->
<!--                                    <li class="menu-item"><a href="page-testimonial.html">PAGE TESTIMONIAL</a></li>-->
<!--                                    <li class="menu-item"><a href="page-pricing.html">PAGE PRICING</a></li>-->
<!--                                </ul>-->
<!--                            </li>-->
<!--                            <li class="menu-item menu-item-has-children">-->
<!--                                <a href="page-blog.html">BLOG</a>-->
<!--                                <ul class="sub-menu right-sub-menu">-->
<!--                                    <li class="menu-item"><a href="page-blog.html">BLOG</a></li>-->
<!--                                    <li class="menu-item"><a href="page-blog-single.html">BLOG SINGLE</a></li>-->
<!--                                </ul>-->
<!--                            </li>-->
                            <li class="menu-item menu-item">
                                <a href="<?= Url::to(['site/contact'])?>">CONTACT</a>
<!--                                <ul class="sub-menu right-sub-menu">-->
<!--                                    <li class="menu-item"><a href="page-contact.html">CONTACT 1</a></li>-->
<!--                                    <li class="menu-item"><a href="page-contact-2.html">CONTACT 2</a></li>-->
<!--                                </ul>-->
                            </li>
                        </ul>
                    </nav><!-- /#main-nav -->

<!--                    <div id="header-search">-->
<!--                        <a href="#" class="header-search-icon">-->
<!--                                    <span class="search-icon fa fa-search">-->
<!--                                    </span>-->
<!--                        </a>-->
<!---->
<!--                        <form role="search" method="get" class="header-search-form" action="#">-->
<!--                            <label class="screen-reader-text">Search for:</label>-->
<!--                            <input type="text" value="" name="s" class="header-search-field" placeholder="Search...">-->
<!--                            <button type="submit" class="header-search-submit" title="Search"><i class="fa fa-search"></i></button>-->
<!--                        </form>-->
<!--                    </div>-->
                </div><!-- /.wrap-inner -->
            </div><!-- /#site-header-inner -->
        </header><!-- /#site-header -->
    </div><!-- #site-header-wrap -->

<?= $content ?>

    <!-- Footer -->
    <footer id="footer" class="clearfix">
        <div id="footer-widgets" class="container">
            <div class="themesflat-row gutter-30">
                <div class="col span_1_of_3">
                    <div class="widget widget_text">
                        <div class="textwidget">
                            <p>
                                <img src="<?= Url::to(['../frontend/web/assets_tamplet/img/logo-white@2x.png'])?>" alt="Image" width="170" height="34">
                            </p>

<!--                            <p class="margin-bottom-15">We have over 15 years of experien able to help you 24 hours a day.</p>-->

                            <ul>
                                <li>
                                    <div class="inner">
                                        <span class="fa fa-map-marker"></span>
                                        <span class="text"><strong>ABOU RAWASH</strong> 100/113 Industrial Area, Alex Desert Road, <span class="sl">Giza, Egypt, Zip Code: 12677</span></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner">
                                        <span class="fa fa-map-marker"></span>
                                        <span class="text"><strong>6TH OF OCTOBER CITY</strong> Industrial Zone, North Extensions IDG, Plot M17 <span class="sl">Giza, Egypt P.O.BOX 2, Zip Code: 12581</span></span>
                                    </div>
                                </li>

                                <li>
                                    <div class="inner">
                                        <span class="fa fa-phone"></span>
                                        <span class="text">Mobile : (+20) 110 311 1261</span><br>
                                        <span class="text">Mobile : (+20) 110 311 1262</span><br>
                                        <span class="text">Mobile : (+20) 110 311 1263</span><br>
                                        <span class="text">Telephone : (02) 35394037</span><br>
                                        <span class="text">Telephone : (02) 35394032</span>
                                    </div>
                                </li>

<!--                                <li class="margin-top-7">-->
<!--                                    <div class="inner">-->
<!--                                        <span class=" font-size-14 fa fa-envelope"></span>-->
<!--                                        <span class="text">SUPPORT@NICHE_THEME</span>-->
<!--                                    </div>-->
<!--                                </li>-->
                            </ul>
                        </div>
                    </div><!-- /.widget_text -->
                    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                </div><!-- /.col -->

<!--                <div class="col span_1_of_3">-->
<!--                    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="0"></div>-->
<!---->
<!--                    <div class="widget widget_lastest">-->
<!--                        <h2 class="widget-title"><span>RECENT POSTS</span></h2>-->
<!--                        <ul class="lastest-posts data-effect clearfix">-->
<!--                            <li class="clearfix">-->
<!--                                <div class="thumb data-effect-item has-effect-icon">-->
<!--                                    <img src="--><?//= Url::to(['../frontend/web/assets_tamplet/img/news/post-1-65x65.jpg'])?><!--" alt="Image">-->
<!--                                    <div class="overlay-effect bg-color-2"></div>-->
<!--                                    <div class="elm-link">-->
<!--                                        <a href="page-blog-single.html" class="icon-2"></a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="text">-->
<!--                                    <h3><a href="page-blog-single.html">SMART BUILDING WITH CONCRETE SUSTAINABLE</a></h3>-->
<!--                                    <span class="post-date"><span class="entry-date">29 June 2018</span></span>-->
<!--                                </div>-->
<!--                            </li>-->
<!--                            <li class="clearfix">-->
<!--                                <div class="thumb data-effect-item has-effect-icon">-->
<!--                                    <img src="--><?//= Url::to(['../frontend/web/assets_tamplet/img/news/post-2-65x65.jpg'])?><!--" alt="Image">-->
<!--                                    <div class="overlay-effect bg-color-2"></div>-->
<!--                                    <div class="elm-link">-->
<!--                                        <a href="page-blog-single.html" class="icon-2"></a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="text">-->
<!--                                    <h3><a href="page-blog-single.html">HI-TECH WOODEN HOUSE BUILT WITHOUT GLUE</a></h3>-->
<!--                                    <span class="post-date"><span class="entry-date">31 June 2018</span></span>-->
<!--                                </div>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                </div>-->

                <div class="col span_1_of_3">
                    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="35" data-smobile="35"></div>
                    <div class="widget widget_tags">
                        <h2 class="widget-title margin-bottom-30"><span>TAGS</span></h2>
                        <div class="tags-list">
                            <a href="#">Building</a>
                            <a href="#">Smart House</a>
                            <a href="#">Costruction</a>
                            <a href="#">Villa</a>
                            <a href="#">Residential</a>
                            <a href="#">Interior</a>
                            <a href="#">Resort</a>
                            <a href="#">Commercial</a>
                        </div>
                    </div>
                </div>

                <div class="col span_1_of_3">
                    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="35" data-smobile="35"></div>

                    <div class="widget widget_instagram">
                        <h2 class="widget-title margin-bottom-30"><span>INSTAGRAM PHOTOS</span></h2>
                        <div class="instagram-wrap data-effect clearfix col3 g10">
                            <div class="instagram_badge_image has-effect-icon">
                                <a href="#" target="_blank" class="data-effect-item">
                                    <span class="item"><img src="<?= Url::to(['../frontend/web/assets_tamplet/img/instagram/instagram-1-83x83.jpg'])?>" alt="Image" ></span>
                                    <div class="overlay-effect bg-color-2"></div>
                                    <div class="elm-link">
                                        <span class="icon-3"></span>
                                    </div>
                                </a>
                            </div>

                            <div class="instagram_badge_image has-effect-icon">
                                <a href="#" target="_blank" class="data-effect-item">
                                    <span class="item"><img src="<?= Url::to(['../frontend/web/assets_tamplet/img/instagram/instagram-2-83x83.jpg'])?>" alt="Image" ></span>
                                    <div class="overlay-effect bg-color-2"></div>
                                    <div class="elm-link">
                                        <span class="icon-3"></span>
                                    </div>
                                </a>

                            </div>

                            <div class="instagram_badge_image has-effect-icon">
                                <a href="#" target="_blank" class="data-effect-item">
                                    <span class="item"><img src="<?= Url::to(['../frontend/web/assets_tamplet/img/instagram/instagram-3-83x83.jpg'])?>" alt="Image"></span>
                                    <div class="overlay-effect bg-color-2"></div>
                                    <div class="elm-link">
                                        <span class="icon-3"></span>
                                    </div>
                                </a>
                            </div>

                            <div class="instagram_badge_image has-effect-icon">
                                <a href="#" target="_blank" class="data-effect-item">
                                    <span class="item"><img src="<?= Url::to(['../frontend/web/assets_tamplet/img/instagram/instagram-4-83x83.jpg'])?>" alt="Image"></span>
                                    <div class="overlay-effect bg-color-2"></div>
                                    <div class="elm-link">
                                        <span class="icon-3"></span>
                                    </div>
                                </a>
                            </div>

                            <div class="instagram_badge_image has-effect-icon">
                                <a href="#" target="_blank" class="data-effect-item">
                                    <span class="item"><img src="<?= Url::to(['../frontend/web/assets_tamplet/img/instagram/instagram-5-83x83.jpg'])?>" alt="Image"></span>
                                    <div class="overlay-effect bg-color-2"></div>
                                    <div class="elm-link">
                                        <span class="icon-3"></span>
                                    </div>
                                </a>
                            </div>

                            <div class="instagram_badge_image has-effect-icon">
                                <a href="#" target="_blank" class="data-effect-item">
                                    <span class="item"><img src="<?= Url::to(['../frontend/web/assets_tamplet/img/instagram/instagram-6-83x83.jpg'])?>" alt="Image"></span>
                                    <div class="overlay-effect bg-color-2"></div>
                                    <div class="elm-link">
                                        <span class="icon-3"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div><!-- /.widget_instagram -->
                </div><!-- /.col -->
            </div><!-- /.themesflat-row -->
        </div><!-- /#footer-widgets -->
    </footer><!-- /#footer -->

    <!-- Bottom -->
    <div id="bottom" class="clearfix has-spacer">
        <div id="bottom-bar-inner" class="container">
            <div class="bottom-bar-inner-wrap">
                <div class="bottom-bar-content">
                    <div id="copyright">© <span class="text">Developed <a href="#" class="text-accent">by Soliman</a></span>
                    </div>
                </div><!-- /.bottom-bar-content -->

                <div class="bottom-bar-menu">
                    <ul class="bottom-nav">
                        <li class="menu-item">
                            <a href="<?= Url::to(['site/index'])?>">HOME</a>
                        </li>
                        <li class="menu-item">
                            <a href="<?= Url::to(['site/page-about'])?>">ABOUT US</a>
                        </li>
<!--                        <li class="menu-item">-->
<!--                            <a href="page-services.html">SERVICES</a>-->
<!--                        </li>-->
                        <li class="menu-item">
                            <a href="<?= Url::to(['site/factories'])?>">FACTORIES</a>
                        </li>
<!--                        <li class="menu-item">-->
<!--                            <a href="#">PROJECTS</a>-->
<!--                        </li>-->
<!--                        <li class="menu-item">-->
<!--                            <a href="page-testimonial.html">PAGE</a>-->
<!--                        </li>-->
<!--                        <li class="menu-item ">-->
<!--                            <a href="page-blog.html">BLOG</a>-->
<!--                        </li>-->
                        <li class="menu-item">
                            <a href="<?= Url::to(['site/contact'])?>">CONTACT</a>
                        </li>
                    </ul>
                </div><!-- /.bottom-bar-menu -->
            </div><!-- /.bottom-bar-inner-wrap -->
        </div><!-- /#bottom-bar-inner -->
    </div><!-- /#bottom -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
