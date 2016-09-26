<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "calculator".
 *
 * @property integer $id
 * @property string $title
 * @property integer $value
 */
class Calc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'calculator';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'value'], 'required'],
            [['value'], 'integer'],
            [['title'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'value' => 'Value',
        ];
    }
}
