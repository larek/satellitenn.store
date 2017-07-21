<?
use yii\helpers\Html;
?>
<div class="list-group">
<?= Html::a('Галерея', ['production/single','id' => 'gallery'],['class' => 'list-group-item'])?>
<?= Html::a('Аксессуары', ['production/single','id' => 'accessories'],['class' => 'list-group-item'])?>
<?= Html::a('Инструкция по эксп.', ['production/single','id' => 'instructions'],['class' => 'list-group-item'])?>
<?= Html::a('Где приобрести', ['production/single','id' => 'wherebuy'],['class' => 'list-group-item'])?>
</div>