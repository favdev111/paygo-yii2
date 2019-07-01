<?php

namespace backend\models;

use Yii;
use yii\base\InvalidParamException;
use yii\base\Model;
use common\models\User;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $mobile
 * @property int $company_id
 * @property string $first_name
 * @property string $last_name
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property int $status
 * @property string $role
 * @property int $created_at
 * @property int $updated_at
 */
class Changepassword extends \yii\db\ActiveRecord
{   
    public $id;
    public $password;
    public $confirm_password;
    
    private $_user;
 
    public function __construct($id, $config = [])
    {
        $this->_user = User::findIdentity($id);
        
        if (!$this->_user) {
            throw new InvalidParamException('Unable to find user!');
        }
        
        $this->id = $this->_user->id;
        parent::__construct($config);
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['password','confirm_password'], 'required'],
            [['password','confirm_password'], 'string', 'min' => 6],
            ['confirm_password', 'compare', 'compareAttribute' => 'password'],
        ];
    }

    public function changePassword()
    {
        $user = $this->_user;
        $user->setPassword($this->password);
 
        return $user->save(false);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
                'oldpass'=>'Old Password',
                'newpass'=>'New Password',
                'repeatnewpass'=>'Repeat New Password',
            ];
    }


}
