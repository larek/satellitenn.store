<?php

namespace app\controllers;
use app\modules\admin\models\Pages;
use app\modules\admin\models\Gallery;

class ProductionController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    // Single View
    public function actionSingle($id){
    	$model = false;
    	switch ($id) {
    		case 'wherebuy':
    			$model = Pages::findOne(6);
    			break;
    	}
    	return $this->render($id,[
    			'model' => $model
    		]);
    }

    // Gallery Page
    public function actionGallery(){
        $model = Gallery::find()->all();
        return $this->render('gallery',[
                'model' => $model
            ]);
    }

}
