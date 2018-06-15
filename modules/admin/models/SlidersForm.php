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
    public $del_image;




    public function rules()
    {
        return [
            [['sliders_name', 'sliders_image'], 'required'],
            [['sliders_show'], 'integer'],
            [['sliders_title', 'sliders_text'], 'string', 'max' => 255],
            [['sliders_name'], 'string', 'max' => 70],
            [['sliders_image'], 'file', 'extensions' => 'png, jpg, jpeg'],
            [['sliders_image'], 'image', 'maxWidth' => 3509, 'maxHeight' => 1020],
            [['del_image'], 'boolean'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'sliders_image' => 'Sliders Image',
            'sliders_title' => 'Sliders Title',
            'sliders_text' => 'Sliders Text',
            'sliders_name' => 'Sliders Name',
            'sliders_show' => 'Sliders Show',
        ];
    }
}
