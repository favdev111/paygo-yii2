<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "language".
 *
 * @property int $id
 * @property string $language
 * @property string $iso_639-1
 * @property string $created
 * @property string $updated
 * @property int $flag
 *
 * @property EmailTemplate[] $emailTemplates
 * @property InvoiceTemplate[] $invoiceTemplates
 * @property SmsTemplate[] $smsTemplates
 */
class Language extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'language';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['language', 'iso_639-1'], 'required'],
            [['created', 'updated'], 'safe'],
            [['flag'], 'integer'],
            [['language', 'iso_639-1'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'language' => Yii::t('app', 'Language'),
            'iso_639-1' => Yii::t('app', 'Iso 639 1'),
            'created' => Yii::t('app', 'Created'),
            'updated' => Yii::t('app', 'Updated'),
            'flag' => Yii::t('app', 'Flag'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmailTemplates()
    {
        return $this->hasMany(EmailTemplate::className(), ['language_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInvoiceTemplates()
    {
        return $this->hasMany(InvoiceTemplate::className(), ['language_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSmsTemplates()
    {
        return $this->hasMany(SmsTemplate::className(), ['language_id' => 'id']);
    }
}
