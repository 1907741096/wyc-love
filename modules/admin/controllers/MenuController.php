<?php

namespace app\modules\admin\controllers;

use app\common\services\MenuService;

class MenuController extends BaseController
{
    public function actionIndex()
    {
        $name = $this->getParam('name');
        $offset = $this->getParam('$offset');
        $data = (new MenuService())->getAllMenu($name, $offset);
        return $this->render('index' ,['data' => $data]);
    }
}
