<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "invoice".
 *
 * @property int $id
 * @property string $invoice_number
 * @property string $invoice_type
 * @property int $payor_account_id
 * @property string $status
 * @property string $due_date
 * @property string $last_payment_date
 * @property int $created_by_user_id
 * @property int $payee_account_id
 * @property string $created
 * @property string $updated
 * @property int $flag
 * @property string $notes
 * @property string $memo
 * @property string $amount
 * @property string $external_invoice_number
 *
 * @property User $createdByUser
 * @property Account $payeeAccount
 * @property Account $payorAccount
 * @property InvoiceDetail[] $invoiceDetails
 * @property InvoiceSchedule[] $invoiceSchedules
 * @property Transaction[] $transactions
 * @property PaymentGateway[] $paymentGateways
 */
class Invoice extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'invoice';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['invoice_number', 'invoice_type', 'payor_account_id', 'status', 'due_date', 'created_by_user_id', 'payee_account_id', 'notes', 'memo', 'amount', 'external_invoice_number'], 'required'],
            [['payor_account_id', 'created_by_user_id', 'payee_account_id', 'flag'], 'integer'],
            [['due_date', 'last_payment_date', 'created', 'updated'], 'safe'],
            [['notes', 'memo'], 'string'],
            [['invoice_number', 'invoice_type', 'status', 'amount', 'external_invoice_number'], 'string', 'max' => 255],
            [['created_by_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by_user_id' => 'id']],
            [['payee_account_id'], 'exist', 'skipOnError' => true, 'targetClass' => Account::className(), 'targetAttribute' => ['payee_account_id' => 'id']],
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
            'invoice_number' => Yii::t('app', 'Invoice Number'),
            'invoice_type' => Yii::t('app', 'Invoice Type'),
            'payor_account_id' => Yii::t('app', 'Payor Account ID'),
            'status' => Yii::t('app', 'Status'),
            'due_date' => Yii::t('app', 'Due Date'),
            'last_payment_date' => Yii::t('app', 'Last Payment Date'),
            'created_by_user_id' => Yii::t('app', 'Created By User ID'),
            'payee_account_id' => Yii::t('app', 'Payee Account ID'),
            'created' => Yii::t('app', 'Created'),
            'updated' => Yii::t('app', 'Updated'),
            'flag' => Yii::t('app', 'Flag'),
            'notes' => Yii::t('app', 'Notes'),
            'memo' => Yii::t('app', 'Memo'),
            'amount' => Yii::t('app', 'Amount'),
            'external_invoice_number' => Yii::t('app', 'External Invoice Number'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedByUser()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by_user_id']);
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
    public function getPayorAccount()
    {
        return $this->hasOne(Account::className(), ['id' => 'payor_account_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInvoiceDetails()
    {
        return $this->hasMany(InvoiceDetail::className(), ['invoice_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInvoiceSchedules()
    {
        return $this->hasMany(InvoiceSchedule::className(), ['invoice_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransactions()
    {
        return $this->hasMany(Transaction::className(), ['invoice_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaymentGateways()
    {
        return $this->hasMany(PaymentGateway::className(), ['id' => 'payment_gateway_id'])->viaTable('transaction', ['invoice_id' => 'id']);
    }
}
