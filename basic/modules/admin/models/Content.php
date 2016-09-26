<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "content".
 *
 * @property integer $id
 * @property string $title
 * @property string $phone1
 * @property string $phone2
 * @property string $city
 * @property string $address
 * @property string $maintext
 * @property string $rules
 */
class Content extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'content';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['maintext', 'rules'], 'string'],
            [['title', 'phone1', 'phone2', 'city', 'address'], 'string', 'max' => 250]
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
            'phone1' => 'Телефон 1',
            'phone2' => 'Телефон 2',
            'city' => 'Город',
            'address' => 'Адрес',
            'maintext' => 'Основной текст',
            'rules' => 'Условия аренды',
        ];
    }
}
