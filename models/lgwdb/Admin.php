<?php
/**
 * Created by PhpStorm.
 * User: luogw
 * Date: 2016-09-30
 * Time: 14:41
 */
namespace app\models\lgwdb;

use yii\db\ActiveRecord;

class Admin extends ActiveRecord
{
    private $id;
    private $account;
    private $password;
    private $name;
    private $create_date;
    private $state;
    /**
     * @return string 返回该AR类关联的数据表名
     */
    public static function tableName()
    {
        return 'admin';
    }
}