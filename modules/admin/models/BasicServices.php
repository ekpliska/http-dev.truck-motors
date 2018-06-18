<?php

    namespace app\modules\admin\models;
    use yii\db\ActiveRecord;
    use yii\behaviors\SluggableBehavior;
    use Yii;

/**
 * Основные услуги
 */
class BasicServices extends ActiveRecord
{
    
    public function behaviors()
    {
        return [
            [
                'class' => SluggableBehavior::className(),
                'attribute' => 'basic_services_name',
            ]
        ];
    }    
    
    public static function tableName()
    {
        return 'tbl_basic_services';
    }

    public function rules()
    {
        return [
            [['basic_services_name'], 'string', 'max' => 255],
            [['basic_services_text'], 'string', 'max' => 10000],
            [['basic_services_preview'], 'string', 'max' => 255],
            [['basic_services_preview_h'], 'string', 'max' => 255],            
        ];
    }
    
    public function attributeLabels()
    {
        return [
            'basic_services_id' => 'Basic Services ID',
            'basic_services_name' => 'Название',
            'basic_services_text' => 'Описание',
            'basic_services_preview' => 'Изображение (Логотип)',
            'basic_services_preview_h' => 'Изображение (Логотип: hover)',
            'slug' => 'Уникальный идентификатор',
        ];
    }
}
