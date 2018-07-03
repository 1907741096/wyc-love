<?php


namespace common\mysql;

use Yii;
use yii\db\ActiveRecord;
use yii\db\QueryTrait;
use yii\helpers\Inflector;
use yii\helpers\StringHelper;

class BaseDao extends ActiveRecord
{
    use QueryTrait;

    private $_asArray = false;

    private $_field = null;

    public function __construct(array $config = [])
    {
        parent::__construct($config);
        $this->where = [];
    }

    /**
     * 是否返回数组
     * @param $asArray
     * @return BaseDao
     */
    public function setAsArray($asArray)
    {
        $this->_asArray = $asArray;
        return $this;
    }

    /**
     * 设置查询字段
     * @param $field
     * @return BaseDao
     */
    public function setField($field)
    {
        $this->_field = $field;
        return $this;
    }

    /**
     * 获取数据库
     * @return \yii\db\Connection
     */
    public static function getDb()
    {
        return Yii::$app->getDb();
    }

    /**
     * 获取表名
     * @return string the table name
     */
    public static function tableName()
    {
        $className = str_replace('Dao', '', StringHelper::basename(get_called_class()));
        return '{{%' . Inflector::camel2id($className, '_') . '}}';
    }

    /**
     * 分页查询
     * @return array
     */
    public function getList()
    {
        $query = $this->find()
            ->andFilterWhere($this->where)
            ->orderBy($this->orderBy)
            ->offset($this->offset)
            ->limit($this->limit);

        if ($this->_field) {
            $query->select($this->_field);
        }

        if ($this->_asArray) {
            $query->asArray();
        }

        $list = $query->all();
        $count = (int)$query->count();

        return [$list, $count];
    }
}