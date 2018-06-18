<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tbl_photo_services`.
 */
class m180618_090050_create_tbl_photo_services_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tbl_photo_services', [
            'photo_services_id' => $this->primaryKey(),
            'photo_services_id_name' => $this->integer(),
            'photo_services_path' => $this->string(1000),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tbl_photo_services');
    }
}
