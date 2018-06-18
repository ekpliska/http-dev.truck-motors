<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tbl_news`.
 */
class m180615_195000_create_tbl_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tbl_news', [
            'news_id' => $this->primaryKey(),
            'news_name' => $this->string(100),
            'news_image' => $this->string(100),
            'news_text' => $this->string(2000),
            'news_author' => $this->string(70),
            'date_create' => $this->timestamp(),
            'date_update' => $this->timestamp(),
            'news_date' => $this->date(),
            'news_show' => $this->boolean(),
            'news_title' => $this->string(100),
            'news_keywords' => $this->string(100),
            'news_descriptions' => $this->string(255),
            'slug' => $this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tbl_news');
    }
}
