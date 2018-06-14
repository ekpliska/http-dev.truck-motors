<?php
    namespace app\modules\admin\models;
    use yii\db\ActiveRecord;

/*
 *  Меню
 */    
class Menu extends ActiveRecord
{
    public static function tableName()
    {
        return 'tbl_menu';
    }

    public function rules()
    {
        return [
            [['menu_name', 'menu_alias'], 'required'],
            [['menu_parent', 'menu_show', 'menu_footer'], 'integer'],
            [['menu_name'], 'string', 'max' => 70],
            [['menu_alias'], 'string', 'max' => 30],
            [['menu_titile', 'menu_description', 'menu_keywords'], 'string', 'max' => 255],
        ];
    }
    
    public function getChildren()
    {
    	return $this->hasMany(Menu::className(),['menu_parent' => 'menu_id'])
    		->andWhere(['menu_parent' => $this->menu_id]);
	}

    public function attributeLabels()
    {
        return [
            'menu_id' => 'Н/п',
            'menu_name' => 'Название меню',
            'menu_parent' => 'Родитель',
            'menu_alias' => 'Алиас (не менять)',
            'menu_titile' => 'Titile (meta tag)',
            'menu_description' => 'Description  (meta tag)',
            'menu_keywords' => 'Keywords (meta tag)',
            'menu_show' => 'Статус',
            'menu_footer' => 'Отображать пункт меню в футере',
        ];
    }
    
}
