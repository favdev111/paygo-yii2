<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "page".
 *
 * @property int $id
 * @property string $page_title
 * @property string $page_slug
 * @property string $page_content
 * @property string $created
 * @property string $updated
 * @property int $flag
 */
class Page extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'page';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['page_title', 'page_slug', 'page_content'], 'required'],
            [['page_content'], 'string'],
            [['created', 'updated'], 'safe'],
            [['flag'], 'integer'],
            [['page_title', 'page_slug'], 'string', 'max' => 199],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'page_title' => Yii::t('app', 'Page Title'),
            'page_slug' => Yii::t('app', 'Page Slug'),
            'page_content' => Yii::t('app', 'Page Content'),
            'created' => Yii::t('app', 'Created'),
            'updated' => Yii::t('app', 'Updated'),
            'flag' => Yii::t('app', 'Flag'),
        ];
    }
}
