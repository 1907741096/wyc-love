<?php

namespace app\modules\api\controllers;

use app\common\services\ContentService;

class ContentController extends BaseController
{
    /**
     * 根据菜单id及分页获取内容
     */
    public function actionGetContent()
    {
        $menu_id = $this->getparams('menu_id');
        $offset = $this->getparams('offset');
        $limit = $this->getparams('limit');
        $data = (new ContentService())->getContent($menu_id, $offset, $limit);
        return self::success($data);
    }
}