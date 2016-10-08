<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "ATLANT".
 *
 * @property integer $id
 * @property string $category
 * @property string $vendor
 * @property string $sku
 * @property double $price_vendor
 * @property double $price
 * @property string $title
 * @property string $description
 */
class Atlant extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ATLANT';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['price_vendor', 'price'], 'number'],
            [['category', 'vendor', 'sku', 'title', 'description'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category' => 'Category',
            'vendor' => 'Vendor',
            'sku' => 'Sku',
            'price_vendor' => 'Price Vendor',
            'price' => 'Price',
            'title' => 'Title',
            'description' => 'Description',
        ];
    }
}
