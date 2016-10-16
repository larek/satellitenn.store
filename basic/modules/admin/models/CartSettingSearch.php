<?php

namespace app\modules\admin\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\CartSetting;

/**
 * CartSettingSearch represents the model behind the search form about `app\modules\admin\models\CartSetting`.
 */
class CartSettingSearch extends CartSetting
{
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['method', 'delivery'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = CartSetting::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'method', $this->method])
            ->andFilterWhere(['like', 'delivery', $this->delivery]);

        return $dataProvider;
    }
}
