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

    /**
     * 获取参数
     * 兼容get,post并且默认去除字符串中的空格
     * @param $key
     * @param string $default 默认值
     * @param bool $trim 默认去除左右空格，true:去除所有空格
     * @return array|mixed
     */
    protected function getParam($key, $default = '', $trim = false)
    {
        $value = Yii::$app->request->get($key);
        if (!isset($value)) {
            $value = Yii::$app->request->post($key, $default);
        }
        if (is_string($value)) {
            if ($trim) {
                $value = str_replace(' ', '', $value);
            } else {
                $value = trim($value);
            }
        }
        return $value;
    }
}
