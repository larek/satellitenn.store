<?php

namespace app\modules\admin\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Product;

/**
 * ProductSearch represents the model behind the search form about `app\modules\admin\models\Product`.
 */
class ProductSearch extends Product
{
    public function rules()
    {
        return [
            [['id', 'category_id', 'vendor_id', 'priceVendor', 'available'], 'integer'],
            [['title', 'skuVendor', 'sku', 'photo', 'description'], 'safe'],
            [['price'], 'number'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Product::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'category_id' => $this->category_id,
            'vendor_id' => $this->vendor_id,
            'priceVendor' => $this->priceVendor,
            'price' => $this->price,
            'available' => $this->available,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'skuVendor', $this->skuVendor])
            ->andFilterWhere(['like', 'sku', $this->sku])
            ->andFilterWhere(['like', 'photo', $this->photo])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
