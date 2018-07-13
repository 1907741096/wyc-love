<?php

namespace app\common\models;
use app\common\mysql\MenuDao;

class MenuModel{

    public function selectAllMenu($status)
    {
        $where = ['=', 'status', $status];
        return MenuDao::find()
            ->where($where)
            ->all();
    }

    public function findMenuByMenuId($id)
    {
        return MenuDao::findOne($id);
    }
}