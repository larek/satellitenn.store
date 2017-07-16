<?php

namespace app\modules\rent\models;

use Yii;

/**
 * This is the model class for table "calcdata".
 *
 * @property integer $id
 * @property integer $a
 * @property integer $b
 * @property integer $c
 * @property integer $d
 * @property integer $e
 * @property integer $f
 * @property integer $g
 * @property integer $h
 * @property integer $i
 * @property integer $j
 * @property integer $k
 * @property integer $l
 * @property integer $m
 * @property integer $n
 * @property integer $o
 * @property integer $p
 */
class Calcdata extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'calcdata';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm'], 'required'],
            [['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm','n','o','p'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'a' => 'Satellite 460 до 5 суток',
            'b' => 'Satellite 460 от 5 до 15 суток',
            'c' => 'Satellite 460 более 15 суток (за каждый дополнительный день больше 15 суток)',
            'd' => 'Satellite 520 до 5 суток',
            'e' => 'Satellite 520 от 5 до 15 суток',
            'f' => 'Satellite 520 более 15 суток (за каждый дополнительный день больше 15 суток)',
            'g' => 'Satellite 400 до 5 суток',
            'h' => 'Satellite 400 от 5 до 15 суток',
            'i' => 'Satellite 400 более 15 суток (за каждый дополнительный день больше 15 суток)',
            'j' => 'поперечины отсутствуют до 30 суток',
            'k' => 'поперечины отсутствуют более 30 суток',
            'l' => 'поперечины присутствуют до 30 суток',
            'm' => 'поперечины присутствуют более 30 суток',
            'n' => 'Thule Atlantis 900 до 5 суток',
            'o' => 'Thule Atlantis 900 от 5 до 15 суток',
            'p' => 'Thule Atlantis 900 более 15 суток (за каждый дополнительный день больше 15 суток)'
            
        ];
    }
}
