<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "THULE".
 *
 * @property integer $id
 * @property string $category
 * @property string $vendor
 * @property string $sku
 * @property double $price
 * @property string $title
 * @property string $description
 */
class Thule extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'THULE';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['price'], 'number'],
            [['description'], 'string'],
            [['category', 'vendor', 'sku', 'title'], 'string', 'max' => 250]
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
            'price' => 'Price',
            'title' => 'Title',
            'description' => 'Description',
        ];
    }
}
