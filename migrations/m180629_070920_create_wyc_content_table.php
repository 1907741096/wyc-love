<?php

use yii\db\Migration;

/**
 * Handles the creation of table `wyc_content`.
 */
class m180629_070920_create_wyc_content_table extends Migration
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
        $this->createTable('wyc_content', [
            'id' => $this->primaryKey()->comment('主键id'),
            'menu_id' => $this->Integer()->notNull()->comment('菜单id'),
            'name' => $this->string(64)->comment('内容名称'),
            'address' => $this->string(64)->comment('内容地址'),
            'see' => $this->Integer()->notNull()->defaultValue(0)->comment('查看数'),
            'good' => $this->Integer()->notNull()->defaultValue(0)->comment('点赞数'),
            'orderlist' => $this->Integer()->notNull()->defaultValue(0)->comment('内容排序'),
            'status' => $this->smallInteger()->notNull()->defaultValue(0)->comment('内容状态'),
            'create_at' => $this->dateTime()->notNull()->defaultValue("1000-01-01 00:00:00")->comment('内容创建时间'),
            'update_at' => $this->dateTime()->notNull()->defaultValue('1000-01-01 00:00:00')->append('ON UPDATE CURRENT_TIMESTAMP')->comment('内容更新时间')
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('wyc_content');
    }
}
