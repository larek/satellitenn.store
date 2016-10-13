<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Product;
use app\modules\admin\models\Category;
use app\modules\admin\models\Thule;
use app\modules\admin\models\Atlant;


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


    public function actionMerge(){
        
        // $model = Thule::find()->all();
        // foreach($model as $item){
        //     $new = new Product;
        //     $new->category_id = 10;
        //     $new->vendor_id = 7;
        //     $new->title = $item->title;
        //     $new->skuVendor = $item->sku;
        //     $new->sku = '';
        //     $new->photo = 'thule_product.jpg';
        //     $new->description = $item->description;
        //     $new->priceVendor = '';
        //     $new->price = $item->price;
        //     $new->available = 1;
        //     $new->url = '';
        //     $new->save();
        //     echo $item->price."<br>";
        // }

        // $model = Atlant::find()->all();

        //  foreach($model as $item){
        //     $new = new Product;
        //     $new->category_id = 10;
        //     $new->vendor_id = 3;
        //     $new->title = $item->title;
        //     $new->skuVendor = $item->sku;
        //     $new->sku = '';
        //     $new->photo = 'atlant_product.jpg';
        //     $new->description = $item->description;
        //     $new->priceVendor = $item->price_vendor;
        //     $new->price = $item->price;
        //     $new->available = 1;
        //     $new->url = '';
        //     $new->save();
        //     echo $item->price."<br>";
        //     echo $item->price_vendor."<br>";
        //     echo $item->description."<br>";
        //     echo $item->title."<br>";
        //     echo $item->sku."<br>";
        //     echo "<hr>";

        // }
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

    public function actionSess(){
        $session = Yii::$app->session;
        $session->open();
        print_r($_SESSION);
        $session->close();
    }

    public function actionAdd(){
        $session = Yii::$app->session;
        $session->open();
        $_SESSION['product'][$_POST['id']] = 1;
        $session->close();
    }

    public function actionRemove(){
        $session = Yii::$app->session;
        $session->open();
        unset($_SESSION['product'][$_POST['id']]);
        $session->close(); 
    }

    public function actionCartcount(){
        return count($this->getCart());
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
        $model= Category::find()->where(['url' => $id])->one();
        $query = Product::find()->where(['category_id' => $model->id]);
        if(isset($_GET['vendor'])){
            $query->andWhere(['vendor_id' => $_GET['vendor']]);
        }
        if(isset($_GET['price'])){
            $price = explode(':',$_GET['price']);
            $query->andWhere('price >= '.$price[0]);
            $query->andWhere('price <= '.$price[1]);
        }
        $dataProvider = new ActiveDataProvider([
                'query' => $query,
                'pagination' => [
                    'pageSize' => 20
                ]
            ]);
        $cart = $this->getCart();
        return $this->render('category',[
                'model' => $model,
                'cart' => $cart,
                'url' => $id,
                'dataProvider' => $dataProvider
            ]);
    }

    public function actionCreateurl(){
        $data = json_decode($_POST['data']);
        echo $data->vendor == '' ?
         Url::to(['site/category', 'id' => $data->url, 'price' => $data->price[0].":".$data->price[1]]) :
         Url::to(['site/category', 'id' => $data->url, 'vendor' => $data->vendor, 'price' => $data->price[0].":".$data->price[1]]);
    }

    public function actionSearch($id){
        $dataProvider = new ActiveDataProvider([
                'query' => Product::find()->where(['like','title',$id]),
                'pagination' => [
                    'pageSize' => 20
                ]
            ]);
        $cart = $this->getCart();
        return $this->render('search',[
                'cart' => $cart,
                'url' => $id,
                'dataProvider' => $dataProvider
            ]);
    }


    public function actionProduct($id){
        $model = Product::find()->where(['url' => $id])->one();
        $category = Category::findOne($model->category_id);
        $cart = $this->getCart();
        return $this->render('product',[
                'category' => $category,
                'model' => $model,
                'cart' => $cart
            ]);
    }

    public function actionCart(){
        $cart = array_keys($this->getCart());
        $model = Product::find()->andWhere(['id' => $cart])->all();
        return $this->render('cart',[
                'model' => $model,
                'cart' => $cart,
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

    protected function getCart(){
        $session = Yii::$app->session;
        $session->open();
        $product = isset($_SESSION['product']) ? $_SESSION['product'] : false;
        $session->close();

        return $product;
    }

    
}
