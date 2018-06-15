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
            [['sliders_adverts'], 'integer'],
            [['sliders_image'], 'string', 'max' => 100],
            [['sliders_title', 'sliders_text'], 'string', 'max' => 255],
            [['sliders_name'], 'string', 'max' => 70],
        ];
    }

    public function attributeLabels()
    {
        return [
            'sliders_id' => 'Sliders ID',
            'sliders_image' => 'Изображение',
            'sliders_title' => 'Заголовок слайда',
            'sliders_text' => 'Текст под заголовком',
            'sliders_name' => 'Название слайда',
            'sliders_show' => 'Показывать на сайте',
            'sliders_adverts' => 'Слайд для рекламы',
        ];
    }
}
