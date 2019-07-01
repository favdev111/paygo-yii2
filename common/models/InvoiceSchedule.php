<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "invoice_schedule".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $amount
 * @property string $type
 * @property string $due_date
 * @property int $percentage
 * @property int $invoice_id
 * @property string $created
 * @property string $updated
 * @property int $flag
 *
 * @property Invoice $invoice
 * @property Transaction[] $transactions
 */
class InvoiceSchedule extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'invoice_schedule';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description', 'amount', 'type', 'due_date', 'percentage', 'invoice_id'], 'required'],
            [['due_date', 'created', 'updated'], 'safe'],
            [['percentage', 'invoice_id', 'flag'], 'integer'],
            [['title', 'description', 'amount', 'type'], 'string', 'max' => 255],
            [['invoice_id'], 'exist', 'skipOnError' => true, 'targetClass' => Invoice::className(), 'targetAttribute' => ['invoice_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'description' => Yii::t('app', 'Description'),
            'amount' => Yii::t('app', 'Amount'),
            'type' => Yii::t('app', 'Type'),
            'due_date' => Yii::t('app', 'Due Date'),
            'percentage' => Yii::t('app', 'Percentage'),
            'invoice_id' => Yii::t('app', 'Invoice ID'),
            'created' => Yii::t('app', 'Created'),
            'updated' => Yii::t('app', 'Updated'),
            'flag' => Yii::t('app', 'Flag'),
        ];
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
    public function getTransactions()
    {
        return $this->hasMany(Transaction::className(), ['invoice_schedule_id' => 'id']);
    }
}
