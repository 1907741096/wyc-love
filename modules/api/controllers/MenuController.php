<?php

namespace app\modules\api\controllers;

use yii\web\Controller;
use modules\api\services\MenuService;

class MenuController extends BaseController
{
    /**
     * 根据id获取菜单
     */
    public function actionFind()
    {
        $params = $this->getParam('menu_id');
        $data = (new MenuService())->getMenu($params);
        return self::success($data);
    }

    /**
     * 获取所有菜单
     */
    public function actionAll()
    {
        $data = (new MenuService())->getMenu($params);
        return self::success($data);
    }
}