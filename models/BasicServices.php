<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_basic_services".
 *
 * @property int $basic_services_id
 * @property string $basic_services_name
 * @property string $basic_services_text
 */
class BasicServices extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_basic_services';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['basic_services_name'], 'string', 'max' => 255],
            [['basic_services_text'], 'string', 'max' => 10000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'basic_services_id' => 'Basic Services ID',
            'basic_services_name' => 'Basic Services Name',
            'basic_services_text' => 'Basic Services Text',
        ];
    }
}
