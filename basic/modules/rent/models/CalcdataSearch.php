<?php

namespace app\modules\rent\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\rent\models\Calcdata;

/**
 * CalcdataSearch represents the model behind the search form about `app\modules\rent\models\Calcdata`.
 */
class CalcdataSearch extends Calcdata
{
    public function rules()
    {
        return [
            [['id', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm'], 'integer'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Calcdata::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'a' => $this->a,
            'b' => $this->b,
            'c' => $this->c,
            'd' => $this->d,
            'e' => $this->e,
            'f' => $this->f,
            'g' => $this->g,
            'h' => $this->h,
            'i' => $this->i,
            'j' => $this->j,
            'k' => $this->k,
            'l' => $this->l,
            'm' => $this->m,
        ]);

        return $dataProvider;
    }
}
