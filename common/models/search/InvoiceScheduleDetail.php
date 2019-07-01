<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\InvoiceSchedule;

/**
 * InvoiceScheduleDetail represents the model behind the search form about `common\models\InvoiceSchedule`.
 */
class InvoiceScheduleDetail extends InvoiceSchedule
{
    public function rules()
    {
        return [
            [['id', 'percentage', 'invoice_id'], 'integer'],
            [['title', 'description', 'amount', 'type', 'due_date', 'created', 'updated'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = InvoiceSchedule::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'due_date' => $this->due_date,
            'percentage' => $this->percentage,
            'invoice_id' => $this->invoice_id,
            'created' => $this->created,
            'updated' => $this->updated,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'amount', $this->amount])
            ->andFilterWhere(['like', 'type', $this->type]);

        return $dataProvider;
    }
}
