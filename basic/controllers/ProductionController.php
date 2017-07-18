<?php

namespace app\controllers;

class ProductionController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    // Single View
    public function actionSingle($id){
    	return $this->render($id);
    }

}
