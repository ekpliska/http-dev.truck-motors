<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_menu".
 *
 * @property int $menu_id
 * @property string $menu_name
 * @property string $menu_parent
 * @property string $menu_alias
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['menu_name'], 'string', 'max' => 70],
            [['menu_alias'], 'string', 'max' => 30],
        ];
    }
    
    public function getChildren()
    {
    	return $this->hasMany(Menu::className(),['menu_parent' => 'menu_id'])
    		->andWhere(['menu_parent' => $this->menu_id]);
	}

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'menu_id' => 'Menu ID',
            'menu_name' => 'Menu Name',
            'menu_parent' => 'Menu Parent',
            'menu_alias' => 'Menu Alias',
        ];
    }
    
}
