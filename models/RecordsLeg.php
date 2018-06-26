<?php
    namespace app\models;
    use yii\base\Model;
    use Yii;
    use yii\db\ActiveRecord;

/**
 * Запись на СТО (Юридические лица)
 */
class RecordsLeg extends ActiveRecord
{

    public static function tableName()
    {
        return 'tbl_records_leg';
    }

    public function rules()
    {
        return [
            [['records_nameCompany', 'records_phone', 'records_date', 'records_time'], 'required'],
            [['records_townId', 'records_check'], 'integer'],
            [['records_nameCompany'], 'string', 'max' => 100],
            [['records_mark', 'records_model', 'records_number'], 'string', 'max' => 30],
            [['records_year'], 'string', 'max' => 10],
            [['records_comments'], 'string', 'max' => 255],
            [['records_phone'], 'string', 'max' => 50],
            [['records_date'], 'date', 'format' => 'php:Y-m-d'],
            [['records_time'], 'time', 'format' => 'php:H:i'],
            [['records_time'], 'checkTimeRange'],
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
        }
    }    
    
    /*
     * Реализация отправки почты
     * В параметрах Yii::$app->params['email_service'] указать электронный адрес, того, кому заявки отправлять
     */
    public function sendMail($view, $subject, $params = [])
    {
        
        $message = Yii::$app->mailer->compose([
                'html' => 'views/' . $view,
            ], $params)
            ->setFrom('info@truck-motors.su')
            ->setTo(Yii::$app->params['email_service'])
            ->setSubject($subject)
            ->send();
        return $message;
    }    
    
    public function attributeLabels()
    {
        return [
            'records_id' => 'П/п',
            'records_townId' => 'Город',
            'records_nameCompany' => 'Название компании',
            'records_mark' => 'Марка',
            'records_model' => 'Модель',
            'records_year' => 'Год',
            'records_number' => 'Государственный номер',
            'records_comments' => 'Причина обращения',
            'records_date' => 'Дата',
            'records_time' => 'Время',
            'records_check' => 'Соглашаюсь на обработку персональных данных',
            'records_phone' => 'Контактный телефон',
            'rec_contact' => 'Контактная информация',
            'rec_info' => 'Информация об автомобиле',            
        ];
    }
}
