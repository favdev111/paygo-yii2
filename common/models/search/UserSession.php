<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\UserSession as UserSessionModel;

/**
 * UserSession represents the model behind the search form about `common\models\UserSession`.
 */
class UserSession extends UserSessionModel
{
    public function rules()
    {
        return [
            [['id', 'user_id', 'status', 'account_id', 'country_id', 'logout_datetime'], 'integer'],
            [['username', 'mobile', 'email', 'ip', 'device', 'browser', 'device_mac_address', 'browser_version', 'created', 'updated', 'flag', 'login_datetime'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = UserSessionModel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'user_id' => $this->user_id,
            'status' => $this->status,
            'account_id' => $this->account_id,
            'country_id' => $this->country_id,
            'created' => $this->created,
            'updated' => $this->updated,
            'login_datetime' => $this->login_datetime,
            'logout_datetime' => $this->logout_datetime,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'mobile', $this->mobile])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'ip', $this->ip])
            ->andFilterWhere(['like', 'device', $this->device])
            ->andFilterWhere(['like', 'browser', $this->browser])
            ->andFilterWhere(['like', 'device_mac_address', $this->device_mac_address])
            ->andFilterWhere(['like', 'browser_version', $this->browser_version])
            ->andFilterWhere(['like', 'flag', $this->flag]);

        return $dataProvider;
    }
}
