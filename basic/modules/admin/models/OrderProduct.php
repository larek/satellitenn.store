<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "OrderProduct".
 *
 * @property integer $id
 * @property integer $order_id
 * @property integer $product_id
 * @property integer $category_id
 * @property integer $vendor_id
 * @property string $title
 * @property string $skuVendor
 * @property string $sku
 * @property string $photo
 * @property string $description
 * @property double $priceVendor
 * @property double $price
 * @property integer $available
 * @property string $url
 */
class OrderProduct extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'OrderProduct';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'product_id'], 'required'],
            [['order_id', 'product_id', 'category_id', 'vendor_id', 'available'], 'integer'],
            [['description'], 'string'],
            [['priceVendor', 'price'], 'number'],
            [['title', 'skuVendor', 'sku', 'photo', 'url'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'order_id' => 'Order ID',
            'product_id' => 'Product ID',
            'category_id' => 'Category ID',
            'vendor_id' => 'Vendor ID',
            'title' => 'Title',
            'skuVendor' => 'Sku Vendor',
            'sku' => 'Sku',
            'photo' => 'Photo',
            'description' => 'Description',
            'priceVendor' => 'Price Vendor',
            'price' => 'Price',
            'available' => 'Available',
            'url' => 'Url',
        ];
    }
}
