<?php
    namespace app\models;
    use Yii;
    use app\models\PhotoServices;
    use yii\db\ActiveRecord;

/**
 * This is the model class for table "image".
 *
 * @property int $id
 * @property string $filePath
 * @property int $itemId
 * @property int $isMain
 * @property string $modelName
 * @property string $urlAlias
 * @property string $name
 */
class Image extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'image';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['filePath', 'modelName', 'urlAlias'], 'required'],
            [['itemId', 'isMain'], 'integer'],
            [['filePath', 'urlAlias'], 'string', 'max' => 400],
            [['modelName'], 'string', 'max' => 150],
            [['name'], 'string', 'max' => 80],
        ];
    }
    
    public function getServices() {
        return $this->hasOne(PhotoServices::className(), ['photo_services_id' => 'itemId']);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'filePath' => 'File Path',
            'itemId' => 'Item ID',
            'isMain' => 'Is Main',
            'modelName' => 'Model Name',
            'urlAlias' => 'Url Alias',
            'name' => 'Name',
        ];
    }
}
