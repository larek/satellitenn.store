<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property integer $category_id
 * @property integer $vendor_id
 * @property string $title
 * @property string $skuVendor
 * @property string $sku
 * @property string $photo
 * @property string $description
 * @property integer $priceVendor
 * @property double $price
 * @property integer $available
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id','title'], 'required'],
            [['category_id', 'vendor_id', 'available'], 'integer'],
            [['description'], 'string'],
            [['priceVendor', 'price'], 'number'],
            [['title', 'skuVendor', 'sku', 'photo'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Категория',
            'vendor_id' => 'Производитель',
            'title' => 'Название',
            'skuVendor' => 'Артикул производителя',
            'sku' => 'Артикул',
            'photo' => 'Изображение',
            'description' => 'Описание',
            'priceVendor' => 'Цена производителя',
            'price' => 'Цена',
            'available' => 'Активен',
        ];
    }
}
