<?php
/**
 * Created by PhpStorm.
 * User: luogw
 * Date: 2016-09-30
 * Time: 15:54
 */

namespace app\assets;


use yii\web\AssetBundle;

class LoginAsset extends AssetBundle{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'asset/login/reset.css',
        'asset/login/style.css',
        'asset/login/supersized.css',
    ];
    public $js = [
        'asset/login/jquery-1.8.2.min.js',
        'asset/login/scripts.js',
        'asset/login/supersized.3.2.7.min.js',
        'asset/login/supersized-init.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}