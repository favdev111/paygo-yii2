<?php

namespace common\models\search;

use common\models\ProductCategory;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * SearchContent represents the model behind the search form about `frontend\modules\models\ProductCategory`.
 */
class SearchProductCategory extends ProductCategory
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'parent_category_id', 'created_by_user_id', 'company_id'], 'integer'],
            [['created', 'updated'], 'safe'],
            [['category', 'description', 'status'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = ProductCategory::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => array('pageSize' => 20),
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'company_id' => $this->company_id,
            'parent_category_id' => $this->parent_category_id,
            'created_by_user_id' => $this->created_by_user_id,
        ]);

        $query->andFilterWhere(['like', 'id', $this->id])
            ->andFilterWhere(['like', 'category', $this->category])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
