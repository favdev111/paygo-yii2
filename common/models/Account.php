<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "account".
 *
 * @property int $id
 * @property int $account_type_id
 * @property string $first_name
 * @property string $last_name
 * @property string $name
 * @property string $subdomain
 * @property string $email
 * @property string $phone
 * @property string $mobile
 * @property string $fax
 * @property string $privacy
 * @property string $terms
 * @property string $smtp_server
 * @property string $use_authentication
 * @property string $use_secure_connection
 * @property string $use_secure_connection_type
 * @property string $smtp_username
 * @property string $smtp_password
 * @property string $smtp_port
 * @property string $created
 * @property string $updated
 * @property int $flag
 *
 * @property AccountType $accountType
 * @property AccountRelation[] $accountRelations
 * @property AccountRelation[] $accountRelations0
 * @property Address[] $addresses
 * @property DiscountType[] $discountTypes
 * @property EmailTemplate[] $emailTemplates
 * @property Invoice[] $invoices
 * @property Invoice[] $invoices0
 * @property InvoiceTemplate[] $invoiceTemplates
 * @property Item[] $items
 * @property ItemCategory[] $itemCategories
 * @property PaymentGateway[] $paymentGateways
 * @property SmsTemplate[] $smsTemplates
 * @property TaxType[] $taxTypes
 * @property Transaction[] $transactions
 * @property Transaction[] $transactions0
 * @property User[] $users
 * @property UserSessionHistory[] $userSessionHistories
 */
class Account extends \yii\db\ActiveRecord
{
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
            [['account_type_id', 'email', 'mobile', 'privacy', 'terms', 'smtp_server', 'use_authentication', 'use_secure_connection', 'use_secure_connection_type', 'smtp_username', 'smtp_password', 'smtp_port'], 'required'],
            [['account_type_id', 'flag'], 'integer'],
            [['privacy', 'terms'], 'string'],
            [['created', 'updated'], 'safe'],
            [['first_name', 'last_name', 'name', 'subdomain', 'email', 'phone', 'mobile', 'fax', 'smtp_server', 'use_authentication', 'use_secure_connection', 'use_secure_connection_type', 'smtp_username', 'smtp_password', 'smtp_port'], 'string', 'max' => 255],
            [['account_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => AccountType::className(), 'targetAttribute' => ['account_type_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'account_type_id' => Yii::t('app', 'Account Type ID'),
            'first_name' => Yii::t('app', 'First Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'name' => Yii::t('app', 'Name'),
            'subdomain' => Yii::t('app', 'Subdomain'),
            'email' => Yii::t('app', 'Email'),
            'phone' => Yii::t('app', 'Phone'),
            'mobile' => Yii::t('app', 'Mobile'),
            'fax' => Yii::t('app', 'Fax'),
            'privacy' => Yii::t('app', 'Privacy'),
            'terms' => Yii::t('app', 'Terms'),
            'smtp_server' => Yii::t('app', 'Smtp Server'),
            'use_authentication' => Yii::t('app', 'Use Authentication'),
            'use_secure_connection' => Yii::t('app', 'Use Secure Connection'),
            'use_secure_connection_type' => Yii::t('app', 'Use Secure Connection Type'),
            'smtp_username' => Yii::t('app', 'Smtp Username'),
            'smtp_password' => Yii::t('app', 'Smtp Password'),
            'smtp_port' => Yii::t('app', 'Smtp Port'),
            'created' => Yii::t('app', 'Created'),
            'updated' => Yii::t('app', 'Updated'),
            'flag' => Yii::t('app', 'Flag'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccountType()
    {
        return $this->hasOne(AccountType::className(), ['id' => 'account_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccountRelations()
    {
        return $this->hasMany(AccountRelation::className(), ['payee_account_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccountRelations0()
    {
        return $this->hasMany(AccountRelation::className(), ['payor_account_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAddresses()
    {
        return $this->hasMany(Address::className(), ['account_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDiscountTypes()
    {
        return $this->hasMany(DiscountType::className(), ['account_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmailTemplates()
    {
        return $this->hasMany(EmailTemplate::className(), ['account_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInvoices()
    {
        return $this->hasMany(Invoice::className(), ['payee_account_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInvoices0()
    {
        return $this->hasMany(Invoice::className(), ['payor_account_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInvoiceTemplates()
    {
        return $this->hasMany(InvoiceTemplate::className(), ['account_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItems()
    {
        return $this->hasMany(Item::className(), ['account_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItemCategories()
    {
        return $this->hasMany(ItemCategory::className(), ['account_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaymentGateways()
    {
        return $this->hasMany(PaymentGateway::className(), ['account_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSmsTemplates()
    {
        return $this->hasMany(SmsTemplate::className(), ['account_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaxTypes()
    {
        return $this->hasMany(TaxType::className(), ['account_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransactions()
    {
        return $this->hasMany(Transaction::className(), ['payee_account_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransactions0()
    {
        return $this->hasMany(Transaction::className(), ['payor_account_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['account_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserSessionHistories()
    {
        return $this->hasMany(UserSessionHistory::className(), ['account_id' => 'id']);
    }
}
