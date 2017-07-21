<?php

namespace frontend\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'revo-slider/css/settings-custom.css',
        'revo-slider/css/navigation-skins/hermes-custom.css',
        'css/bootstrap.min.css', 
        'css/icons-fonts.css',	
        'css/style.css',
        'css/animate.min.css',

    ];
    public $js = [
        'js/jquery.min.js',
        'js/bootstrap.min.js',
        'js/jquery.magnific-popup.min.js',
        'js/isotope.pkgd.min.js',
        'js/imagesloaded.pkgd.min.js',
        'js/masonry.pkgd.min.js',
        'js/jquery.countTo.js',
        'js/jquery.appear.js',
        'js/owl.carousel.min.js',
        'js/jquery.stellar.min.js',
        'js/main.js',
        'revo-slider/js/jquery.themepunch.tools.min.js',
        'revo-slider/slider.js',
        'revo-slider/js/jquery.themepunch.revolution.min.js',
        'revo-slider/js/extensions/revolution.extension.actions.min.js',
        'revo-slider/js/extensions/revolution.extension.carousel.min.js',
        'revo-slider/js/extensions/revolution.extension.kenburn.min.js',
        'revo-slider/js/extensions/revolution.extension.layeranimation.min.js',
        'revo-slider/js/extensions/revolution.extension.migration.min.js',
        'revo-slider/js/extensions/revolution.extension.navigation.min.js',
        'revo-slider/js/extensions/revolution.extension.parallax.min.js',
        'revo-slider/js/extensions/revolution.extension.slideanims.min.js',
        'revo-slider/js/extensions/revolution.extension.video.min.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
