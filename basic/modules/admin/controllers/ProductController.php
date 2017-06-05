<?php

namespace app\modules\admin\controllers;

use Yii;
use app\modules\admin\models\Product;
use app\modules\admin\models\ProductSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\imagine\Image;

/**
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Product models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductSearch;
        $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
    }

    /**
     * Displays a single Product model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Product model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Product;

        // if ($model->load(Yii::$app->request->post()) && $model->save()) {
        if (Yii::$app->request->post()) {
           if($_FILES['Product']['name']['photo']!=""){
              $errors= array();
              $file_name = $_FILES['Product']['name']['photo'];
              $file_size = $_FILES['Product']['size']['photo'];
              $file_tmp = $_FILES['Product']['tmp_name']['photo'];
              $file_ext = pathinfo($_FILES['Product']['name']['photo'])['extension'];
              $file_new_name = md5($file_name)."_".time().".".$file_ext; 

              $expensions= array("jpeg","jpg","png","JPEG","JPG","PNG");
              
              if(in_array($file_ext,$expensions)=== false){
                 $errors[]="extension not allowed, please choose a JPEG or PNG file.";
              }
              
              if($file_size > 20971520) {
                 $errors[]='File size must be excately 2 MB';
              }
              
              if(empty($errors)==true) {
                 move_uploaded_file($file_tmp,"uploads/".$file_new_name);
                 $mode = \Imagine\Image\ManipulatorInterface::THUMBNAIL_INSET; // or THUMBNAIL_INSET
                  $img = $_SERVER['DOCUMENT_ROOT']."/uploads/".$file_new_name;
                  // $size = Image::getImagine()->open($img)->getSize()->widen(1000);

                  Image::thumbnail($img, 300, 200, $mode)->save('uploads/300x200/'. $file_new_name, ['quality' => 100]);
                  // Image::thumbnail($img, 1500, 500, $mode)->save('uploads/1500x500/'. $file_new_name, ['quality' => 100]);
                 // echo "Success";
              }else{
                 print_r($errors);
              }
            $model->load(Yii::$app->request->post());
            $model->photo = $file_new_name;
           }else{
            $model->load(Yii::$app->request->post());
          }

            
            $model->save();
            $modelUrl = Product::findOne($model->id);
            $modelUrl->url = Yii::$app->str2url->parse($model->title." ".$model->id); 
            $modelUrl->save();
            return $this->redirect(['view', 'id' => $model->id]);

        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Product model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $photo = $model->photo;
        // if ($model->load(Yii::$app->request->post()) && $model->save()) {
        if (Yii::$app->request->post()) {
            if($_FILES['Product']['name']['photo']!=""){
                
              $errors= array();
              $file_name = $_FILES['Product']['name']['photo'];
              $file_size = $_FILES['Product']['size']['photo'];
              $file_tmp = $_FILES['Product']['tmp_name']['photo'];
              $file_ext = pathinfo($_FILES['Product']['name']['photo'])['extension'];
              $file_new_name = md5($file_name)."_".time().".".$file_ext; 

              $expensions= array("jpeg","jpg","png");
              
              if(in_array($file_ext,$expensions)=== false){
                 $errors[]="extension not allowed, please choose a JPEG or PNG file.";
              }
              
              if($file_size > 2097152) {
                 $errors[]='File size must be excately 2 MB';
              }
              
              if(empty($errors)==true) {
                 move_uploaded_file($file_tmp,"uploads/".$file_new_name);
                 $mode = \Imagine\Image\ManipulatorInterface::THUMBNAIL_INSET; // or THUMBNAIL_INSET
                  $img = $_SERVER['DOCUMENT_ROOT']."/uploads/".$file_new_name;
                  // $size = Image::getImagine()->open($img)->getSize()->widen(1000);

                  Image::thumbnail($img, 300, 200, $mode)->save('uploads/300x200/'. $file_new_name, ['quality' => 100]);
                  // Image::thumbnail($img, 1500, 500, $mode)->save('uploads/1500x500/'. $file_new_name, ['quality' => 100]);
                 // echo "Success";
              }else{
                 print_r($errors);
              }
            $model->load(Yii::$app->request->post());
            $model->photo = $file_new_name;
            //delete old photo
            if(is_file("uploads/".$photo) && $photo!=="atlant_product.jpg" && $photo!=="thule_product.jpg"){unlink("uploads/".$photo);}
            if(is_file("uploads/300x200/".$photo) && $photo!="thule_product.jpg" && $photo!=="thule_product.jpg"){unlink("uploads/300x200/".$photo);}
           }else{
            $model->load(Yii::$app->request->post());
            $model->photo = $photo;
           }

            
            $model->save();
            $modelUrl = Product::findOne($model->id);
            $modelUrl->url = Yii::$app->str2url->parse($model->title." ".$model->id); 
            $modelUrl->save();
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Product model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $photo = $model->photo;
        //delete  photo
            if(is_file("uploads/".$photo)  && $photo!=="atlant_product.jpg" && $photo!=="thule_product.jpg"){unlink("uploads/".$photo);}
            if(is_file("uploads/300x200/".$photo)  && $photo!=="atlant_product.jpg" && $photo!=="thule_product.jpg"){unlink("uploads/300x200/".$photo);}
        $model->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Product model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Product the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Product::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
