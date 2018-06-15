<?php

    namespace app\modules\admin\models;
    use Yii;
    use yii\db\ActiveRecord;

/**
 * Слайдер
 */
class Sliders extends ActiveRecord
{
    public static function tableName()
    {
        return 'tbl_sliders';
    }

    public function rules()
    {
        return [
            [['sliders_show'], 'integer'],
            [['sliders_image'], 'string', 'max' => 100],
            [['sliders_title', 'sliders_text'], 'string', 'max' => 255],
            [['sliders_name'], 'string', 'max' => 70],
        ];
    }

    public function attributeLabels()
    {
        return [
            'sliders_id' => 'Sliders ID',
            'sliders_image' => 'Sliders Image',
            'sliders_title' => 'Sliders Title',
            'sliders_text' => 'Sliders Text',
            'sliders_name' => 'Sliders Name',
            'sliders_show' => 'Sliders Show',
            'del_image' => 'Удалить изображение'
        ];
    }
}
