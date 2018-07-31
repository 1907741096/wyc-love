<?php

namespace app\common\models;
use app\common\mysql\MenuDao;
use yii\data\Pagination;
use Yii;

class MenuModel{

    private $menuDb;
    private $menuCount;
    private $pager;

    public function __construct()
    {
        $this->menuDb = MenuDao::find();
        $this->menuCount = $this->menuDb->count();
        $this->pager = new Pagination(['totalCount' => $this->menuCount, 'pageSize' => Yii::$app->params['pageSize']]);
    }

    /**
     * 根据状态分页查询菜单
     */
    public function selectAllMenu($status = null, $offset = 0)
    {
        $where = [];
        if ($status != null) {
            $where = ['=', 'status', $status];
        }
        return $this->menuDb
            ->where($where)
            ->offset($this->pager->offset)
            ->orderBy('id desc')
            ->limit($this->pager->limit)
            ->all();
    }

    /**
     * 根据id查询菜单
     */
    public function findMenuByMenuId($id)
    {
        return MenuDao::findOne($id);
    }
}