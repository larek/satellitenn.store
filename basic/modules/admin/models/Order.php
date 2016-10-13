<?php

namespace app\modules\admin\models;

use Yii;
use app\modules\admin\models\OrderProduct;
use yii\data\ActiveDataProvider;

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

    public function getProductsDataProvider($id){
        return $dataProvider = new ActiveDataProvider([
                'query' => OrderProduct::find()->where(['order_id' => $id])
            ]);
    }
    public function getProducts(){
        return $this->hasMany(OrderProduct::className(),['order_id' => 'id']);
    }
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
            'id' => 'Номер заказа',
            'name' => 'Имя',
            'contact' => 'Контакты',
            'date' => 'Дата',
            'secret_key' => 'Secret Key',
            'city' => 'City',
            'ip' => 'Ip',
        ];
    }
}
