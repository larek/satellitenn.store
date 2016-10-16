<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "CartSetting".
 *
 * @property integer $id
 * @property string $method
 * @property string $delivery
 */
class CartSetting extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'CartSetting';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['method', 'delivery'], 'required'],
            [['method', 'delivery'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'method' => 'Способы оплаты',
            'delivery' => 'Методы доставки',
        ];
    }
}
