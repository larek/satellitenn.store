<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Product;
use app\modules\admin\models\Category;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }


    public function actionUrl(){
        $model = Product::find()->all();
        foreach($model as $item){
            $newModel = Product::findOne($item->id);
            $newModel->url = Yii::$app->str2url->parse($item->title." ".$item->id);
            $newModel->save();
        }

        $model = Category::find()->all();
        foreach($model as $item){
            $newModel = Category::findOne($item->id);
            $newModel->url = Yii::$app->str2url->parse($item->title." ".$item->id);
            $newModel->save();
        }
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
                'query' => Category::find(),
                'pagination' => [
                    'pageSize' => 20
                ]
            ]);
        return $this->render('index',[
                'dataProvider' => $dataProvider
            ]);
    }

    public function actionCategory($id){
        $category = Category::find()->where(['url' => $id])->one();
        $dataProvider = new ActiveDataProvider([
                'query' => Product::find()->where(['category_id' => $category->id]),
                'pagination' => [
                    'pageSize' => 20
                ]
            ]);
        return $this->render('category',[
                'dataProvider' => $dataProvider
            ]);
    }

    public function actionProduct($id){
        $model = Product::find()->where(['url' => $id])->one();
        
        return $this->render('product',[
                'model' => $model
            ]);
    }

   

    public function actionSend(){
        $content = $_POST['result'];
       //  $result['active_box'];
       //  $result['active_placeName'];
       //  $result['rangeDay'];
       //  $result['rangeDates'];
       //  $result['priceRent'];
       //  $result['userName'];
       //  $result['userPhone'];
       //  $result['userMarka'];
       //  $result['userModel'];
       //  $result['userYear'];
       // echo ($_POST['result']);
            echo Yii::$app->mail->compose()
            ->setFrom(['saitom@yandex.ru' => 'rentbox.satellitenn.ru'])
            ->setTo(['t9101029991@gmail.com','satellitenn@yandex.ru','bariilya@yandex.ru'])
            ->setSubject('Заказ с сайта. '.date("Y-m-d H:i:s"))
            ->setHtmlBody('<h2>Информация о заказе</h2>
    <p>Satellite '. $content["active_box"].'</p>
    <p>Необходимость аренды поперечин - '. $content["active_placeName"].'</p>
    <p>Срок аренды - '. $content["rangeDay"].'</p>
    <p>Даты аренды - '. $content["rangeDates"].'</p>
    <p>Стоимость аренды - '. $content["priceRent"].'</p>
    <h2>Информация о клиенте</h2>
    <p>Имя - '. $content["userName"].'</p>
    <p>Телефон - '. $content["userPhone"].'</p>
    <p>Марка автомобиля - '. $content["userMarka"].'</p>
    <p>Модель автомобиля - '. $content["userModel"].'</p>
    <p>Год выпуска - '. $content["userYear"] .'</p>')
            ->send();


    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    
}
