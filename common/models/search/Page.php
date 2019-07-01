<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Page as PageModel;

/**
 * Page represents the model behind the search form about `common\models\Page`.
 */
class Page extends PageModel
{
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['page_title', 'page_slug', 'page_content', 'created', 'updated', 'flag'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = PageModel::find();

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

        $query->andFilterWhere(['like', 'page_title', $this->page_title])
            ->andFilterWhere(['like', 'page_slug', $this->page_slug])
            ->andFilterWhere(['like', 'page_content', $this->page_content])
            ->andFilterWhere(['like', 'flag', $this->flag]);

        return $dataProvider;
    }
}
