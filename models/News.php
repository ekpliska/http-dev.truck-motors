<?php

    namespace app\models;
    use Yii;
    use yii\db\ActiveRecord;

/*
 * Новости
 */    
    
class News extends ActiveRecord
{
    
    public static function tableName()
    {
        return 'tbl_news';
    }

    public function rules()
    {
        return [
            [['news_name'], 'required'],
            [['date_create', 'date_update'], 'safe'],
            [['news_show'], 'integer'],
            [['news_name', 'news_image'], 'string', 'max' => 100],
            [['news_text'], 'string', 'max' => 2000],
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
    
    public static function findSlug($slug) {
        return self::find()
                ->andWhere(['slug' => $slug]);
    }    
    
}
