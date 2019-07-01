<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user_session".
 *
 * @property int $id
 * @property int $user_id
 * @property string $username
 * @property string $mobile
 * @property string $email
 * @property string $ip
 * @property string $device
 * @property string $browser
 * @property string $device_mac_address
 * @property int $status
 * @property string $browser_version
 * @property int $account_id
 * @property int $country_id
 * @property string $created
 * @property string $updated
 * @property int $flag
 * @property string $login_datetime
 * @property int $logout_datetime
 *
 * @property Account $account
 * @property User $user
 * @property Country $country
 */
class UserSession extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_session';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'username', 'mobile', 'email', 'ip', 'device', 'browser', 'browser_version', 'account_id', 'country_id', 'login_datetime', 'logout_datetime'], 'required'],
            [['user_id', 'status', 'account_id', 'country_id', 'flag', 'logout_datetime'], 'integer'],
            [['created', 'updated', 'login_datetime'], 'safe'],
            [['username', 'mobile', 'email', 'ip', 'browser', 'device_mac_address', 'browser_version'], 'string', 'max' => 255],
            [['device'], 'string', 'max' => 32],
            [['user_id'], 'unique'],
            [['username'], 'unique'],
            [['device_mac_address'], 'unique'],
            [['account_id'], 'exist', 'skipOnError' => true, 'targetClass' => Account::className(), 'targetAttribute' => ['account_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['country_id'], 'exist', 'skipOnError' => true, 'targetClass' => Country::className(), 'targetAttribute' => ['country_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'username' => Yii::t('app', 'Username'),
            'mobile' => Yii::t('app', 'Mobile'),
            'email' => Yii::t('app', 'Email'),
            'ip' => Yii::t('app', 'Ip'),
            'device' => Yii::t('app', 'Device'),
            'browser' => Yii::t('app', 'Browser'),
            'device_mac_address' => Yii::t('app', 'Device Mac Address'),
            'status' => Yii::t('app', 'Status'),
            'browser_version' => Yii::t('app', 'Browser Version'),
            'account_id' => Yii::t('app', 'Account ID'),
            'country_id' => Yii::t('app', 'Country ID'),
            'created' => Yii::t('app', 'Created'),
            'updated' => Yii::t('app', 'Updated'),
            'flag' => Yii::t('app', 'Flag'),
            'login_datetime' => Yii::t('app', 'Login Datetime'),
            'logout_datetime' => Yii::t('app', 'Logout Datetime'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccount()
    {
        return $this->hasOne(Account::className(), ['id' => 'account_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {
        return $this->hasOne(Country::className(), ['id' => 'country_id']);
    }
}
