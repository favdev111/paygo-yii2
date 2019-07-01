<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "invoice_detail".
 *
 * @property int $id
 * @property int $item_id
 * @property string $title
 * @property string $description
 * @property string $item_amount
 * @property int $tax_type_id
 * @property string $tax_type
 * @property string $tax_amount
 * @property string $discount_type
 * @property string $discount_amount
 * @property string $subtotal
 * @property int $invoice_id
 * @property string $created
 * @property string $updated
 * @property int $flag
 *
 * @property Invoice $invoice
 * @property Item $item
 * @property TaxType $taxType
 */
class InvoiceDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'invoice_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['item_id', 'title', 'description', 'item_amount', 'tax_type_id', 'tax_type', 'tax_amount', 'discount_type', 'subtotal', 'invoice_id'], 'required'],
            [['item_id', 'tax_type_id', 'invoice_id', 'flag'], 'integer'],
            [['discount_amount', 'created', 'updated'], 'safe'],
            [['title', 'description', 'item_amount', 'tax_type', 'tax_amount', 'discount_type', 'subtotal'], 'string', 'max' => 255],
            [['invoice_id'], 'exist', 'skipOnError' => true, 'targetClass' => Invoice::className(), 'targetAttribute' => ['invoice_id' => 'id']],
            [['item_id'], 'exist', 'skipOnError' => true, 'targetClass' => Item::className(), 'targetAttribute' => ['item_id' => 'id']],
            [['tax_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => TaxType::className(), 'targetAttribute' => ['tax_type_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'item_id' => Yii::t('app', 'Item ID'),
            'title' => Yii::t('app', 'Title'),
            'description' => Yii::t('app', 'Description'),
            'item_amount' => Yii::t('app', 'Item Amount'),
            'tax_type_id' => Yii::t('app', 'Tax Type ID'),
            'tax_type' => Yii::t('app', 'Tax Type'),
            'tax_amount' => Yii::t('app', 'Tax Amount'),
            'discount_type' => Yii::t('app', 'Discount Type'),
            'discount_amount' => Yii::t('app', 'Discount Amount'),
            'subtotal' => Yii::t('app', 'Subtotal'),
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
    public function getItem()
    {
        return $this->hasOne(Item::className(), ['id' => 'item_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaxType()
    {
        return $this->hasOne(TaxType::className(), ['id' => 'tax_type_id']);
    }
}
