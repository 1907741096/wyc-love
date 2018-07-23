<?php

namespace app\common\models;
use app\common\mysql\MenuDao;

class MenuModel{

    /**
     * 根据状态查询菜单
     */
    public function selectAllMenu($status = null)
    {
        $where = [];
        if ($status != null) {
            $where = ['=', 'status', $status];
        }
        return MenuDao::find()
            ->where($where)
            ->all();
    }

    /**
     * 根据id查询菜单
     */
    public function findMenuByMenuId($id)
    {
        return MenuDao::findOne($id);
    }
}