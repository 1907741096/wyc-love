<?php

namespace app\common\models;
use app\common\mysql\MenuDao;

class MenuModel{

    public function selectAllMenu($where)
    {
        return MenuDao::find()
            ->where($where)
            ->all();
    }

    public function findMenuByMenuId($id)
    {
        return MenuDao::findOne($id);
    }
}