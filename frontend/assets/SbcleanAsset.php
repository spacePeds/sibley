<?php
namespace app\assets;

use yii\web\AssetBundle;

/**
 * Test theme asset bundle.
 * https://startbootstrap.com/template-overviews/clean-blog/
 */
class SbcleanAsset extends AssetBundle {
    public $sourcePath = __DIR__ . '/../../themes/sb-clean-blog';
    public $css = [
        'vendor/font-awesome/css/font-awesome.min.css',
        '//fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic',
        '//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800',
        'css/clean-blog.min.css'
    ];
    public $js = [
        'js/clean-blog.min.js'
    ];
    public $depends = [
        'app\assets\AppAsset',
    ];
}