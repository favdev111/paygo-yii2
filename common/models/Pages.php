<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pages".
 *
 * @property int $id
 * @property string $page_title
 * @property string $page_slug
 * @property string $page_content
 * @property string $created_at
 * @property string $updated_at
 */
class Pages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['page_title', 'page_slug', 'page_content'], 'required'],
            [['page_content'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
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
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
}
