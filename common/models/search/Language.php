<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Language as LanguageModel;

/**
 * Language represents the model behind the search form about `common\models\Language`.
 */
class Language extends LanguageModel
{
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['language', 'iso_639-1', 'created', 'updated', 'flag'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = LanguageModel::find();

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

        $query->andFilterWhere(['like', 'language', $this->language])
            ->andFilterWhere(['like', 'iso_639-1', $this->iso_639-1])
            ->andFilterWhere(['like', 'flag', $this->flag]);

        return $dataProvider;
    }
}
