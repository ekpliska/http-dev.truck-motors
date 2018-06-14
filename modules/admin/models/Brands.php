<?php

    namespace app\modules\admin\models;
    use Yii;

class Brands extends \yii\db\ActiveRecord
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
            'brands_name' => 'Brands Name',
            'brands_image' => 'Brands Image',
            'brands_descriptions' => 'Brands Descriptions',
        ];
    }
}
