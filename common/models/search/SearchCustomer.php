<?php

namespace common\models\search;

use common\models\Customer;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * SearchContent represents the model behind the search form about `frontend\modules\models\ProductCategory`.
 */
class SearchCustomer extends Customer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['address_id', 'user_id', 'company_id'], 'integer'],
            [['created'], 'safe'],
            [['first_name', 'last_name', 'type', 'customer_name', 'email', 'mobile'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Customer::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => array('pageSize' => 20),
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'address_id' => $this->address_id,
            'user_id' => $this->user_id,
            'company_id' => $this->company_id,
        ]);

        $query->andFilterWhere(['like', 'user_id', $this->user_id])
            ->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'customer_name', $this->customer_name])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'mobile', $this->mobile])
            ;

        return $dataProvider;
    }
}
