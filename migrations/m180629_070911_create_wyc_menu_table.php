<?php

use yii\db\Migration;

/**
 * Handles the creation of table `wyc_menu`.
 */
class m180629_070911_create_wyc_menu_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('wyc_menu', [
            'id' => $this->primaryKey()->comment('主键id'),
            'name' => $this->string(64)->comment('菜单名称'),
            'orderlist' => $this->Integer()->notNull()->defaultValue(0)->comment('菜单排序'),
            'status' => $this->smallInteger()->notNull()->defaultValue(0)->comment('菜单状态'),
            'create_at' => $this->dateTime()->notNull()->defaultValue("1000-01-01 00:00:00")->comment('菜单创建时间'),
            'update_at' => $this->dateTime()->notNull()->defaultValue('1000-01-01 00:00:00')->append('ON UPDATE CURRENT_TIMESTAMP')->comment('菜单更新时间')
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('wyc_menu');
    }
}
