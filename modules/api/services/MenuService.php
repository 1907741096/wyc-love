<?php

namespace modules\api\services;

use common\models\MenuModel;

class MenuService extends CommonService{

    /**
     * 获取菜单数据
     */
    public function getMenu($menu_id)
    {
        $data = (new MenuModel())->selectMenuByMenuId();
        return $data;
    }
}