<?php

namespace common\mysql;

use common\mysql\BaseDao;

class MenuDao extends BaseDao{
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wyc_menu';
    }
}