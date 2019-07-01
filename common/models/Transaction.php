<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "transaction".
 *
 * @property int $id
 * @property int $invoice_id
 * @property int $invoice_schedule_id
 * @property string $invoice_number
 * @property string $amount
 * @property string $transaction_date
 * @property string $transaction_id
 * @property int $payment_gateway_id
 * @property int $currency_id
 * @property string $status
 * @property string $response
 * @property int $payor_account_id
 * @property int $payee_account_id
 * @property int $user_id
 * @property string $created
 * @property string $updated
 * @property int $flag
 *
 * @property Currency $currency
 * @property Invoice $invoice
 * @property InvoiceSchedule $invoiceSchedule
 * @property Account $payeeAccount
 * @property PaymentGateway $paymentGateway
 * @property Account $payorAccount
 */
class Transaction extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaction';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['invoice_id', 'invoice_schedule_id', 'invoice_number', 'amount', 'transaction_date', 'transaction_id', 'payment_gateway_id', 'currency_id', 'status', 'response', 'payee_account_id', 'user_id'], 'required'],
            [['invoice_id', 'invoice_schedule_id', 'payment_gateway_id', 'currency_id', 'payor_account_id', 'payee_account_id', 'user_id', 'flag'], 'integer'],
            [['transaction_date', 'created', 'updated'], 'safe'],
            [['invoice_number', 'amount', 'transaction_id', 'status', 'response'], 'string', 'max' => 255],
            [['invoice_id', 'payment_gateway_id'], 'unique', 'targetAttribute' => ['invoice_id', 'payment_gateway_id']],
            [['currency_id'], 'exist', 'skipOnError' => true, 'targetClass' => Currency::className(), 'targetAttribute' => ['currency_id' => 'id']],
            [['invoice_id'], 'exist', 'skipOnError' => true, 'targetClass' => Invoice::className(), 'targetAttribute' => ['invoice_id' => 'id']],
            [['invoice_schedule_id'], 'exist', 'skipOnError' => true, 'targetClass' => InvoiceSchedule::className(), 'targetAttribute' => ['invoice_schedule_id' => 'id']],
            [['payee_account_id'], 'exist', 'skipOnError' => true, 'targetClass' => Account::className(), 'targetAttribute' => ['payee_account_id' => 'id']],
            [['payment_gateway_id'], 'exist', 'skipOnError' => true, 'targetClass' => PaymentGateway::className(), 'targetAttribute' => ['payment_gateway_id' => 'id']],
            [['payor_account_id'], 'exist', 'skipOnError' => true, 'targetClass' => Account::className(), 'targetAttribute' => ['payor_account_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'invoice_id' => Yii::t('app', 'Invoice ID'),
            'invoice_schedule_id' => Yii::t('app', 'Invoice Schedule ID'),
            'invoice_number' => Yii::t('app', 'Invoice Number'),
            'amount' => Yii::t('app', 'Amount'),
            'transaction_date' => Yii::t('app', 'Transaction Date'),
            'transaction_id' => Yii::t('app', 'Transaction ID'),
            'payment_gateway_id' => Yii::t('app', 'Payment Gateway ID'),
            'currency_id' => Yii::t('app', 'Currency ID'),
            'status' => Yii::t('app', 'Status'),
            'response' => Yii::t('app', 'Response'),
            'payor_account_id' => Yii::t('app', 'Payor Account ID'),
            'payee_account_id' => Yii::t('app', 'Payee Account ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'created' => Yii::t('app', 'Created'),
            'updated' => Yii::t('app', 'Updated'),
            'flag' => Yii::t('app', 'Flag'),
        ];
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
    public function getInvoice()
    {
        return $this->hasOne(Invoice::className(), ['id' => 'invoice_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInvoiceSchedule()
    {
        return $this->hasOne(InvoiceSchedule::className(), ['id' => 'invoice_schedule_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPayeeAccount()
    {
        return $this->hasOne(Account::className(), ['id' => 'payee_account_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaymentGateway()
    {
        return $this->hasOne(PaymentGateway::className(), ['id' => 'payment_gateway_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPayorAccount()
    {
        return $this->hasOne(Account::className(), ['id' => 'payor_account_id']);
    }
}
