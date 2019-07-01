<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "sms_template".
 *
 * @property int $id
 * @property string $name
 * @property string $subject
 * @property string $body
 * @property int $language_id
 * @property int $account_id
 * @property string $created
 * @property string $updated
 * @property int $flag
 *
 * @property Account $account
 * @property Language $language
 */
class SmsTemplate extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sms_template';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'subject', 'body', 'language_id', 'account_id'], 'required'],
            [['body'], 'string'],
            [['language_id', 'account_id', 'flag'], 'integer'],
            [['created', 'updated'], 'safe'],
            [['name', 'subject'], 'string', 'max' => 255],
            [['name', 'account_id'], 'unique', 'targetAttribute' => ['name', 'account_id']],
            [['account_id'], 'exist', 'skipOnError' => true, 'targetClass' => Account::className(), 'targetAttribute' => ['account_id' => 'id']],
            [['language_id'], 'exist', 'skipOnError' => true, 'targetClass' => Language::className(), 'targetAttribute' => ['language_id' => 'id']],
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
            'subject' => Yii::t('app', 'Subject'),
            'body' => Yii::t('app', 'Body'),
            'language_id' => Yii::t('app', 'Language ID'),
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLanguage()
    {
        return $this->hasOne(Language::className(), ['id' => 'language_id']);
    }
}
