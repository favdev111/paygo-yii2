<?php

namespace backend\models;

use Yii;
use yii\base\InvalidParamException;
use yii\base\Model;
use common\models\Account;

/**
 * This is the model class for table "account".
 *
 * @property int $id
 * @property string $smtp_server
 * @property string $use_authentication
 * @property string $use_secure_connection
 * @property string $use_secure_connection_type
 * @property string $smtp_username
 * @property int $smtp_password
 * @property string $smtp_port
 * @property int $created_at
 * @property int $updated_at
 */
class SmtpSetting extends \yii\db\ActiveRecord
{   
    public $id;
    public $smtp_server;
    public $use_authentication;
    public $use_secure_connection;
    public $use_secure_connection_type;
    public $smtp_username;
    public $smtp_password;
    public $smtp_port;
    
    private $_user;
 
    public function __construct($id, $config = [])
    {
        $this->_user = Account::findOne($id);
        
        if (!$this->_user) {
            throw new InvalidParamException('Unable to find user!');
        }
        
        $this->id = $this->_user->id;
        $this->smtp_server = $this->_user->smtp_server;
        $this->use_authentication = $this->_user->use_authentication;
        $this->use_secure_connection = $this->_user->use_secure_connection;
        $this->use_secure_connection_type = $this->_user->use_secure_connection_type;
        $this->smtp_username = $this->_user->smtp_username;
        $this->smtp_password = $this->_user->smtp_password;
        $this->smtp_port = $this->_user->smtp_port;
        $this->isNewRecord = false;
        parent::__construct($config);
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'account';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['smtp_server','use_authentication','use_secure_connection','use_secure_connection_type','smtp_username','smtp_password','smtp_port'], 'required'],
        ];
    }

    public function updateSmtp()
    {
        $account = $this->_user;
        $account->smtp_server = $this->smtp_server;
        $account->use_authentication = $this->use_authentication;
        $account->use_secure_connection = $this->use_secure_connection;
        $account->use_secure_connection_type = $this->use_secure_connection_type;
        $account->smtp_username = $this->smtp_username;
        $account->smtp_password = $this->smtp_password;
        $account->smtp_port = $this->smtp_port;
        return $account->save(false);
    }

}
