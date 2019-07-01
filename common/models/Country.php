<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "country".
 *
 * @property integer $id
 * @property string $country
 * @property string $code
 * @property string $iso3
 */
class Country extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'country';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country', 'code', 'iso3'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'country' => Yii::t('app', 'Country'),
            'code' => Yii::t('app', 'Code'),
            'iso3' => Yii::t('app', 'Iso3'),
        ];
    }
	
	
	public static function findCountry($id=''){
        return Country::findOne($id)->country;
        
    }
}
