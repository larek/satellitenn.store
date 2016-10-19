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
    <p>Имя - <?= $content['name'];?></p>
    <p>Email - <?= $content['email'];?></p>
    <p>Телефон - <?= $content['phone'];?></p>
    <p>Регион (город) - <?= $content['city'];?></p>
    <p>Комментарий - <?= $content['comment'];?></p>
    <p>Дата - <?= $content['date'];?></p>
    <p>Способ оплаты - <?= $content['method'];?></p>
    <p>Метод доставки - <?= $content['delivery'];?></p>
    
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
