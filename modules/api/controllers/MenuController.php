<?php

namespace app\modules\api\controllers;

use app\common\services\MenuService;

class MenuController extends BaseController
{
    /**
     * 根据id获取菜单
     */
    public function actionFind()
    {
        $menu_id = $this->getparams('menu_id');
        $data = (new MenuService())->getMenuById($menu_id);
        return self::success($data);
    }

    /**
     * 获取所有菜单
     */
    public function actionAll()
    {
        $data = (new MenuService())->getAllMenu();
        return self::success($data);
    }
}