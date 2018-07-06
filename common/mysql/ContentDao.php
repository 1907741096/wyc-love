<?php

namespace app\common\mysql;

use app\common\mysql\BaseDao;

class ContentDao extends BaseDao{
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return "{{%content}}";
    }
}