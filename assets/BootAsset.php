<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class BootAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'asset/bootstrap/css/bootstrap.min..css',
        'asset/bootstrap/css/bootstrap-reset.css',
        'assets\font-awesome\css\font-awesome.css'
    ];
    public $js = [
        'asset/bootstrap/js/jquery-1.8.3.min.js',
        'asset/bootstrap/js/bootstrap.min.js'
    ];
    public $depends = [
    ];
}
