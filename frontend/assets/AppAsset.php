<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'css/site.css',
//        'web/assets_tamplet/css/colors/color2.css',
//        'web/assets_tamplet/css/colors/color3.css',
//        'web/assets_tamplet/css/colors/color4.css',
//        'web/assets_tamplet/css/animsition.css',
        'web/assets_tamplet/css/font-awesome.css',
        'web/assets_tamplet/css/font-etline.css',
        'web/assets_tamplet/css/shortcodes.css',
        'web/assets_tamplet/css/autora-icons.css',
        'web/assets_tamplet/css/ionicons.css',
        'web/assets_tamplet/css/owl.carousel.css',
        'web/assets_tamplet/css/woocommerce.css',
        'web/assets_tamplet/css/bootstrap.css',
        'web/includes/rev-slider/css/layers.css',
        'web/includes/rev-slider/css/navigation.css',
        'web/includes/rev-slider/css/settings.css',
        'web/assets_tamplet/css/colors/color1.css',
        'web/assets_tamplet/css/animate.css',
        'web/css/style.css',
    ];
    public $js = [
        'web/assets_tamplet/js/jquery.min.js',
        'web/assets_tamplet/js/plugins.js',
        'web/assets_tamplet/js/tether.min.js',
        'web/assets_tamplet/js/bootstrap.min.js',
        'web/assets_tamplet/js/animsition.js',
        'web/assets_tamplet/js/owl.carousel.min.js',
        'web/assets_tamplet/js/countto.js',
        'web/assets_tamplet/js/equalize.min.js',
        'web/assets_tamplet/js/jquery.isotope.min.js',
        'web/assets_tamplet/js/owl.carousel2.thumbs.js',
        'web/assets_tamplet/js/jquery.cookie.js',
        'web/assets_tamplet/js/gmap3.min.js',
        'web/assets_tamplet/js/shortcodes.js',
        'web/assets_tamplet/js/main.js',
        'web/includes/rev-slider/js/jquery.themepunch.tools.min.js',
        'web/includes/rev-slider/js/jquery.themepunch.revolution.min.js',
        'web/assets_tamplet/js/rev-slider.js',
        'web/includes/rev-slider/js/extensions/revolution.extension.actions.min.js',
        'web/includes/rev-slider/js/extensions/revolution.extension.carousel.min.js',
        'web/includes/rev-slider/js/extensions/revolution.extension.kenburn.min.js',
        'web/includes/rev-slider/js/extensions/revolution.extension.layeranimation.min.js',
        'web/includes/rev-slider/js/extensions/revolution.extension.migration.min.js',
        'web/includes/rev-slider/js/extensions/revolution.extension.navigation.min.js',
        'web/includes/rev-slider/js/extensions/revolution.extension.parallax.min.js',
        'web/includes/rev-slider/js/extensions/revolution.extension.slideanims.min.js',
        'web/includes/rev-slider/js/extensions/revolution.extension.video.min.js',
        'web/assets_tamplet/js/jquery.gomap-1.3.2.min.js',
        'web/assets_tamplet/js/jquery.hoverdir.js',
        'web/assets_tamplet/js/jquery-validate.js',
//        'web/assets_tamplet/js/switcher.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap4\BootstrapAsset',
    ];
}
