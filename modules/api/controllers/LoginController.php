<?php

namespace app\modules\api\controllers;

use yii\web\Controller;
use modules\api\services\CommonService;
use modules\api\services\LoginService;
use common\consts\Error;

class DefaultController extends Controller
{
    /**
     * 注册接口
     */
    public function register()
    {
        
    }

    /**
     * 登陆接口
     */
    public function login()
    {
        $data = (new LoginService())->login();
        return CommonService::success($data);
    }
}
