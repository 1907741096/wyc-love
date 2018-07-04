<?php

namespace app\common\mysql;

use app\common\mysql\BaseDao;

class MenuDao extends BaseDao{
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return "{{%menu}}";
    }
}