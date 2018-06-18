<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tbl_records_ind`.
 */
class m180615_192407_create_tbl_records_ind_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tbl_records_ind', [
            'records_ind_id' => $this->primaryKey(),
            'records_townId' => $this->integer(),
            'records_fullName' => $this->string(100),
            'records_phone' => $this->string(50),
            'records_mark' => $this->string(30),
            'records_model' => $this->string(30),
            'records_year' => $this->string(10),
            'records_number' => $this->string(30),
            'records_comments' => $this->string(255),
            'records_date' => $this->date(),
            'records_time' => $this->time(),
            'records_check' => $this->boolean(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tbl_records_ind');
    }
}
