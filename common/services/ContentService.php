<?php

namespace app\common\services;

use app\common\models\ContentModel;

class ContentService{

    /**
     * 根据id获取内容
     */
    public function getContent($menu_id, $offset, $limit)
    {
        $where = [];
        $where['status'] = 1;
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