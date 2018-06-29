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
        $params = $this->getParam();
        $data = (new MenuService())->getMenu($params);
        return self::success($data);
    }

    /**
     * 获取所有菜单
     */
    public function actionAll()
    {
        $params = $this->getParam();
        $data = (new MenuService())->getMenu($params);
        return self::success($data);
    }
}