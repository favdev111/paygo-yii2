<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Account as AccountModel;

/**
 * Account represents the model behind the search form about `common\models\Account`.
 */
class Account extends AccountModel
{
    public function rules()
    {
        return [
            [['id', 'account_type_id'], 'integer'],
            [['first_name', 'last_name', 'name', 'subdomain', 'email', 'phone', 'mobile', 'fax', 'privacy', 'terms', 'smtp_server', 'use_authentication', 'use_secure_connection', 'use_secure_connection_type', 'smtp_username', 'smtp_password', 'smtp_port', 'created', 'updated', 'flag'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = AccountModel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'account_type_id' => $this->account_type_id,
            'created' => $this->created,
            'updated' => $this->updated,
        ]);

        $query->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'subdomain', $this->subdomain])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'mobile', $this->mobile])
            ->andFilterWhere(['like', 'fax', $this->fax])
            ->andFilterWhere(['like', 'privacy', $this->privacy])
            ->andFilterWhere(['like', 'terms', $this->terms])
            ->andFilterWhere(['like', 'smtp_server', $this->smtp_server])
            ->andFilterWhere(['like', 'use_authentication', $this->use_authentication])
            ->andFilterWhere(['like', 'use_secure_connection', $this->use_secure_connection])
            ->andFilterWhere(['like', 'use_secure_connection_type', $this->use_secure_connection_type])
            ->andFilterWhere(['like', 'smtp_username', $this->smtp_username])
            ->andFilterWhere(['like', 'smtp_password', $this->smtp_password])
            ->andFilterWhere(['like', 'smtp_port', $this->smtp_port])
            ->andFilterWhere(['like', 'flag', $this->flag]);

        return $dataProvider;
    }
}
