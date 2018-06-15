<?php

    namespace app\modules\admin\models;
    use yii\base\Model;

/**
 * Слайдер
 */
class SlidersForm extends Model
{

    public $sliders_image;
    public $sliders_title;
    public $sliders_text;
    public $sliders_name;
    public $sliders_show;
    public $sliders_adverts;




    public function rules()
    {
        return [
            [['sliders_name', 'sliders_image'], 'required'],
            [['sliders_show'], 'integer'],
            [['sliders_title', 'sliders_text'], 'string', 'max' => 255],
            [['sliders_name'], 'string', 'max' => 70],
            [['sliders_image'], 'file', 'extensions' => 'png, jpg, jpeg'],
            [['sliders_image'], 'image', 'maxWidth' => 3509, 'maxHeight' => 1020],
            [['sliders_adverts'], 'integer'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'sliders_image' => 'Изображение',
            'sliders_title' => 'Заголовок слайда',
            'sliders_text' => 'Текст под заголовком',
            'sliders_name' => 'Название слайда',
            'sliders_show' => 'Показывать на сайте',
            'sliders_adverts' => 'Слайд для рекламы',
        ];
    }
}
