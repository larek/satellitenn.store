<?php

namespace app\controllers;
use app\modules\admin\models\Pages;
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

}
