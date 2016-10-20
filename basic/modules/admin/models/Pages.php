<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "pages".
 *
 * @property integer $id
 * @property integer $parent_id
 * @property string $title
 * @property string $content
 * @property string $url
 * @property string $seo_title
 * @property string $seo_description
 * @property string $seo_keywords
 * @property string $type
 * @property string $dateCreated
 */
class Pages extends \yii\db\ActiveRecord
{
    public function beforeSave($insert){
        if(parent::beforeSave($insert)){
            $this->url = Yii::$app->str2url->parse($this->title);
            return true;
        }else{
            return false;
        }
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['parent_id'], 'integer'],
            [['content', 'seo_description'], 'string'],
            [['dateCreated'], 'safe'],
            [['title', 'url', 'seo_title', 'seo_keywords', 'type'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Parent ID',
            'title' => 'Заголовок',
            'content' => 'Содержание',
            'url' => 'Url',
            'seo_title' => 'Seo Title',
            'seo_description' => 'Seo Description',
            'seo_keywords' => 'Seo Keywords',
            'type' => 'Type',
            'dateCreated' => 'Date Created',
        ];
    }
}
