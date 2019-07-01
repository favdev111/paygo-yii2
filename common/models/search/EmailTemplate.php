<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\EmailTemplate as EmailTemplateModel;

/**
 * EmailTemplate represents the model behind the search form about `common\models\EmailTemplate`.
 */
class EmailTemplate extends EmailTemplateModel
{
    public function rules()
    {
        return [
            [['id', 'language_id', 'account_id'], 'integer'],
            [['name', 'subject', 'body', 'created', 'updated', 'flag'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = EmailTemplateModel::find();

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
            'created' => $this->created,
            'updated' => $this->updated,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'subject', $this->subject])
            ->andFilterWhere(['like', 'body', $this->body])
            ->andFilterWhere(['like', 'flag', $this->flag]);

        return $dataProvider;
    }
}
