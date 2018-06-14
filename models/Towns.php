<?php
    namespace app\models;
    use Yii;
    use app\models\RecordsInd;
    use app\models\RecordsLeg;

/**
 * This is the model class for table "tbl_towns".
 *
 * @property int $towns_id
 * @property string $towns_name
 */
class Towns extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_towns';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['towns_id'], 'required'],
            [['towns_id'], 'integer'],
            [['towns_name'], 'string', 'max' => 70],
            [['towns_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'towns_id' => 'Towns ID',
            'towns_name' => 'Towns Name',
        ];
    }

}
