<?
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => $category->title,'url' => ['site/category','id' => $category->url]];
$this->params['breadcrumbs'][] = $this->title;
?>

        <div class="content content-margin">
            <h1><?= $this->title?></h1>
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-striped">
						<tr>
							<td>Описание</td>
							<td><?= $model->description?></td>
						</tr>
                        <tr>
                            <td>Производитель</td>
                            <td><?= $model->vendor->title?></td>
                        </tr>
						<tr>
							<td>Цена</td>
							<td><span class='price'><?= number_format($model->price,0," "," ")?> руб. </span></td>
						</tr>
					</table>
                    <? 
                      if (isset($cart[$model->id])){
                        echo Html::tag('span','Товар в корзине',['class' => 'btn btn-default disable', 'disabled' => 'disabled']);
                      }
                      else{
                        echo Html::tag('span','В корзину',['class' => 'btn btn-default btn-add', 'id' => $model->id]);
                      }
                    ?>
                </div>
                <div class="col-md-6">
                    <?= Html::img('/uploads/'.$model->photo, ['class' => 'img img-responsive'])?>
                </div>
            </div>
        </div>

