<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "discount_type".
 *
 * @property int $id
 * @property string $name
 * @property string $value
 * @property string $type
 * @property int $account_id
 * @property string $created
 * @property string $updated
 * @property int $flag
 *
 * @property Account $account
 */
class DiscountType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'discount_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'value', 'type', 'account_id'], 'required'],
            [['account_id', 'flag'], 'integer'],
            [['created', 'updated'], 'safe'],
            [['name', 'value', 'type'], 'string', 'max' => 255],
            [['name', 'account_id'], 'unique', 'targetAttribute' => ['name', 'account_id']],
            [['account_id'], 'exist', 'skipOnError' => true, 'targetClass' => Account::className(), 'targetAttribute' => ['account_id' => 'id']],
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
            'value' => Yii::t('app', 'Value'),
            'type' => Yii::t('app', 'Type'),
            'account_id' => Yii::t('app', 'Account ID'),
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
}
