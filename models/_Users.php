<?php
    namespace app\models;
    use Yii;

class Users extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'tbl_users';
    }

    public static function findIdentity($id)
    {
        return static::findOne($id);
    }    
    
    public function rules()
    {
        return [
            [['users_name'], 'string', 'max' => 45],
            [['users_password', 'users_authkey'], 'string', 'max' => 100],
            [['users_fullname'], 'string', 'max' => 70],
            [['users_image'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'users_id' => 'Users ID',
            'users_name' => 'Users Name',
            'users_password' => 'Users Password',
            'users_authkey' => 'Users Authkey',
            'users_fullname' => 'Users Fullname',
            'users_image' => 'Users Image',
        ];
    }
}
