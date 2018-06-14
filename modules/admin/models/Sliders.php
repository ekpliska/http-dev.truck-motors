<?php

    namespace app\modules\admin\models;
    use yii\db\ActiveRecord;

/*
 * Слайдер
 */    
class Sliders extends ActiveRecord
{
    
    public $file;
    public $del_img;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_sliders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sliders_name'], 'required'],
            [['sliders_image'], 'string', 'max' => 100],
            [['sliders_title', 'sliders_text'], 'string', 'max' => 255],
            [['sliders_name'], 'string', 'max' => 70],
            [['sliders_show'], 'boolean'],
            [['file'], 'file', 'extensions' => 'png, jpg, jpeg'],
            [['file'], 'image', 'maxWidth' => 3509, 'maxHeight' => 1020],
            [['del_img'], 'boolean'],
        ];
    }
    
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'sliders_id' => 'Н/п',
            'sliders_image' => 'Изображение',
            'sliders_title' => 'Заголовок для слайда',
            'sliders_text' => 'Текст под заголовком',
            'sliders_name' => 'Название слайда',
            'file' => 'Изображение',
            'del_img' => 'Удалить изображение',
            'sliders_show' => 'Показывать в слайдере на сайте'
        ];
    }
}
