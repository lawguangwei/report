<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\BootAsset;
use app\assets\ReportAsset;

BootAsset::register($this);
ReportAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?=Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<section id="container">
    <header class="header white-bg">
        <div class="sidebar-toggle-box">
            <div data-placement="right" class="fa fa-bars tooltips"></div>
        </div>
        <a href="index.html" class="logo">
            Olive<span>Admin</span>
        </a>
        <div class="top-nav">
            <ul class="nav pull-right top-menu">
                <li>
                    <input type="text" class="form-control search" placeholder="Search">
                </li>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="img/avatar1_small.jpg">
                        <span class="username">Chris</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li class="log-arrow-up"></li>
                        <li>
                            <a href="#">
                                <i class="fa fa-suitcase"></i>
                                Profile
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-cog"></i>
                                Settings
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-bell-o"></i>
                                Notification
                            </a>
                        </li>
                        <li>
                            <a href="login.html">
                                <i class="fa fa-key"></i>
                                Log Out
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>
</section>
<?=$content?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
