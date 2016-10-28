<?php

namespace app\modules\admin\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Slider;

/**
 * SliderSearch represents the model behind the search form about `app\modules\admin\models\Slider`.
 */
class SliderSearch extends Slider
{
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['title', 'content', 'guid', 'dateCreated', 'image'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Slider::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'dateCreated' => $this->dateCreated,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'guid', $this->guid])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
