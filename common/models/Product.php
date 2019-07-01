<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product".
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
 * @property int $company_id
 * @property string $created
 * @property string $updated
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'category_id', 'status', 'price', 'discount', 'created_by_user_id', 'company_id', 'created', 'updated'], 'required'],
            [['category_id', 'discount', 'created_by_user_id', 'company_id'], 'integer'],
            [['price', 'tax', 'created', 'updated'], 'safe'],
            [['name', 'description', 'status'], 'string', 'max' => 255],
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
            'company_id' => Yii::t('app', 'Company ID'),
            'created' => Yii::t('app', 'Created'),
            'updated' => Yii::t('app', 'Updated'),
        ];
    }
}
