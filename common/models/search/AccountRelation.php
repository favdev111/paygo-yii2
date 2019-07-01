<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\AccountRelation as AccountRelationModel;

/**
 * AccountRelation represents the model behind the search form about `common\models\AccountRelation`.
 */
class AccountRelation extends AccountRelationModel
{
    public function rules()
    {
        return [
            [['id', 'payee_account_id', 'payee_account_relation_type_id', 'payor_account_id', 'payor_account_relation_type_id'], 'integer'],
            [['created', 'updated', 'flag'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = AccountRelationModel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'payee_account_id' => $this->payee_account_id,
            'payee_account_relation_type_id' => $this->payee_account_relation_type_id,
            'payor_account_id' => $this->payor_account_id,
            'payor_account_relation_type_id' => $this->payor_account_relation_type_id,
            'created' => $this->created,
            'updated' => $this->updated,
        ]);

        $query->andFilterWhere(['like', 'flag', $this->flag]);

        return $dataProvider;
    }
}
