<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_photo_services".
 *
 * @property int $photo_services_id
 * @property int $photo_services_id_name
 * @property string $photo_services_path
 */
class PhotoServices extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_photo_services';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['photo_services_id_name'], 'integer'],
            [['photo_services_path'], 'string', 'max' => 1000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'photo_services_id' => 'Photo Services ID',
            'photo_services_id_name' => 'Photo Services Id Name',
            'photo_services_path' => 'Photo Services Path',
        ];
    }
}
