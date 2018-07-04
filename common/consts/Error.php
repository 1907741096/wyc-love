<?php

namespace app\common\consts;

/**
 * 错误定义类
 */

class Error
{
    const NO_ERROR                                      =   0; //正确，无异常
    const FAIL                                          =   1; //失败

    public static $msg = [
        self::NO_ERROR                                  =>  '成功',
        self::FAIL                                      =>  '失败',
    ];

    /**
     * 根据定义的错误码来显示错误消息，支持sprintf来渲染参数
     *
     * @param int $code
     * @return string
     */
    public static function msg($code)
    {
        $msg = '系统正忙，请稍后重试';
        if (isset(self::$msg[$code])) {
            $msg = self::$msg[$code];
            $num = func_num_args();
            if ($num > 1) {
                $msg = vsprintf($msg, array_slice(func_get_args(), 1));
            }
        }
        return $msg;
    }
}
