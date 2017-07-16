<?php

namespace app\modules\rent\models;

use Yii;

/**
 * This is the model class for table "slider".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property string $guid
 * @property integer $order_id
 * @property string $image
 */
class Slider extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rent_slider';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['order_id'], 'integer'],
            [['title', 'guid', 'image'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'content' => 'Описание',
            'guid' => 'Ссылка',
            'order_id' => 'Порядок',
            'image' => 'Изображение (600px / 400px)',
        ];
    }
}
