<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property integer $order_id
 * @property integer $active
 * @property integer $header
 * @property string $title
 * @property string $image
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['order_id', 'active', 'header'], 'integer'],
            [['title', 'image', 'url'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'active' => 'Категория активна',
            'order_id' => 'Порядковый номер категории',
            'header' => 'Категория отображается в шапке',
            'title' => 'Название',
            'image' => 'Изображение',
        ];
    }
}
