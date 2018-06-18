<?php

    namespace app\modules\admin\models;
    use Yii;
    use yii\base\Model;

/**
 * Фото галлерея, основные услуги
 */
class PhotoServicesForm extends Model
{
    public $photo_services_id_name;
    public $photo_services_path;


    public function rules()
    {
        return [
//            [['photo_services_id_name', 'photo_services_path'], 'required'],
//            [['photo_services_id_name'], 'integer'],
//            [['photo_services_path'], 'string', 'max' => 1000],
        ];
    }
    
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'photo_services_id' => 'Photo Services ID',
            'photo_services_id_name' => 'Photo Services Id Name',
            'photo_services_path' => 'Photo Services Path',
        ];
    }
}
