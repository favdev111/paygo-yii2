<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\AccountRelationType as AccountRelationTypeModel;

/**
 * AccountRelationType represents the model behind the search form about `common\models\AccountRelationType`.
 */
class AccountRelationType extends AccountRelationTypeModel
{
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['type', 'created', 'updated', 'flag'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = AccountRelationTypeModel::find();

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

        $query->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'flag', $this->flag]);

        return $dataProvider;
    }
}
