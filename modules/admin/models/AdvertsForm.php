<?php

    namespace app\modules\admin\models;
    use yii\base\Model;

/**
 * Реклама
 */
class Adverts extends Model
{

    public function rules()
    {
        return [
            [['adverts_name', 'adverts_image'], 'required'],
            [['adverts_name'], 'string', 'max' => 70],
            [['adverts_image'], 'string', 'max' => 100],
        ];
    }

    public function attributeLabels()
    {
        return [
            'adverts_id' => 'Adverts ID',
            'adverts_name' => 'Adverts Name',
            'adverts_image' => 'Adverts Image',
        ];
    }
}
