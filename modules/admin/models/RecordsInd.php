<?php
    namespace app\modules\admin\models;
    use yii\db\ActiveRecord;

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
 * @property int $records_date
 * @property int $records_check
 */
class RecordsInd extends ActiveRecord
{

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
            [['records_fullName', 'records_phone', 'records_date', 'records_time', 'records_check'], 'required'],
            [['records_townId', 'records_check'], 'integer'],
            [['records_fullName'], 'string', 'max' => 100],
            [['records_phone'], 'string', 'max' => 50],
            [['records_mark', 'records_model', 'records_number'], 'string', 'max' => 30],
            [['records_year'], 'string', 'max' => 10],
            [['records_comments'], 'string', 'max' => 255],
            [['records_date'], 'date', 'format' => 'php:Y-m-d'],
            [['records_time'], 'time', 'format' => 'php:H:i'],
            [['records_time'], 'checkTimeRange', 'skipOnEmpty'=> false],
        ];
    }

    public function attributeLabels()
    {
        return [
            'records_id' => 'П/п',
            'records_townId' => 'Город',
            'records_fullName' => 'Фамилия имя отчество',
            'records_phone' => 'Контактный телефон',
            'records_mark' => 'Марка',
            'records_model' => 'Модель',
            'records_year' => 'Год',
            'records_number' => 'Государственный номер',
            'records_comments' => 'Причина обращения',
            'records_date' => 'Дата',
            'records_time' => 'Время',
            'records_check' => 'Соглашаюсь на обработку персональных данных',
        ];
    }
}
