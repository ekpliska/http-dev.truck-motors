<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tbl_users`.
 */
class m180617_103159_create_tbl_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tbl_users', [
            'users_id' => $this->primaryKey(),
            'users_name' => $this->string(30),
            'users_password' => $this->string(255),
            'users_authkey' => $this->string(255),
            'users_fullname' => $this->string(255),
            'users_image' => $this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tbl_users');
    }
}
