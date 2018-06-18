<?php

    namespace app\modules\admin\models;
    use Yii;
    use yii\behaviors\TimestampBehavior;
    use yii\behaviors\SluggableBehavior;
    use yii\db\ActiveRecord;
    use yii\db\Expression;

/**
 * Статьи (СОЕ)
 */
class Articles extends ActiveRecord
{
    
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['date_create', 'date_update'],
                    ActiveRecord::EVENT_BEFORE_UPDATE =>  ['date_create', 'date_update'],
                    'value' => function() { return date('U'); },
                ],
            ],
            [
                'class' => SluggableBehavior::className(),
                'attribute' => 'articles_name',
            ]
        ];
    }
    
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
            [['articles_name'], 'required'],
            [['date_create', 'date_update'], 'safe'],
            [['articles_show'], 'integer'],
            [['articles_name', 'articles_image'], 'string', 'max' => 100],
            [['articles_text'], 'string', 'max' => 10000],
            [['articles_author'], 'string', 'max' => 70],
            [['articles_title', 'articles_keywords'], 'string', 'max' => 100],
            [['articles_descriptions'], 'string', 'max' => 255],
            [['articles_date'], 'date', 'format' => 'php:Y-m-d'],
        ];
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if($insert)
                $this->date_create = date('Y-m-d H:i:s');
                $this->date_update = date('Y-m-d H:i:s');
            return true;
        } else {
            return false;            
        }        
    }        
    
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'articles_id' => 'Articles ID',
            'articles_name' => 'Заголовок статьи',
            'articles_image' => 'Изображение',
            'articles_text' => 'Текст статьи',
            'articles_author' => 'Автор',
            'date_create' => 'Articles Create',
            'date_update' => 'Articles Update',
            'articles_date' => 'Дата',
            'articles_show' => 'Статус',
            'articles_title' => 'Titile (meta tag)',
            'articles_keywords' => 'Keywords (meta tag)',
            'articles_descriptions' => 'Description  (meta tag)',
            'slug' => 'Идентификатор статьи',
        ];
    }
}
