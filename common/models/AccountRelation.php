<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "account_relation".
 *
 * @property int $id
 * @property int $payee_account_id
 * @property int $payee_account_relation_type_id
 * @property int $payor_account_id
 * @property int $payor_account_relation_type_id
 * @property string $created
 * @property string $updated
 * @property int $flag
 *
 * @property Account $payeeAccount
 * @property AccountRelationType $payeeAccountRelationType
 * @property Account $payorAccount
 * @property AccountRelationType $payorAccountRelationType
 */
class AccountRelation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'account_relation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['payee_account_id', 'payor_account_id'], 'required'],
            [['payee_account_id', 'payee_account_relation_type_id', 'payor_account_id', 'payor_account_relation_type_id', 'flag'], 'integer'],
            [['created', 'updated'], 'safe'],
            [['payee_account_id'], 'exist', 'skipOnError' => true, 'targetClass' => Account::className(), 'targetAttribute' => ['payee_account_id' => 'id']],
            [['payee_account_relation_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => AccountRelationType::className(), 'targetAttribute' => ['payee_account_relation_type_id' => 'id']],
            [['payor_account_id'], 'exist', 'skipOnError' => true, 'targetClass' => Account::className(), 'targetAttribute' => ['payor_account_id' => 'id']],
            [['payor_account_relation_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => AccountRelationType::className(), 'targetAttribute' => ['payor_account_relation_type_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'payee_account_id' => Yii::t('app', 'Payee Account ID'),
            'payee_account_relation_type_id' => Yii::t('app', 'Payee Account Relation Type ID'),
            'payor_account_id' => Yii::t('app', 'Payor Account ID'),
            'payor_account_relation_type_id' => Yii::t('app', 'Payor Account Relation Type ID'),
            'created' => Yii::t('app', 'Created'),
            'updated' => Yii::t('app', 'Updated'),
            'flag' => Yii::t('app', 'Flag'),
        ];
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
    public function getPayeeAccountRelationType()
    {
        return $this->hasOne(AccountRelationType::className(), ['id' => 'payee_account_relation_type_id']);
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
    public function getPayorAccountRelationType()
    {
        return $this->hasOne(AccountRelationType::className(), ['id' => 'payor_account_relation_type_id']);
    }
}
