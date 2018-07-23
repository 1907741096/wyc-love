<?php

namespace app\modules\admin\controllers;

class DefaultController extends BaseController
{
    public function actionIndex()
    {
        $this->layout = 'main';
        return $this->render('index');
    }

    public function actionMain()
    {
        return $this->render('index');
    }
}
