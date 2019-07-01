<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "payment_gateway".
 *
 * @property int $id
 * @property string $name
 * @property string $bank
 * @property string $url
 * @property string $username
 * @property string $password
 * @property string $signature
 * @property int $account_id
 * @property int $currency_id
 * @property string $logo
 * @property string $large_logo
 * @property string $created
 * @property string $updated
 * @property int $flag
 *
 * @property Account $account
 * @property Currency $currency
 * @property Transaction[] $transactions
 * @property Invoice[] $invoices
 */
class PaymentGateway extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'payment_gateway';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'bank', 'url', 'username', 'password', 'signature', 'account_id', 'currency_id', 'logo', 'large_logo'], 'required'],
            [['account_id', 'currency_id', 'flag'], 'integer'],
            [['created', 'updated'], 'safe'],
            [['name', 'bank', 'url', 'username', 'password', 'logo', 'large_logo'], 'string', 'max' => 255],
            [['signature'], 'string', 'max' => 1024],
            [['name', 'password'], 'unique', 'targetAttribute' => ['name', 'password']],
            [['account_id'], 'exist', 'skipOnError' => true, 'targetClass' => Account::className(), 'targetAttribute' => ['account_id' => 'id']],
            [['currency_id'], 'exist', 'skipOnError' => true, 'targetClass' => Currency::className(), 'targetAttribute' => ['currency_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'bank' => Yii::t('app', 'Bank'),
            'url' => Yii::t('app', 'Url'),
            'username' => Yii::t('app', 'Username'),
            'password' => Yii::t('app', 'Password'),
            'signature' => Yii::t('app', 'Signature'),
            'account_id' => Yii::t('app', 'Account ID'),
            'currency_id' => Yii::t('app', 'Currency ID'),
            'logo' => Yii::t('app', 'Logo'),
            'large_logo' => Yii::t('app', 'Large Logo'),
            'created' => Yii::t('app', 'Created'),
            'updated' => Yii::t('app', 'Updated'),
            'flag' => Yii::t('app', 'Flag'),
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
    public function getCurrency()
    {
        return $this->hasOne(Currency::className(), ['id' => 'currency_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransactions()
    {
        return $this->hasMany(Transaction::className(), ['payment_gateway_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInvoices()
    {
        return $this->hasMany(Invoice::className(), ['id' => 'invoice_id'])->viaTable('transaction', ['payment_gateway_id' => 'id']);
    }
}
