<?php

    namespace app\modules\admin\models;
    use Yii;
    use yii\base\Model;
    use yii\behaviors\SluggableBehavior;

/**
 * Новости
 */
class NewsForm extends Model
{
    public $news_name;
    public $news_image;
    public $news_text;
    public $news_author;
    public $news_show;
    public $news_date;


    public $news_title;
    public $news_keywords;
    public $news_descriptions;

    public function behaviors ()
    {
        return [
            [
                'class' => SluggableBehavior::className(),
                'attribute' => 'news_name',
            ],
        ];
    }    
    
    public function rules()
    {
        return [
            [['news_name', 'news_image', 'news_date'], 'required'],
            [['news_show'], 'integer'],
            [['news_name', 'news_image'], 'string', 'max' => 100],
            [['news_text'], 'string', 'max' => 2000],
            [['news_author'], 'string', 'max' => 70],
            [['news_title', 'news_keywords'], 'string', 'max' => 100],
            [['news_descriptions'], 'string', 'max' => 255],
            [['news_date'], 'date', 'format' => 'php:Y-m-d'],
            [['brands_image'], 'image', 'maxWidth' => 510, 'maxHeight' => 470],
        ];
    }

    public function attributeLabels()
    {
        return [
            'news_name' => 'Заголовок новости',
            'news_slug' => 'Slug',
            'news_image' => 'Изображение',
            'news_text' => 'Текст новости',
            'news_author' => 'Автор',
            'news_date' => 'Дата',
            'news_show' => 'Статус',
            'news_title' => 'Titile (meta tag)',
            'news_keywords' => 'Keywords (meta tag)',
            'news_descriptions' => 'Description  (meta tag)', 
        ];
    }
}
