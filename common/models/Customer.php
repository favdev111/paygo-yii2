<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $customer_name
 * @property string $email
 * @property string $mobile
 * @property int $address_id
 * @property int $user_id
 * @property int $company_id
 * @property string $created
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'type', 'customer_name', 'email', 'address_id', 'user_id', 'company_id', 'created'], 'required'],
            [['address_id', 'user_id', 'company_id'], 'integer'],
            [['created'], 'safe'],
            [['first_name', 'last_name', 'customer_name', 'email', 'mobile'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'first_name' => Yii::t('app', 'First Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'customer_name' => Yii::t('app', 'Customer Name'),
            'email' => Yii::t('app', 'Email'),
            'mobile' => Yii::t('app', 'Mobile'),
            'address_id' => Yii::t('app', 'Address ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'company_id' => Yii::t('app', 'Company ID'),
            'created' => Yii::t('app', 'Created'),
        ];
    }
}
