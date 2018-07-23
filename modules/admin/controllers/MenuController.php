<?php

namespace app\modules\admin\controllers;

use app\common\services\MenuService;

class MenuController extends BaseController
{
    public function actionIndex()
    {
        $menus = (new MenuService())->getAllMenu();
        return $this->render('index' ,['menus' => $menus]);
    }
}
