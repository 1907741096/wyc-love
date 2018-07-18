<?php

namespace app\common\mysql;

use app\common\mysql\MenuDao;
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

    public function getMenus()
    {
        return $this->hasOne(MenuDao::className(), ['id' => 'menu_id']);
    }
}