<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Transaction as TransactionModel;

/**
 * Transaction represents the model behind the search form about `common\models\Transaction`.
 */
class Transaction extends TransactionModel
{
    public function rules()
    {
        return [
            [['id', 'invoice_id', 'invoice_schedule_id', 'payment_gateway_id', 'currency_id', 'payor_account_id', 'payee_account_id', 'user_id'], 'integer'],
            [['invoice_number', 'amount', 'transaction_date', 'transaction_id', 'status', 'response', 'created', 'updated', 'flag'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = TransactionModel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'invoice_id' => $this->invoice_id,
            'invoice_schedule_id' => $this->invoice_schedule_id,
            'transaction_date' => $this->transaction_date,
            'payment_gateway_id' => $this->payment_gateway_id,
            'currency_id' => $this->currency_id,
            'payor_account_id' => $this->payor_account_id,
            'payee_account_id' => $this->payee_account_id,
            'user_id' => $this->user_id,
            'created' => $this->created,
            'updated' => $this->updated,
        ]);

        $query->andFilterWhere(['like', 'invoice_number', $this->invoice_number])
            ->andFilterWhere(['like', 'amount', $this->amount])
            ->andFilterWhere(['like', 'transaction_id', $this->transaction_id])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'response', $this->response])
            ->andFilterWhere(['like', 'flag', $this->flag]);

        return $dataProvider;
    }
}
