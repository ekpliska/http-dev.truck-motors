<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tbl_news`.
 */
class m180615_197000_create_tbl_articles_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tbl_articles', [
            'articles_id' => $this->primaryKey(),
            'articles_name' => $this->string(100),
            'articles_image' => $this->string(100),
            'articles_text' => $this->string(10000),
            'articles_author' => $this->string(70),
            'articles_create' => $this->timestamp(),
            'articles_update' => $this->timestamp(),
            'articles_date' => $this->date(),
            'articles_show' => $this->boolean(),
            'articles_title' => $this->string(100),
            'articles_keywords' => $this->string(100),
            'articles_descriptions' => $this->string(255),
            'slug' => $this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tbl_articles');
    }
}
