<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\ItemCategory as ItemCategoryModel;

/**
 * ItemCategory represents the model behind the search form about `common\models\ItemCategory`.
 */
class ItemCategory extends ItemCategoryModel
{
    public function rules()
    {
        return [
            [['id', 'parent_category_id', 'created_by_user_id', 'account_id'], 'integer'],
            [['category', 'description', 'status', 'created', 'updated', 'flag'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = ItemCategoryModel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'parent_category_id' => $this->parent_category_id,
            'created_by_user_id' => $this->created_by_user_id,
            'account_id' => $this->account_id,
            'created' => $this->created,
            'updated' => $this->updated,
        ]);

        $query->andFilterWhere(['like', 'category', $this->category])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'flag', $this->flag]);

        return $dataProvider;
    }
}
