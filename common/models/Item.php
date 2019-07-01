<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "item".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $category_id
 * @property string $status
 * @property string $price
 * @property string $tax
 * @property int $discount
 * @property int $created_by_user_id
 * @property int $account_id
 * @property string $created
 * @property string $updated
 * @property int $flag
 *
 * @property InvoiceDetail[] $invoiceDetails
 * @property Account $account
 * @property ItemCategory $category
 * @property User $createdByUser
 */
class Item extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'category_id', 'status', 'price', 'discount', 'created_by_user_id', 'account_id'], 'required'],
            [['category_id', 'discount', 'created_by_user_id', 'account_id', 'flag'], 'integer'],
            [['price', 'tax', 'created', 'updated'], 'safe'],
            [['name', 'description', 'status'], 'string', 'max' => 255],
            [['account_id'], 'exist', 'skipOnError' => true, 'targetClass' => Account::className(), 'targetAttribute' => ['account_id' => 'id']],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => ItemCategory::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['created_by_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by_user_id' => 'id']],
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
            'description' => Yii::t('app', 'Description'),
            'category_id' => Yii::t('app', 'Category ID'),
            'status' => Yii::t('app', 'Status'),
            'price' => Yii::t('app', 'Price'),
            'tax' => Yii::t('app', 'Tax'),
            'discount' => Yii::t('app', 'Discount'),
            'created_by_user_id' => Yii::t('app', 'Created By User ID'),
            'account_id' => Yii::t('app', 'Account ID'),
            'created' => Yii::t('app', 'Created'),
            'updated' => Yii::t('app', 'Updated'),
            'flag' => Yii::t('app', 'Flag'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInvoiceDetails()
    {
        return $this->hasMany(InvoiceDetail::className(), ['item_id' => 'id']);
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
    public function getCategory()
    {
        return $this->hasOne(ItemCategory::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedByUser()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by_user_id']);
    }
}
