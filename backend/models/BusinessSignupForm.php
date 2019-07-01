<?php
namespace backend\models;

use yii\base\Model;
use common\models\User;
use common\models\Account;

/**
 * Signup form
 */
class BusinessSignupForm extends Model
{
    public $username;
    public $password;  
    public $businessaccount;
    public $businessname; 
    public $businessemail;
    public $businessmobile;
    public $firstname;
    public $lastname;
    public $email; 
    public $mobile;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // 'mobile','firstname','lastname','businessname','businessemail','businessmobile']
            ['email', 'required'],  
            ['mobile','required','message' => 'Please enter mobile.'],
            ['firstname','required'],
            ['lastname','required'],
            ['businessname','required'],
            ['businessemail','required'],
            ['businessmobile','required'], 
            ['email', 'trim'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],
            ['mobile', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This mobile number has already been taken.'],
            ['password', 'required'],
            ['password', 'string', 'min' => 6],
            [['mobile','businessmobile'], 'number', 'min' => 10,'max'=>11],
            
            // ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            // ['username', 'string', 'min' => 2, 'max' => 255], 

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
                'password'=>'Password'
            ];
    }


    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {   
        var_dump($this->validate());

        if (!$this->validate()) {
            return null;
        }
        
        $account = new Account();

        $account->first_name = $this->firstname;
        $account->last_name = $this->lastname;
        $account->name = $this->businessname;
        $account->email = $this->businessemail;
        $account->mobile = $this->businessmobile;

        if($account->save()){
            
            $user = new User();
            $user->username = $this->email;
            $user->email = $this->email;
            $user->setPassword($this->password);
            $user->generateAuthKey(); 
            $res  =  $user->save() ? $user : null;
            $account->account_type_id =  $user->id;
            $account->save();
            return $res;
        }   
    }
}
