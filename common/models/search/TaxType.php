<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TaxType as TaxTypeModel;

/**
 * TaxType represents the model behind the search form about `common\models\TaxType`.
 */
class TaxType extends TaxTypeModel
{
    public function rules()
    {
        return [
            [['id', 'account_id'], 'integer'],
            [['name', 'value', 'type', 'created', 'updated', 'flag'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = TaxTypeModel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'account_id' => $this->account_id,
            'created' => $this->created,
            'updated' => $this->updated,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'value', $this->value])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'flag', $this->flag]);

        return $dataProvider;
    }
}
