<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "Order".
 *
 * @property integer $id
 * @property string $name
 * @property string $contact
 * @property string $date
 * @property string $secret_key
 * @property string $city
 * @property string $ip
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['name', 'contact', 'secret_key', 'city', 'ip'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'contact' => 'Contact',
            'date' => 'Date',
            'secret_key' => 'Secret Key',
            'city' => 'City',
            'ip' => 'Ip',
        ];
    }
}
