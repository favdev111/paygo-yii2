<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "currency".
 *
 * @property int $id
 * @property string $country
 * @property string $currency
 * @property string $code
 * @property string $symbol
 * @property string $created
 * @property string $updated
 * @property int $flag
 *
 * @property PaymentGateway[] $paymentGateways
 * @property Transaction[] $transactions
 */
class Currency extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'currency';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created', 'updated'], 'safe'],
            [['flag'], 'integer'],
            [['country', 'currency', 'code', 'symbol'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'country' => Yii::t('app', 'Country'),
            'currency' => Yii::t('app', 'Currency'),
            'code' => Yii::t('app', 'Code'),
            'symbol' => Yii::t('app', 'Symbol'),
            'created' => Yii::t('app', 'Created'),
            'updated' => Yii::t('app', 'Updated'),
            'flag' => Yii::t('app', 'Flag'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaymentGateways()
    {
        return $this->hasMany(PaymentGateway::className(), ['currency_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransactions()
    {
        return $this->hasMany(Transaction::className(), ['currency_id' => 'id']);
    }
}
