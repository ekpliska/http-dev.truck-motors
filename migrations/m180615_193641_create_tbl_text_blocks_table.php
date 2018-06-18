<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tbl_text_blocks`.
 */
class m180615_193641_create_tbl_text_blocks_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tbl_text_blocks', [
            'text_blocks_id' => $this->primaryKey(),
            'text_blocks_text' => $this->string(700),
            'text_blocks_name' => $this->string(70),
            'text_block_alias' => $this->string(45),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tbl_text_blocks_ind');
    }
}
