<?php
    namespace app\models;
    use Yii;
    use yii\base\Model;

class RecordsIndForm extends Model
{
    
    public $records_fullName;
    public $records_phone;
    public $records_mark;
    public $records_model;
    public $records_year;
    public $records_number;
    public $records_comments;
    public $records_date;
    public $records_time;
    public $records_check;
    public $verifyCode;
    
    public $records_townId;

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
            ['verifyCode', 'captcha'],
        ];
    }

    /*
     *  Проверка валидации времени
     *  Если указанное время не входит в рамки записи на СТО, поле не валидируется
     */
    public function checkTimeRange() {
        list($hour, $minute) = explode(':', $this->records_time);
        if ((int)$hour < 8 || ((int)$hour >= 18 && (int)$minute <> 0)) {
            $errorMsg = 'Указанное время не соответствует расписанию записи на СТО';
            $this->addError('records_time', $errorMsg);
            return;
        }
    }

    public function attributeLabels()
    {
        return [
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
