<?php

namespace app\modules\admin\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Order;

/**
 * OrderSearch represents the model behind the search form about `app\modules\admin\models\Order`.
 */
class OrderSearch extends Order
{
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name', 'contact', 'date', 'secret_key', 'city', 'ip'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Order::find()->orderBy(['id' => SORT_DESC]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'date' => $this->date,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'contact', $this->contact])
            ->andFilterWhere(['like', 'secret_key', $this->secret_key])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'ip', $this->ip]);

        return $dataProvider;
    }
}
