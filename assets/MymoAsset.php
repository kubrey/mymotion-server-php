<?php
/**
 * Created by PhpStorm.
 * User: kubrey
 * Date: 02.02.16
 * Time: 15:30
 */

namespace app\assets;


use yii\web\AssetBundle;

class MymoAsset extends AssetBundle{

    public $basePath = '@bower';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        ''
    ];
    public $js = [
        'yii\bower\punycode/punycode.js'
    ];
//    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapPluginAsset',
//    ];
}