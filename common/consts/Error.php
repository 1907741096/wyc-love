<?php

namespace common\consts;

/**
 * 错误定义类
 */

class Error
{
    const NO_ERROR                                      =   0; //正确，无异常
    const FAIL                                          =   1; //失败
    const SYSTEM_ERROR                                  =   -1; //系统异常
    const ERROR                                         =   -2; //接口异常
    const DATA_EMPTY                                    =   -3; //接口数据为空
    const ERROR_API_ENV                                 =   -4; //API环境关闭
    const ERROR_SAVE                                    =   1000;  //保存错误
    const ERROR_PARAMS                                  =   10000; //参数错误

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
