<?php
/**
 * Created by PhpStorm.
 * User: luogw
 * Date: 2016-09-30
 * Time: 15:54
 */

namespace app\assets;


use yii\web\AssetBundle;

class MainAsset extends AssetBundle{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/main.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}