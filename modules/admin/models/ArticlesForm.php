<?php

    namespace app\modules\admin\models;
    use Yii;
    use yii\base\Model;
    use yii\behaviors\SluggableBehavior;

/**
 * Статьи
 */    
class ArticlesForm extends Model
{

    public $articles_name;
    public $articles_image;
    public $articles_text;
    public $articles_author;
    public $articles_show;
    public $articles_date;


    public $articles_title;
    public $articles_keywords;
    public $articles_descriptions;

    public function behaviors ()
    {
        return [
            [
                'class' => SluggableBehavior::className(),
                'attribute' => 'articles_name',
            ],
        ];
    }    

    
    public function rules()
    {
        return [
            [['articles_name', 'articles_image', 'articles_date'], 'required'],
            [['articles_show'], 'integer'],
            [['articles_name', 'articles_image'], 'string', 'max' => 100],
            [['articles_text'], 'string', 'max' => 10000],
            [['articles_author'], 'string', 'max' => 70],
            [['articles_title', 'articles_keywords'], 'string', 'max' => 100],
            [['articles_descriptions'], 'string', 'max' => 255],
            [['articles_date'], 'date', 'format' => 'php:Y-m-d'],
            [['articles_image'], 'image', 'maxWidth' => 510, 'maxHeight' => 470],
            [['articles_image'], 'file', 'extensions' => 'png, jpg, jpeg'],            
        ];
    }

    public function attributeLabels()
    {
        return [
            'articles_id' => 'Articles ID',
            'articles_name' => 'Заголовок статьи',
            'articles_image' => 'Изображение',
            'articles_text' => 'Текст статьи',
            'articles_author' => 'Автор',
            'articles_create' => 'Articles Create',
            'articles_update' => 'Articles Update',
            'articles_date' => 'Дата',
            'articles_show' => 'Статус',
            'articles_title' => 'Titile (meta tag)',
            'articles_keywords' => 'Keywords (meta tag)',
            'articles_descriptions' => 'Description  (meta tag)',
            'slug' => 'Идентификатор статьи',
        ];
    }
}
