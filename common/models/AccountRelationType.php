<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "account_relation_type".
 *
 * @property int $id
 * @property string $type
 * @property string $created
 * @property string $updated
 * @property int $flag
 *
 * @property AccountRelation[] $accountRelations
 * @property AccountRelation[] $accountRelations0
 */
class AccountRelationType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'account_relation_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type'], 'required'],
            [['created', 'updated'], 'safe'],
            [['flag'], 'integer'],
            [['type'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'type' => Yii::t('app', 'Type'),
            'created' => Yii::t('app', 'Created'),
            'updated' => Yii::t('app', 'Updated'),
            'flag' => Yii::t('app', 'Flag'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccountRelations()
    {
        return $this->hasMany(AccountRelation::className(), ['payee_account_relation_type_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccountRelations0()
    {
        return $this->hasMany(AccountRelation::className(), ['payor_account_relation_type_id' => 'id']);
    }
}
