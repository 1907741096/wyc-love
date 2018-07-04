<?php

namespace app\common\models;
use app\common\mysql\ContentDao;

class MenuModel{

    public function selectAllContent()
    {
        return MenuDao::find()
            ->where($where)
            ->all();
    }

    public function findMenuByContentId($id)
    {
        return MenuDao::findOne($id);
    }
}