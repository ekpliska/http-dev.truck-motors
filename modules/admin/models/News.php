<?php

    namespace app\modules\admin\models;
    use Yii;
    use yii\behaviors\TimestampBehavior;
    use yii\behaviors\SluggableBehavior;
    use yii\db\ActiveRecord;
    use yii\db\Expression;
    

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
class News extends ActiveRecord
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
                    'attribute' => 'news_name',
                ]
            ];
        }
	
    
    
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
            [['news_text'], 'string', 'max' => 10000],
            [['news_author'], 'string', 'max' => 70],
            [['news_title', 'news_keywords'], 'string', 'max' => 100],
            [['news_descriptions'], 'string', 'max' => 255],
            [['news_date'], 'date', 'format' => 'php:Y-m-d'],
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
            'news_id' => 'News ID',
            'news_name' => 'Заголовок новости',
            'news_image' => 'Изображение',
            'news_text' => 'Текст новости',
            'news_author' => 'Автор',
            'date_create' => 'Дата создания',
            'date_update' => 'Дата редактирования',
            'news_date' => 'Дата',
            'news_show' => 'Статус',
            'news_title' => 'Titile (meta tag)',
            'news_keywords' => 'Keywords (meta tag)',
            'news_descriptions' => 'Description  (meta tag)',            
        ];
    }
}
