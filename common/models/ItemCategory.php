<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "item_category".
 *
 * @property int $id
 * @property string $category
 * @property string $description
 * @property string $status
 * @property int $parent_category_id
 * @property int $created_by_user_id
 * @property int $account_id
 * @property string $created
 * @property string $updated
 * @property int $flag
 *
 * @property Item[] $items
 * @property Account $account
 * @property User $createdByUser
 * @property ItemCategory $parentCategory
 * @property ItemCategory[] $itemCategories
 */
class ItemCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category', 'description', 'status', 'parent_category_id', 'created_by_user_id', 'account_id'], 'required'],
            [['parent_category_id', 'created_by_user_id', 'account_id', 'flag'], 'integer'],
            [['created', 'updated'], 'safe'],
            [['category', 'description', 'status'], 'string', 'max' => 255],
            [['account_id'], 'exist', 'skipOnError' => true, 'targetClass' => Account::className(), 'targetAttribute' => ['account_id' => 'id']],
            [['created_by_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by_user_id' => 'id']],
            [['parent_category_id'], 'exist', 'skipOnError' => true, 'targetClass' => ItemCategory::className(), 'targetAttribute' => ['parent_category_id' => 'id']],
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
            'account_id' => Yii::t('app', 'Account ID'),
            'created' => Yii::t('app', 'Created'),
            'updated' => Yii::t('app', 'Updated'),
            'flag' => Yii::t('app', 'Flag'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItems()
    {
        return $this->hasMany(Item::className(), ['category_id' => 'id']);
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
    public function getCreatedByUser()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by_user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParentCategory()
    {
        return $this->hasOne(ItemCategory::className(), ['id' => 'parent_category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItemCategories()
    {
        return $this->hasMany(ItemCategory::className(), ['parent_category_id' => 'id']);
    }
}
