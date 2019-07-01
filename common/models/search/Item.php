<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Item as ItemModel;

/**
 * Item represents the model behind the search form about `common\models\Item`.
 */
class Item extends ItemModel
{
    public function rules()
    {
        return [
            [['id', 'category_id', 'discount', 'created_by_user_id', 'account_id'], 'integer'],
            [['name', 'description', 'status', 'price', 'tax', 'created', 'updated', 'flag'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = ItemModel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'category_id' => $this->category_id,
            'price' => $this->price,
            'tax' => $this->tax,
            'discount' => $this->discount,
            'created_by_user_id' => $this->created_by_user_id,
            'account_id' => $this->account_id,
            'created' => $this->created,
            'updated' => $this->updated,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'flag', $this->flag]);

        return $dataProvider;
    }
}
