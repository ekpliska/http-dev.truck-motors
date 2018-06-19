<?php
    namespace app\modules\admin\models;
    use Yii;
    use yii\db\ActiveRecord;

/**
 * Текстовые блоки
 */
class TextBlocks extends ActiveRecord
{
    public static function tableName()
    {
        return 'tbl_text_blocks';
    }

    public function rules()
    {
        return [
            [['text_blocks_name'], 'required'],
            [['text_blocks_text'], 'string', 'max' => 10000],
            [['text_blocks_name'], 'string', 'max' => 70],
            [['text_block_alias'], 'string', 'max' => 45],
        ];
    }

    public function attributeLabels()
    {
        return [
            'text_blocks_id' => 'П/н',
            'text_blocks_text' => 'Сожержимое текстового блока',
            'text_blocks_name' => 'Название',
            'text_block_alias' => 'Алиас (не менять)',
        ];
    }
}
