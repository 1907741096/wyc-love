<?php

namespace app\common\mysql;

use app\common\mysql\BaseDao;

class ContentDao extends BaseDao{
    
    /**
     * 表名
     * @inheritdoc
     */
    public static function tableName()
    {
        return "{{%content}}";
    }
}