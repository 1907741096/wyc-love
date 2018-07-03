<?php

namespace common\models;
use common\mysql\MenuDao;

class MenuModel{

    public function selectMenuByMenuId()
    {
        return MenuDao::find()
            ->where()
            ->all();
    }
}