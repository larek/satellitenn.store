<?php
use yii\helpers\Html;

/* @var $this \yii\web\View view component instance */
/* @var $message \yii\mail\MessageInterface the message being composed */
/* @var $content string main view render result */
?>
<?php $this->beginPage() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?= Yii::$app->charset ?>" />
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <h2>Информация о заказе</h2>
    <p>Satellite <?= $active_box;?></p>
    <p>Необходимость аренды поперечин - <?= $content['active_placeName'];?></p>
    <p>Срок аренды - <?= $content['rangeDay'];?></p>
    <p>Даты аренды - <?= $content['rangeDates']?></p>
    <p>Стоимость аренды - <?= $content['priceRent'];?></p>
    <h2>Информация о клиенте</h2>
    <p>Имя - <?= $content['userName'];?></p>
    <p>Телефон - <?= $content['userPhone'];?></p>
    <p>Марка автомобиля - <?= $content['userMarka'];?></p>
    <p>Модель автомобиля - <?= $content['userModel'];?></p>
    <p>Год выпуска - <?= $content['userYear'];?></p>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
