<?php

namespace app\common\models;
use app\common\mysql\ContentDao;

class ContentModel{

    public function selectAllContent($where, $offset, $limit)
    {
        return ContentDao::find()
            ->where($where)
            ->limit($limit)
            ->offset($offset)
            ->all();
    }

    public function findContentByContentId($id)
    {
        return ContentDao::findOne($id);
    }
}