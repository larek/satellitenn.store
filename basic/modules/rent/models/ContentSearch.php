<?php

namespace app\modules\rent\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\rent\models\Content;

/**
 * ContentSearch represents the model behind the search form about `app\modules\rent\models\Content`.
 */
class ContentSearch extends Content
{
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['title', 'phone1', 'phone2', 'city', 'address', 'maintext', 'rules'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Content::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'phone1', $this->phone1])
            ->andFilterWhere(['like', 'phone2', $this->phone2])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'maintext', $this->maintext])
            ->andFilterWhere(['like', 'rules', $this->rules]);

        return $dataProvider;
    }
}
