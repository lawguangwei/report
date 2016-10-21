<?php
/**
 * Created by PhpStorm.
 * User: luogw
 * Date: 2016-09-30
 * Time: 14:56
 */
namespace app\services;
use app\models\lgwdb\Admin;

class AdminService{
    public function createAdmin($account,$name,$password){
        $admin = new Admin();

        $id=md5($account.date('Y-m-d H:i:s'));
        $admin->id=$id;
        $admin->account = $account;
        $admin->password = md5($password);
        $admin->name = $name;
        $admin->create_date = date('Y-m-d H:i:s');
        $admin->state = '0';

        if($admin->save()){
            return '0';
        }else{
            $errors = $admin->getErrors();
            return $errors;
        }
    }
}