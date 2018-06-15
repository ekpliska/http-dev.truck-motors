<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_adverts".
 *
 * @property int $adverts_id
 * @property string $adverts_name
 * @property string $adverts_image
 */
class Adverts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_adverts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['adverts_name'], 'string', 'max' => 70],
            [['adverts_image'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'adverts_id' => 'Adverts ID',
            'adverts_name' => 'Adverts Name',
            'adverts_image' => 'Adverts Image',
        ];
    }
}
