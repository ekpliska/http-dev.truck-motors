<?php
    namespace app\models;
    use Yii;
    use yii\db\ActiveRecord;

/*
 * Статьи (Для СЕО)
 */    
class Articles extends ActiveRecord
{
    public static function tableName()
    {
        return 'tbl_articles';
    }

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

    public static function findSlug($slug) {
        return self::find()
                ->andWhere(['slug' => $slug]);
    }        
    
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
