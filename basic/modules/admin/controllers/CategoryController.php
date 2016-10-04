<?php

namespace app\modules\admin\controllers;

use Yii;
use app\modules\admin\models\Category;
use app\modules\admin\models\CategorySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\imagine\Image;

/**
 * CategoryController implements the CRUD actions for Category model.
 */
class CategoryController extends Controller
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
     * Lists all Category models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CategorySearch;
        $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
    }

    /**
     * Displays a single Category model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

   public function actionCreate()
    {
        $model = new Category;

        // if ($model->load(Yii::$app->request->post()) && $model->save()) {
        if (Yii::$app->request->post()) {
           if($_FILES['Category']['name']['image']!=""){
              $errors= array();
              $file_name = $_FILES['Category']['name']['image'];
              $file_size = $_FILES['Category']['size']['image'];
              $file_tmp = $_FILES['Category']['tmp_name']['image'];
              $file_ext = pathinfo($_FILES['Category']['name']['image'])['extension'];
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
            $model->image = $file_new_name;
           }else{
            $model->load(Yii::$app->request->post());
          }

            
            $model->save();
            $modelUrl = Category::findOne($model->id);
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
     * Updates an existing Category model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $photo = $model->image;
        // if ($model->load(Yii::$app->request->post()) && $model->save()) {
        if (Yii::$app->request->post()) {
            if($_FILES['Category']['name']['image']!=""){
                
              $errors= array();
              $file_name = $_FILES['Category']['name']['image'];
              $file_size = $_FILES['Category']['size']['image'];
              $file_tmp = $_FILES['Category']['tmp_name']['image'];
              $file_ext = pathinfo($_FILES['Category']['name']['image'])['extension'];
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
            $model->image = $file_new_name;
            //delete old photo
            if(is_file("uploads/".$photo)){unlink("uploads/".$photo);}
            if(is_file("uploads/300x200/".$photo)){unlink("uploads/300x200/".$photo);}
           }else{
            $model->load(Yii::$app->request->post());
            $model->image = $photo;
           }

            
            $model->save();
            $modelUrl = Category::findOne($model->id);
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
     * Deletes an existing Category model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $photo = $model->image;
        //delete  photo
            if(is_file("uploads/".$photo)){unlink("uploads/".$photo);}
            if(is_file("uploads/300x200/".$photo)){unlink("uploads/300x200/".$photo);}
        $model->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Category model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Category the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Category::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
