<?php

namespace app\modules\admin\controllers;

use app\common\services\MenuService;

class MenuController extends BaseController
{
    public function actionIndex()
    {
        $name = $this->getParam();
        $offset = $this->
        $data = (new MenuService())->getAllMenu();
        return $this->render('index' ,['data' => $data]);
    }
}
