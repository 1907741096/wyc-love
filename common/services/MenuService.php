<?php

namespace app\common\services;

use app\common\models\MenuModel;

class MenuService{

    const OPEN_STATIC = 1;
    const CLOSE_STATIC = 0;

    /**
     * 获取全部菜单
     */
    public function getAllMenu()
    {
        $data = (new MenuModel())->selectAllMenu();
        return $data;
    }

    /**
     * 获取全部开启菜单
     */
    public function getAllOpenMenu()
    {
        $data = (new MenuModel())->selectAllMenu(self::OPEN_STATIC);
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