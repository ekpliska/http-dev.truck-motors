<?php

    namespace app\modules\admin\models;
    use yii\db\ActiveRecord;

/*
 * Слайдер
 */    
class Sliders extends ActiveRecord
{
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
            [['sliders_image', 'sliders_name'], 'required'],
            [['sliders_image'], 'string', 'max' => 100],
            [['sliders_title', 'sliders_text'], 'string', 'max' => 255],
            [['sliders_name'], 'string', 'max' => 70],
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
        ];
    }
}
