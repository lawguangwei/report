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

class MainController extends Controller{
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
    public function actionIndex()
    {
        echo 'index';
    }
    public function actionCreateAdmin(){
        $account = 'luogw';
        $password = '123456';
        $name = 'luogw';

        $service = new AdminService();
        $result = $service->createAdmin($account,$name,$password);
        if($result == '0'){
            echo 'success';
        }else{
            echo print_r($result);
        }
    }

    public function actionLogin(){
        $this->layout = 'login';
        return $this->render('login');
    }
}