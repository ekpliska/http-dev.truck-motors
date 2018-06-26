<?php

    namespace app\modules\admin\models;
    use Yii;
    use yii\db\ActiveRecord;

/*
 * Бренды, поставщики
 */    
class Brands extends ActiveRecord
{
    public static function tableName()
    {
        return 'tbl_brands';
    }

    public function rules()
    {
        return [
            [['brands_name'], 'string', 'max' => 705],
            [['brands_image', 'brands_descriptions'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'brands_id' => 'Brands ID',
            'brands_name' => 'Название',
            'brands_image' => 'Изображение',
            'brands_descriptions' => 'Описание',
        ];
    }
}
