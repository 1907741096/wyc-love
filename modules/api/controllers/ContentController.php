<?php

namespace app\modules\api\controllers;

use app\common\services\ContentService;

class ContentController extends BaseController
{
    /**
     * 根据菜单id及分页获取内容一天
     */
    public function actionGetContent()
    {
        $menu_id = $this->getParam('menu_id');
        $offset = $this->getParam('offset');
        $limit = $this->getParam('limit');
        $data = (new ContentService())->getContent($menu_id, $offset, $limit);
        return self::success($data);
    }

    
    /**
     * 根据内容id获取具体内容
     */
    public function actionFind()
    {
        $content_id = $this->getParam('content_id');
        $data = (new ContentService())->getContentById($content_id);
        return self::success($data);
    }
}