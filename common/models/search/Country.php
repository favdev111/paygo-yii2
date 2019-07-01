<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Country as CountryModel;

/**
 * Country represents the model behind the search form about `common\models\Country`.
 */
class Country extends CountryModel
{
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name', 'iso3', 'iso2', 'phonecode', 'capital', 'currency', 'created', 'updated', 'flag'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = CountryModel::find();

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

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'iso3', $this->iso3])
            ->andFilterWhere(['like', 'iso2', $this->iso2])
            ->andFilterWhere(['like', 'phonecode', $this->phonecode])
            ->andFilterWhere(['like', 'capital', $this->capital])
            ->andFilterWhere(['like', 'currency', $this->currency])
            ->andFilterWhere(['like', 'flag', $this->flag]);

        return $dataProvider;
    }
}
