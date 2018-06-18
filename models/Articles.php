<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_articles".
 *
 * @property int $articles_id
 * @property string $articles_name
 * @property string $articles_image
 * @property string $articles_text
 * @property string $articles_author
 * @property string $articles_create
 * @property string $articles_update
 * @property string $articles_date
 * @property int $articles_show
 * @property string $articles_title
 * @property string $articles_keywords
 * @property string $articles_descriptions
 * @property string $slug
 */
class Articles extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_articles';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['articles_create', 'articles_update', 'articles_date'], 'safe'],
            [['articles_show'], 'integer'],
            [['articles_name', 'articles_image', 'articles_title', 'articles_keywords'], 'string', 'max' => 100],
            [['articles_text'], 'string', 'max' => 10000],
            [['articles_author'], 'string', 'max' => 70],
            [['articles_descriptions', 'slug'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'articles_id' => 'Articles ID',
            'articles_name' => 'Articles Name',
            'articles_image' => 'Articles Image',
            'articles_text' => 'Articles Text',
            'articles_author' => 'Articles Author',
            'articles_create' => 'Articles Create',
            'articles_update' => 'Articles Update',
            'articles_date' => 'Articles Date',
            'articles_show' => 'Articles Show',
            'articles_title' => 'Articles Title',
            'articles_keywords' => 'Articles Keywords',
            'articles_descriptions' => 'Articles Descriptions',
            'slug' => 'Slug',
        ];
    }
}
