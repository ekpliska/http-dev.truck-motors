<?php

    namespace app\models;
    use yii\db\ActiveRecord;
    use Yii;

class Brands extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_brands';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['brands_name'], 'string', 'max' => 705],
            [['brands_image', 'brands_descriptions'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
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
