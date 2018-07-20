<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use Yii;

class BaseController extends Controller
{
    public function init()
    {
        parent::init();
        $this->layout = 'iframe';
        // $this->checkLogin();
    }

    public function checkLogin()
    {
        $session = Yii::$app->session;
        if (!$session->has('admin')) {
            $this->redirect(array('/admin/login/index'));
        }
    }
}
