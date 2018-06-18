<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tbl_brands`.
 */
class m180615_191111_create_tbl_brands_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tbl_brands', [
            'brands_id' => $this->primaryKey(),
            'brands_name' => $this->string(70),
            'brands_image' => $this->string(255),
            'brands_descriptions' => $this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tbl_brands');
    }
}
