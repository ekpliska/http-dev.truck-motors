<?php

    namespace app\modules\admin\models;
    use Yii;
    use yii\db\ActiveRecord;

/**
 * Реклама
 */
class Adverts extends ActiveRecord
{
    public static function tableName()
    {
        return 'tbl_adverts';
    }

    public function rules()
    {
        return [
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
