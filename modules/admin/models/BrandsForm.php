<?php
    namespace app\modules\admin\models;
    use yii\base\Model;

/**
 * Поставщики
 */
class BrandsForm extends Model
{
    public $brands_name;
    public $brands_image;
    public $brands_descriptions;
    
    public function rules()
    {
        return [
            [['brands_name', 'brands_image'], 'required'],
            [['brands_descriptions'], 'string', 'max' => 705],
            [['brands_image'], 'file', 'extensions' => 'png, jpg'],
            [['brands_image'], 'image', 'maxWidth' => 458, 'maxHeight' => 344],
        ];
    }

    public function attributeLabels()
    {
        return [
            'brands_name' => 'Название',
            'brands_descriptions' => 'Описание',
            'brands_image' => 'Изображение',
        ];
    }
}
