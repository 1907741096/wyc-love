<?php

namespace app\common\services;

use app\common\models\MenuModel;

class MenuService{

    const OPEN_STATIC = 1;
    const CLOSE_STATIC = 0;

    /**
     * 获取全部开启菜单
     */
    public function getAllMenu()
    {
        $where = [];
        $where['status'] = 1;
        $data = (new MenuModel())->selectAllMenu($where);
        return $data;
    }

    /**
     * 通过id获取菜单
     */
    public function getMenuById($menu_id)
    {
        $data = (new MenuModel())->findMenuByMenuId($menu_id);
        return $data;
    }
}