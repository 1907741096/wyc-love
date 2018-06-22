<?php

namespace modules\api\services;

use common\consts\Error;

class CommonService{

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
            'data'      => isset($data) ? $data : new ArrayObject(),
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
            'data'      => NULL !== $data ? $data : new ArrayObject(),
        ];

        return $return;
    }
}