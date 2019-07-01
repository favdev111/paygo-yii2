<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\InvoiceTemplate as InvoiceTemplateModel;

/**
 * InvoiceTemplate represents the model behind the search form about `common\models\InvoiceTemplate`.
 */
class InvoiceTemplate extends InvoiceTemplateModel
{
    public function rules()
    {
        return [
            [['id', 'language_id', 'account_id'], 'integer'],
            [['name', 'subject', 'body'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = InvoiceTemplateModel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'language_id' => $this->language_id,
            'account_id' => $this->account_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'subject', $this->subject])
            ->andFilterWhere(['like', 'body', $this->body]);

        return $dataProvider;
    }
}
