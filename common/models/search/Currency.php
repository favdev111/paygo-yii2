<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Currency as CurrencyModel;

/**
 * Currency represents the model behind the search form about `common\models\Currency`.
 */
class Currency extends CurrencyModel
{
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['country', 'currency', 'code', 'symbol', 'created', 'updated', 'flag'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = CurrencyModel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'created' => $this->created,
            'updated' => $this->updated,
        ]);

        $query->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'currency', $this->currency])
            ->andFilterWhere(['like', 'code', $this->code])
            ->andFilterWhere(['like', 'symbol', $this->symbol])
            ->andFilterWhere(['like', 'flag', $this->flag]);

        return $dataProvider;
    }
}
