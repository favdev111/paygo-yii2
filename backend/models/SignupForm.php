<?php
namespace backend\models;

use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $mobile;
    public $BusinessAccount;
    public $BusinessName;
    public $accounttype;
    public $firstname;
    public $lastname;
    public $businessname;
    public $businessemail;
    public $businessmobile;
    public $address ;
    
    

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255], 
            ['email', 'trim'],
            [['email','mobile','businessmobile'], 'required'],
            [['email','businessemail'], 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],
            ['mobile', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This mobile number has already been taken.'],
            ['password', 'required'],
            ['password', 'string', 'min' => 6], 
            [['mobile','businessmobile'], 'number', 'min' => 10,'max'=>11],
            [['accounttype','firstname','lastname','businessname','businessemail'],'required']
        ];
    }


    public function attributeLabels()
    {
        return [
                'email'=>'Email',
                'firstname'=>'First Name',
                'lastname'=>'Last Name',
                'businessname'=>'Business Name',
                'businessemail'=>'Business Email',
                'businessmobile'=>'Business Mobile', 
                'password'=>'Password',
                'accounttype'=>'Account Type'
            ];
    }


    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        
        return $user->save() ? $user : null;
    }
}
