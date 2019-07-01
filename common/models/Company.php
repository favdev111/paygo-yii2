<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "company".
 *
 * @property int $id
 * @property string $name
 * @property string $subdomain
 * @property string $email
 * @property string $phone
 * @property string $mobile
 * @property string $fax
 * @property string $support_email
 * @property string $billing_email
 * @property string $privacy
 * @property string $terms
 * @property int $address_id
 * @property int $user_id
 * @property string $created
 * @property string $updated
 */
class Company extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'company';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'subdomain', 'email', 'phone', 'mobile', 'fax', 'support_email', 'billing_email', 'privacy', 'terms', 'address_id', 'user_id', 'created', 'updated'], 'required'],
            [['privacy', 'terms'], 'string'],
            [['address_id', 'user_id'], 'integer'],
            [['created', 'updated'], 'safe'],
            [['name', 'subdomain', 'email', 'phone', 'mobile', 'fax', 'support_email', 'billing_email'], 'string', 'max' => 255],
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
            'subdomain' => Yii::t('app', 'Subdomain'),
            'email' => Yii::t('app', 'Email'),
            'phone' => Yii::t('app', 'Phone'),
            'mobile' => Yii::t('app', 'Mobile'),
            'fax' => Yii::t('app', 'Fax'),
            'support_email' => Yii::t('app', 'Support Email'),
            'billing_email' => Yii::t('app', 'Billing Email'),
            'privacy' => Yii::t('app', 'Privacy'),
            'terms' => Yii::t('app', 'Terms'),
            'address_id' => Yii::t('app', 'Address ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'created' => Yii::t('app', 'Created'),
            'updated' => Yii::t('app', 'Updated'),
        ];
    }
}
