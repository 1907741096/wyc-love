<?php

namespace app\common\services;

use app\common\models\ContentModel;

class ContentService{

    const OPEN_STATIC = 1;
    const CLOSE_STATIC = 0;

    /**
     * 根据id获取内容
     */
    public function getContent($menu_id, $offset, $limit)
    {
        $where = [];
        $where['status'] = self::CLOSE_STATIC;
        $data = (new ContentModel())->selectAllContent($where, $offset, $limit);
        return $data;
    }

    /**
     * 通过id获取菜单
     */
    public function getContentById($content_id)
    {
        $data = (new ContentModel())->selectContentByContentId($content_id);
        return $data;
    }
}