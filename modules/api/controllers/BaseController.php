<?php

namespace app\modules\api\controllers;

use yii\web\Controller;
use yii\base\UserException;

class BaseController extends Controller
{
    public function init()
    {
        
    }
    
    public function actionTest()
    {
        throw new UserException(
            '请求banner不存在',
            40000
        );
        return '1';
    }
}
