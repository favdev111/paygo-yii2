<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product_category".
 *
 * @property int $id
 * @property string $category
 * @property string $description
 * @property string $status
 * @property int $parent_category_id
 * @property int $created_by_user_id
 * @property int $company_id
 * @property string $created
 * @property string $updated
 */
class ProductCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category', 'description', 'status', 'parent_category_id', 'created_by_user_id', 'company_id', 'created', 'updated'], 'required'],
            [['parent_category_id', 'created_by_user_id', 'company_id'], 'integer'],
            [['created', 'updated'], 'safe'],
            [['category', 'description', 'status'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'category' => Yii::t('app', 'Category'),
            'description' => Yii::t('app', 'Description'),
            'status' => Yii::t('app', 'Status'),
            'parent_category_id' => Yii::t('app', 'Parent Category ID'),
            'created_by_user_id' => Yii::t('app', 'Created By User ID'),
            'company_id' => Yii::t('app', 'Company ID'),
            'created' => Yii::t('app', 'Created'),
            'updated' => Yii::t('app', 'Updated'),
        ];
    }

    public function beforeValidate()
    {
        if (parent::beforeValidate()) {
            $this->created = date('Y-m-d H:i:s');
            $this->updated = date('Y-m-d H:i:s');
            return true;
        }
        return false;
    }
}
