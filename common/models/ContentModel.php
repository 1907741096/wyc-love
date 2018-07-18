<?php

namespace app\common\models;
use app\common\mysql\ContentDao;

class ContentModel{

    public function selectAllContent($menu_id, $status, $offset, $limit)
    {
        $where = [
            'and',
            ['=', 'menu_id', $menu_id],
            ['=', 'status', $status]
        ];
        return ContentDao::find()
            ->with('menus')
            ->where($where)
            ->limit($limit)
            ->offset($offset)
            ->all();
    }

    public function selectContentByContentId($id)
    {
        return ContentDao::findOne($id);
    }
}