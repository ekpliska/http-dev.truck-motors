<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tbl_menu`.
 */
class m180615_190334_create_tbl_menu_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tbl_menu', [
            'menu_id' => $this->primaryKey(),
            'menu_name' => $this->string(70),
            'menu_parent' => $this->integer(),
            'menu_alias' => $this->string(30),
            'menu_titile' => $this->string(255),
            'menu_description' => $this->string(255),
            'menu_keywords' => $this->string(255),
            'menu_show' => $this->boolean(),
            'menu_footer' => $this->boolean(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tbl_menu');
    }
}
