<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use yii\filters\AccessControl;
use app\modules\admin\models\Gallery;

class DefaultController extends Controller
{

	    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index','gallery','delete-portfolio','set-user-portfolio','get-user-portfolio'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ]
        ];
    }
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionGallery(){
        return $this->render('gallery');
    }

    // Delete gallery image
    public function actionDeletePortfolio($id){
        $model = Gallery::findOne($id);
        echo json_encode($model->delete());

    }

    // Set user gallery image
    public function actionSetUserPortfolio(){
        $model = new Gallery;
        $model->image = $_GET['image'];
        echo json_encode($model->save());
        
    }

    // Get user gallery
    public function actionGetUserPortfolio(){
        $model = Gallery::find()->all();
        $data = [];
        foreach($model as $item){
            array_push($data, ['id' => $item->id, 'img' => $item->image]);
        }
        echo json_encode($data);
        
    }
}
