<?php

use yii\db\Migration;

/**
 * Handles the creation of table `wyc_admin`.
 */
class m180621_023107_create_wyc_admin_table extends Migration
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
        $this->createTable('wyc_admin', [
            'id' => $this->primaryKey()->comment('主键id'),
            'username' => $this->string(64)->notNull()->comment('管理员账号'),
            'password' => $this->string()->notNull()->comment('管理员密码'),
            'email' => $this->string()->notNull()->unique()->comment('管理员邮箱'),
            'status' => $this->smallInteger()->notNull()->defaultValue(0)->comment('管理员状态'),
            'create_at' => $this->dateTime()->notNull()->defaultValue("1000-01-01 00:00:00")->comment('管理员创建时间'),
            'last_login_at' => $this->dateTime()->notNull()->defaultValue("1000-01-01 00:00:00")->comment('管理员最后登陆时间'),
            'update_at' => $this->dateTime()->notNull()->defaultValue('1000-01-01 00:00:00')->append('ON UPDATE CURRENT_TIMESTAMP')->comment('管理员更新时间')
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('wyc_admin');
    }
}
