<?php

namespace app\common\mysql;

use app\common\mysql\BaseDao;
use yii\db\ActiveRecord;

class ContentDao extends ActiveRecord
{    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return "{{%content}}";
    }
}