<?php

use yii\db\Migration;

/**
 * Handles the creation of table `wyc_user`.
 */
class m180629_070828_create_wyc_user_table extends Migration
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
        $this->createTable('wyc_user', [
            'id' => $this->primaryKey()->comment('主键id'),
            'username' => $this->string(64)->comment('用户账号'),
            'password' => $this->string()->comment('用户密码'),
            'openid' => $this->string()->notNull()->comment('用户openid'),
            'phone' => $this->string()->notNull()->unique()->comment('用户手机号'),
            'status' => $this->smallInteger()->notNull()->defaultValue(0)->comment('用户状态'),
            'create_at' => $this->dateTime()->notNull()->defaultValue("1000-01-01 00:00:00")->comment('用户创建时间'),
            'last_login_at' => $this->dateTime()->notNull()->defaultValue("1000-01-01 00:00:00")->comment('用户最后登陆时间'),
            'update_at' => $this->dateTime()->notNull()->defaultValue('1000-01-01 00:00:00')->append('ON UPDATE CURRENT_TIMESTAMP')->comment('用户更新时间')
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('wyc_user');
    }
}
