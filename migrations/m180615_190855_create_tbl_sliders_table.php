<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tbl_sliders`.
 */
class m180615_190855_create_tbl_sliders_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tbl_sliders', [
            'sliders_id' => $this->primaryKey(),
            'sliders_image' => $this->string(100),
            'sliders_title' => $this->string(255),
            'sliders_text' => $this->string(100),
            'sliders_name' => $this->string(70),
            'sliders_show' => $this->boolean(),
            'sliders_adverts' => $this->boolean(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tbl_sliders');
    }
}
