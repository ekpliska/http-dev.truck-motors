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
    public $gallery;

    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }
    
    public static function tableName()
    {
        return 'tbl_photo_services';
    }

    public function rules()
    {
        return [
            [['photo_services_id_name'], 'integer'],
            [['photo_services_path'], 'string', 'max' => 1000],
            [['gallery'], 'file', 'extensions' => 'png, jpg', 'maxFiles' => 4],
            [['gallery'], 'image', 'maxWidth' => 510, 'maxHeight' => 470],
        ];
    }
    
    public function getBasicServices() {
        return $this->hasOne(BasicServices::className(), ['basic_services_id' => 'photo_services_id_name']);
    }

    
    public function uploadGallery()
    { 
        if($this->validate()){
            foreach($this->gallery as $file){
                $path = 'images/upload/store/' . $file->baseName . '.' . $file->extension;
                $file->saveAs($path);
                $this->attachImage($path);
                @unlink($path);
            }
            return true;
        }else{
            return false;
        }
    }     

    public function attributeLabels()
    {
        return [
            'photo_services_id' => 'Photo Services ID',
            'photo_services_id_name' => 'Название услуги',
            'gallery' => 'Галерея',
        ];
    }
}
