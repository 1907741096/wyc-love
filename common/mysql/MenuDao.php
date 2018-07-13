<?php

namespace app\common\mysql;

use app\common\mysql\BaseDao;
use yii\db\ActiveRecord;

class MenuDao extends ActiveRecord 
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return "{{%menu}}";
    }
}