<?php

namespace app\modules\api\controllers;

use yii\web\Controller;
use yii\base\UserException;
use app\common\consts\Error;
use Yii;

class BaseController extends Controller
{
    
    protected $headers = [];

    public function init()
    {
        
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

    /**
     * 获取HTTP头
     *
     * @param $key
     * @param $default
     * @param $first
     * @param bool $trim
     * @return array|string
     */
    protected function getHeader($key, $default = null, $first = true, $trim = true)
    {
        if (!empty($this->headers[$key])) {
            return $this->headers[$key];
        }

        $value = Yii::$app->request->headers->get($key, $default, $first);
        $value = $trim ? trim($value) : $value;
        $this->headers[$key] = $value;
        return $value;
    }

    /**
     * 返回成功
     * @param null $data  $data请保持object，不要使用数组
     * @param string $message 尽量不要自定义，使用code映射最好
     * @return array
     */
    public static function success($data = NULL, $message = NULL)
    {
        $return = [
            'code'      => Error::NO_ERROR,
            'message'   => isset($message) ? $message : Error::$msg[Error::NO_ERROR],
            'data'      => isset($data) ? $data : [],
        ];

        return $return;
    }

    /**
     * 返回失败
     * @param int $code
     * @param null $data
     * @param null $message
     * @return array
     */
    public static function fail($code = Error::ERROR_SYSTEM_ERROR, $data = NULL, $message = NULL, $meta = NULL)
    {
        $return = [
            'code'      => $code,
            'message'   => NULL !== $message ? $message : Error::$msg[$code],
            'data'      => NULL !== $data ? $data : [],
        ];

        return $return;
    }

}
