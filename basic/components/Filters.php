<?
namespace app\components;

use yii;
use yii\base\Widget;
use yii\bootstrap\Dropdown;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\helpers\Html;
use app\modules\admin\models\Category;
use app\modules\admin\models\Product;
use app\modules\admin\models\Vendor;

class Filters extends Widget{
	public $url;
	public $dataProvider;

	public function run(){
		$CurrentCategory = Category::find()->where(['url' => $this->url])->one();
		$Category = Category::find()->all();
		$CategoryItems = ArrayHelper::toArray($Category, [
				'app\modules\admin\models\Category' => [
					'label' => 'title',
					'url' => function($data){
						return Url::to(['site/category','id' => $data->url]);
					}
					
				]
			]);
		?>
		<div class='filter-input-group input-group'>
			<span class='filter-label'>Категория:</span><br>
			
		 	<?
			if(isset($_GET['id'])){
				echo Html::a($CurrentCategory->title." ".Html::tag('b','',['class' => 'caret']),'#',['data-toggle' => 'dropdown', 'class' => 'dropdown-toggle category', 'data-url' => $_GET['id']]);
			}else{
				echo Html::a('Любая '.Html::tag('b','',['class' => 'caret']),'#',['data-toggle' => 'dropdown', 'class' => 'dropdown-toggle category', 'data-url' => '']);
			}
			?>
			
		    <?php
		        echo Dropdown::widget([
		            'items' => $CategoryItems
		        ]);
		    ?>
		</div>

		<?
		if($this->dataProvider->getCount()>0):

		
		$product  = Product::find()->where(['category_id' => $CurrentCategory->id])->all();
		$vendorIds = [];
		$productPrices = [];
		foreach($product as $item){
			array_push($productPrices,$item->price);
			array_push($vendorIds,$item->vendor_id);
		}
		$minPrice = min($productPrices);
		$maxPrice = max($productPrices);

		$model = Vendor::find()->where(['id' => $vendorIds])->all();
		$items = ArrayHelper::toArray($model, [
				'app\modules\admin\models\Vendor' => [
					'label' => 'title',
					'url' => function($data){
						return Url::to(['site/category','id' => $this->url, 'vendor' => $data->id]);
					}
					
				]
			]);

		array_unshift($items, [
				'label' => 'Любой',
				'url' => Url::to(['site/category','id' => $this->url])
			]);
		?>
		
		<div class='filter-input-group input-group'>
			<span class='filter-label'>Производитель:</span><br>
			<a href="#" data-toggle="dropdown" class="dropdown-toggle">
		 	<?
			if(isset($_GET['vendor'])){
				$vendor = Vendor::findOne($_GET['vendor']);
				echo Html::a($vendor->title." ".Html::tag('b','',['class' => 'caret']),'#',['data-toggle' => 'dropdown', 'class' => 'dropdown-toggle vendor', 'data-vendorid' => $vendor->id]);
			}else{
				echo Html::a('Любой'." ".Html::tag('b','',['class' => 'caret']),'#',['data-toggle' => 'dropdown', 'class' => 'dropdown-toggle vendor', 'data-vendorid' => '']);
			}
			?>
			
		    <?php
		        echo Dropdown::widget([
		            'items' => $items
		        ]);
		    ?>
		</div>

		<?
		if(isset($_GET['price'])){
			$getPrice = explode(':',$_GET['price']);
			$minPrice = $getPrice[0];
			$maxPrice = $getPrice[1];
		}
		?>
		<div class='filter-input-group input-group'>
			<span class='filter-label'>Цена:</span><br>
			<span class='price-range-label'><i class='fa fa-rub'></i> <?= min($productPrices)?></span>
			<?= Html::input('text','','', ['id' => 'ex2', 'class' => 'span2', 'data-slider-min' => min($productPrices), 'data-slider-max' => max($productPrices), 'data-slider-step' => '100', 'data-slider-value' => '['.$minPrice.','.$maxPrice.']'])?>
			<span class='price-range-label'><i class='fa fa-rub'></i> <?= max($productPrices)?></span>
		</div>
		<?
		endif;
	}



}



?>