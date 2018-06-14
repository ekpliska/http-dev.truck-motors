<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_records_ind".
 *
 * @property int $records_id
 * @property int $records_townId
 * @property string $records_fullName
 * @property string $records_phone
 * @property string $records_mark
 * @property string $records_model
 * @property string $records_year
 * @property string $records_number
 * @property string $records_comments
 * @property string $records_date
 * @property int $records_check
 * @property string $records_time
 */
class TblRecordsInd extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_records_ind';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['records_townId', 'records_check'], 'integer'],
            [['records_date', 'records_time'], 'safe'],
            [['records_fullName'], 'string', 'max' => 100],
            [['records_phone'], 'string', 'max' => 50],
            [['records_mark', 'records_model', 'records_number'], 'string', 'max' => 30],
            [['records_year'], 'string', 'max' => 10],
            [['records_comments'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'records_id' => 'Records ID',
            'records_townId' => 'Records Town ID',
            'records_fullName' => 'Records Full Name',
            'records_phone' => 'Records Phone',
            'records_mark' => 'Records Mark',
            'records_model' => 'Records Model',
            'records_year' => 'Records Year',
            'records_number' => 'Records Number',
            'records_comments' => 'Records Comments',
            'records_date' => 'Records Date',
            'records_check' => 'Records Check',
            'records_time' => 'Records Time',
        ];
    }
}
