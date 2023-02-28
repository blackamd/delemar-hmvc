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
                    <div class="mobile-button">
                        <span></span>
                    </div>
                    <div id="header-language-en" class="clearfix">
                        <a href="<?= Url::to(['../dmarab/site/index'])?>"><img src="<?= Url::to(['../frontend/web/assets_tamplet/img/language/egypt.png'])?>" alt="DelemarGroup" width="25" height="25" data-retina="<?= Url::to(['../frontend/web/assets_tamplet/img/language/egypt.png'])?>" data-width="25" data-height="25"></a>
                    </div>
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

                    <div id="site-logo" class="clearfix">
                        <div id="site-log-inner">
                            <a href="<?= Url::to(['site/index'])?>" rel="home" class="main-logo">
                                <img src="<?= Url::to(['../frontend/web/assets_tamplet/img/logo-small.png'])?>" alt="DelemarGroup" width="186" height="39" data-retina="<?= Url::to(['../frontend/web/assets_tamplet/img/logo-small@2x.png'])?>" data-width="186" data-height="39">
                            </a>
                        </div>
                    </div><!-- /#site-logo -->

<!--                    <div id="header-search">-->
<!--                        <a href="#" class="header-search-icon">-->
<!--                                    <span class="search-icon fa fa-search"></span>-->
<!--                        </a>-->
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
                                        <a href="https://www.google.com/maps/search/rkw/@29.949756988776308,30.8594972486998,17z?hl=en"><span class="text"><strong>Smart Village</strong> Alex Desert road,building B123 (ARC), 1ST floor,unites A106-107,B120-121-122</span></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner">
                                        <span class="fa fa-map-marker"></span>
                                        <a href="https://www.google.com/maps/search/rkw/@29.949756988776308,30.8594972486998,17z?hl=en"><span class="text"><strong>6TH OF OCTOBER CITY</strong> Industrial Zone, North Extensions IDG, Plot M17 <span class="sl">Giza, Egypt P.O.BOX 2, Zip Code: 12581</span></span></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner">
                                        <span class="fa fa-map-marker"></span>
                                        <a href="https://www.google.com/maps?q=30.0828465,31.0335297&z=17&hl=en"><span class="text"><strong>ABOU RAWASH</strong> 100/113 Industrial Area, Alex Desert Road, <span class="sl">Giza, Egypt, Zip Code: 12677</span></span></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner">
                                        <span class="fa fa-phone"></span>
                                        <span class="text">Mobile : (+20) 110 311 1261/2</span><br>
                                        <span class="text">Mobile : (+20) 110 311 1263/4</span><br>
                                        <span class="text">Telephone : (02) 35394037</span><br>
                                        <span class="text">Telephone : (02) 35394032</span>
                                    </div>
                                </li>
                                <li class="margin-top-7">
                                    <div class="inner">
                                        <span class=" font-size-14 fa fa-envelope"></span>
                                        <a href="mailto:info@delemargroup.com"><span class="text">info@delemargroup.com</span></a>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div><!-- /.widget_text -->
                    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                </div>
                <div class="col span_1_of_3">
                    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="35" data-smobile="35"></div>
                    <div class="widget widget_text">
                        <div class="textwidget">
                            <h2 class="widget-title margin-bottom-30"><span>SOCIAL</span></h2>
                            <ul>
                                <li>
                                    <div class="inner">
                                        <span class="fa fa-linkedin"></span>
                                        <a href="https://www.linkedin.com/in/delemar-industrial-group-03b2a5260/"><span class="text"><strong>LINKEDIN</strong></span></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner">
                                        <span class="fa fa-instagram"></span>
                                        <a href="https://instagram.com/delemar_group?igshid=YmMyMTA2M2Y="><span class="text"><strong>INSTAGRAM (DELEMAR GROUP)</strong></span></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner">
                                        <span class="fa fa-instagram"></span>
                                        <a href="https://instagram.com/delemar_coating?igshid=YmMyMTA2M2Y="><span class="text"><strong>INSTAGRAM (DELEMAR COATING)</strong></span></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner">
                                        <span class="fa fa-instagram"></span>
                                        <a href="https://instagram.com/delemar_glass?igshid=YmMyMTA2M2Y="><span class="text"><strong>INSTAGRAM (DELEMAR GLASS)</strong></span></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner">
                                        <span class="fa fa-instagram"></span>
                                        <a href="https://instagram.com/delemar_aluminium?igshid=YmMyMTA2M2Y="><span class="text"><strong>INSTAGRAM (DELEMAR ALUMINIUM)</strong></span></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner">
                                        <span class="fa fa-facebook-f"></span>
                                        <a href="https://www.facebook.com/profile.php?id=100086897088906&mibextid=ZbWKwL"><span class="text"><strong>FACEBOOK (DELEMAR GLASS)</strong></span></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner">
                                        <span class="fa fa-facebook-f"></span>
                                        <a href="https://www.facebook.com/profile.php?id=100087172027396&mibextid=ZbWKwL"><span class="text"><strong>FACEBOOK (DELEMAR GROUP)</strong></span></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner">
                                        <span class="fa fa-facebook-f"></span>
                                        <a href="https://m.facebook.com/Delemar/?mibextid=LQQJ4d"><span class="text"><strong>FACEBOOK (DELEMAR ALUMINIUM)</strong></span></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner">
                                        <span class="fa fa-facebook-f"></span>
                                        <a href="https://www.facebook.com/DelemarforAluminiumcoating/?mibextid=LQQJ4d"><span class="text"><strong>FACEBOOK (DELEMAR COATING)</strong></span></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col span_1_of_3">
                    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="35" data-smobile="35"></div>
                    <div class="widget widget_tags">
                        <h2 class="widget-title margin-bottom-30"><span>FACTORIES</span></h2>
                        <div class="tags-list">
                            <a href="<?= Url::to(['site/aluminum-production'])?>">Aluminium Production</a>
                            <a href="<?= Url::to(['site/aluminum-die-shop'])?>">Aluminium Die Shop</a>
                            <a href="<?= Url::to(['site/processed-glass'])?>">Processed Glass</a>
                            <a href="<?= Url::to(['site/aluminum-coating'])?>">Aluminium Service</a>
                        </div>
                    </div>
                </div>

                <div class="col span_1_of_3">
                    <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="35" data-smobile="35"></div>

                    <div class="widget widget_instagram">
                        <h2 class="widget-title margin-bottom-30"><span>PHOTOS</span></h2>
                        <div class="instagram-wrap data-effect clearfix col3 g10">
                            <div class="instagram_badge_image has-effect-icon">
                                <a href="#" target="_blank" class="data-effect-item">
                                    <span class="item"><img src="<?= Url::to(['../frontend/web/assets_tamplet/img/instagram/Secondary vertical logo-01283x83.png'])?>" alt="Image" ></span>
                                    <div class="overlay-effect bg-color-2"></div>
                                    <div class="elm-link">
                                        <span class="icon-3"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="instagram_badge_image has-effect-icon">
                                <a href="#" target="_blank" class="data-effect-item">
                                    <span class="item"><img src="<?= Url::to(['../frontend/web/assets_tamplet/img/instagram/Secondary vertical logo83x83.png'])?>" alt="Image" ></span>
                                    <div class="overlay-effect bg-color-2"></div>
                                    <div class="elm-link">
                                        <span class="icon-3"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="instagram_badge_image has-effect-icon">
                                <a href="#" target="_blank" class="data-effect-item">
                                    <span class="item"><img src="<?= Url::to(['../frontend/web/assets_tamplet/img/instagram/Secondary vertical logo-0183x83.png'])?>" alt="Image" ></span>
                                    <div class="overlay-effect bg-color-2"></div>
                                    <div class="elm-link">
                                        <span class="icon-3"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="instagram_badge_image has-effect-icon">
                                <a href="#" target="_blank" class="data-effect-item">
                                    <span class="item"><img src="<?= Url::to(['../frontend/web/assets_tamplet/img/instagram/Secondary vertical logo-01383x83.png'])?>" alt="Image" ></span>
                                    <div class="overlay-effect bg-color-2"></div>
                                    <div class="elm-link">
                                        <span class="icon-3"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div><!-- /.widget_instagram -->
                </div>
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
