<?php
/**
 * Created by PhpStorm.
 * User: luogw
 * Date: 2016-09-29
 * Time: 11:07
 */

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\services\AdminService;

class ReportController extends Controller{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }
    public function actionIndex(){
        $this->layout = 'report_main';
        return $this->render('index');
    }

}