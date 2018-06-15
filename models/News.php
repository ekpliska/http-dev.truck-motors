<?php

    namespace app\models;
    use Yii;

/**
 * This is the model class for table "tbl_news".
 *
 * @property int $news_id
 * @property string $news_name
 * @property string $news_slug
 * @property string $news_image
 * @property string $news_text
 * @property string $news_author
 * @property string $date_create
 * @property string $date_update
 * @property int $news_show
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['news_name'], 'required'],
            [['date_create', 'date_update'], 'safe'],
            [['news_show'], 'integer'],
            [['news_name', 'news_image'], 'string', 'max' => 100],
            [['news_slug'], 'string', 'max' => 255],
            [['news_text'], 'string', 'max' => 2000],
            [['news_author'], 'string', 'max' => 70],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'news_id' => 'News ID',
            'news_name' => 'News Name',
            'news_slug' => 'News Slug',
            'news_image' => 'News Image',
            'news_text' => 'News Text',
            'news_author' => 'News Author',
            'date_create' => 'Date Create',
            'date_update' => 'Date Update',
            'news_show' => 'News Show',
        ];
    }
}
