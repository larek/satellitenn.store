<?php

namespace app\modules\rentbox\controllers;
use Yii;
use yii\web\Controller;
use app\models\Calc;
use app\modules\rent\models\Content;
use app\modules\rent\models\Calcdata;
use app\modules\rent\models\Slider;
use app\modules\rent\models\Product;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        $product = Product::find()->all();
        $model = Content::findOne(1);
        $slides = Slider::find()->orderBy(['order_id' => SORT_ASC])->all();
        return $this->render('index',[
                'model' => $model,
                'slides' => $slides,
                'product' => $product
            ]);
    }

    public function actionGetcalc(){
        $model = Calcdata::findOne(1);
        $data = [
            'A' => $model->a,
            'B' => $model->b,
            'C' => $model->c,
            'D' => $model->d,
            'E' => $model->e,
            'F' => $model->f,
            'G' => $model->g,
            'H' => $model->h,
            'I' => $model->i,
            'J' => $model->j,
            'K' => $model->k,
            'L' => $model->l,
            'M' => $model->m,
            'N' => $model->n,
            'O' => $model->o,
            'P' => $model->p
        ];
        // foreach ($model as $key => $value) {
        //     $data[$value->id]['title']  = $value->title;
        //     $data[$value->id]['value']  = $value->value;
        // }
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
    }

    public function actionSend(){
        $content = $_POST['result'];
            echo Yii::$app->mail->compose()
            ->setFrom(['satellitenn.store@yandex.ru' => 'rentbox.satellitenn.ru'])
            // ->setTo(['t9101029991@gmail.com','satellitenn@yandex.ru','bariilya@yandex.ru'])
            ->setTo(['t9101029991@gmail.com'])
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
}
