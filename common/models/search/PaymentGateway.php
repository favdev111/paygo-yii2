<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\PaymentGateway as PaymentGatewayModel;

/**
 * PaymentGateway represents the model behind the search form about `common\models\PaymentGateway`.
 */
class PaymentGateway extends PaymentGatewayModel
{
    public function rules()
    {
        return [
            [['id', 'account_id', 'currency_id'], 'integer'],
            [['name', 'bank', 'url', 'username', 'password', 'signature', 'logo', 'large_logo', 'created', 'updated', 'flag'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = PaymentGatewayModel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'account_id' => $this->account_id,
            'currency_id' => $this->currency_id,
            'created' => $this->created,
            'updated' => $this->updated,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'bank', $this->bank])
            ->andFilterWhere(['like', 'url', $this->url])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'signature', $this->signature])
            ->andFilterWhere(['like', 'logo', $this->logo])
            ->andFilterWhere(['like', 'large_logo', $this->large_logo])
            ->andFilterWhere(['like', 'flag', $this->flag]);

        return $dataProvider;
    }
}
