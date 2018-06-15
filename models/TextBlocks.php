<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_text_blocks".
 *
 * @property int $text_blocks_id
 * @property string $text_blocks_text
 * @property string $text_blocks_name
 * @property string $text_block_alias
 */
class TextBlocks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_text_blocks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text_blocks_text'], 'string', 'max' => 700],
            [['text_blocks_name'], 'string', 'max' => 70],
            [['text_block_alias'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'text_blocks_id' => 'Text Blocks ID',
            'text_blocks_text' => 'Text Blocks Text',
            'text_blocks_name' => 'Text Blocks Name',
            'text_block_alias' => 'Text Block Alias',
        ];
    }
}
