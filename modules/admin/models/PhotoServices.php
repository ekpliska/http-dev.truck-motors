<?php

    namespace app\modules\admin\models;
    use Yii;
    use yii\db\ActiveRecord;
    use app\modules\admin\models\BasicServices;

/**
 * Фото галлерея, основные услуги
 */
class PhotoServices extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_photo_services';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['photo_services_id_name'], 'integer'],
            [['photo_services_path'], 'string', 'max' => 1000],
        ];
    }
    
    public function getBasicServices() {
        return $this->hasOne(BasicServices::className(), ['basic_services_id' => 'photo_services_id_name']);
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
