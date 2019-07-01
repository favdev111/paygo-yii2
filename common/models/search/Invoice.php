<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Invoice as InvoiceModel;

/**
 * Invoice represents the model behind the search form about `common\models\Invoice`.
 */
class Invoice extends InvoiceModel
{
    public function rules()
    {
        return [
            [['id', 'payor_account_id', 'created_by_user_id', 'payee_account_id'], 'integer'],
            [['invoice_number', 'invoice_type', 'status', 'due_date', 'last_payment_date', 'created', 'updated', 'flag', 'notes', 'memo', 'amount', 'external_invoice_number'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = InvoiceModel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'payor_account_id' => $this->payor_account_id,
            'due_date' => $this->due_date,
            'last_payment_date' => $this->last_payment_date,
            'created_by_user_id' => $this->created_by_user_id,
            'payee_account_id' => $this->payee_account_id,
            'created' => $this->created,
            'updated' => $this->updated,
        ]);

        $query->andFilterWhere(['like', 'invoice_number', $this->invoice_number])
            ->andFilterWhere(['like', 'invoice_type', $this->invoice_type])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'flag', $this->flag])
            ->andFilterWhere(['like', 'notes', $this->notes])
            ->andFilterWhere(['like', 'memo', $this->memo])
            ->andFilterWhere(['like', 'amount', $this->amount])
            ->andFilterWhere(['like', 'external_invoice_number', $this->external_invoice_number]);

        return $dataProvider;
    }
}
