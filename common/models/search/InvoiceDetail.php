<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\InvoiceDetail as InvoiceDetailModel;

/**
 * InvoiceDetail represents the model behind the search form about `common\models\InvoiceDetail`.
 */
class InvoiceDetail extends InvoiceDetailModel
{
    public function rules()
    {
        return [
            [['id', 'item_id', 'tax_type_id', 'invoice_id'], 'integer'],
            [['title', 'description', 'item_amount', 'tax_type', 'tax_amount', 'discount_type', 'discount_amount', 'subtotal', 'created', 'updated', 'flag'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = InvoiceDetailModel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'item_id' => $this->item_id,
            'tax_type_id' => $this->tax_type_id,
            'discount_amount' => $this->discount_amount,
            'invoice_id' => $this->invoice_id,
            'created' => $this->created,
            'updated' => $this->updated,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'item_amount', $this->item_amount])
            ->andFilterWhere(['like', 'tax_type', $this->tax_type])
            ->andFilterWhere(['like', 'tax_amount', $this->tax_amount])
            ->andFilterWhere(['like', 'discount_type', $this->discount_type])
            ->andFilterWhere(['like', 'subtotal', $this->subtotal])
            ->andFilterWhere(['like', 'flag', $this->flag]);

        return $dataProvider;
    }
}
