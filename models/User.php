<?php
    namespace app\models;
    use yii\db\ActiveRecord;
    use yii\web\IdentityInterface;
    use Yii;
    
class User extends ActiveRecord implements IdentityInterface
{
    public static function tableName()
    {
        return 'tbl_users';        
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
    
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        // echo
    }

    public static function findByUsername($username)
    {
        return static::findOne(['users_name' => $username]);
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->users_id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->users_authkey;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($autKey)
    {
        return $this->users_authkey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->users_password);
    }

	public function generateAuthKey()
	{
		$this->users_authkey = Yii::$app->security->generateRandomString();
	}
}
