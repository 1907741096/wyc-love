<?php

namespace app\common\models;
use app\common\mysql\ContentDao;

class ContentModel{

    public function selectAllContent($status, $offset, $limit)
    {
        $where = ['=', 'status', $status];
        return ContentDao::find()
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