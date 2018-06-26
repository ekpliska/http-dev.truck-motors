<?php

    namespace app\modules\admin\models;
    use Yii;
    use yii\base\Model;
    use yii\behaviors\SluggableBehavior;

/**
 * Основные услуги - модель формы
 */
class BasicServicesForm extends Model
{
    public $basic_services_name;
    public $basic_services_text;
    public $basic_services_preview;
    public $basic_services_preview_h;


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
            [['basic_services_name', 'basic_services_text', 'basic_services_preview', 'basic_services_preview_h'], 'required'],
            [['basic_services_name'], 'string', 'max' => 255],
            [['basic_services_text'], 'string', 'max' => 10000],
            [['basic_services_preview'], 'string', 'max' => 255],
            [['basic_services_preview'], 'image', 'maxWidth' => 243, 'maxHeight' => 243],
            [['basic_services_preview'], 'file', 'extensions' => 'png, jpg, jpeg'],
            [['basic_services_preview_h'], 'image', 'maxWidth' => 243, 'maxHeight' => 243],
            [['basic_services_preview_h'], 'file', 'extensions' => 'png, jpg, jpeg'],            
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
        ];
    }
}
