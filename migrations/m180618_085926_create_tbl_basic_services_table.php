<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tbl_basic_services`.
 */
class m180618_085926_create_tbl_basic_services_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tbl_basic_services', [
            'basic_services_id' => $this->primaryKey(),
            'basic_services_name' => $this->string(255),
            'basic_services_text' => $this->string(10000),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tbl_basic_services');
    }
}
