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

class FiltersMobile extends Widget{
	public $url;
	public $productCount;

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
		<div class='filter-input-group'>
			<span class='filter-label'>Категория:</span><br>
			<?= Html::dropDownList('category', "/category/".$this->url, ArrayHelper::map($CategoryItems, 'url', 'label'),['class' => 'filter-select filter-category']) ?>
		</div>

		<?
		if($this->productCount > 0):

		
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
		$currentVendor = isset($_GET['vendor']) ? Url::to(['site/category','id' => $CurrentCategory->url, 'vendor' => $_GET['vendor']]) : '';
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
		
		<div class='filter-input-group'>
		<span class='filter-label'>Производитель:</span><br>
		<?= Html::dropDownList('vendor', $currentVendor, ArrayHelper::map($items, 'url', 'label'), ['class' => 'filter-select filter-vendor'])?>
		</div>

		<?
		if(isset($_GET['price'])){
			$getPrice = explode(':',$_GET['price']);
			$minPrice = $getPrice[0];
			$maxPrice = $getPrice[1];
		}
		?>


		<div class='filter-input-group'>
			<span class='filter-label'>Сортировка:</span><br>
			<? 
				if(isset($_GET['vendor'])){
					$currentSort = isset($_GET['sort']) ?  Url::to(['site/category', 'id' => $this->url, 'vendor' => $_GET['vendor'], 'sort' => $_GET['sort']]) : '';
				}else{
					$currentSort = isset($_GET['sort']) ?  Url::to(['site/category', 'id' => $this->url, 'sort' => $_GET['sort']]) : '';
				}
				$itemsSort = [
					isset($_GET['vendor']) ? Url::to(['site/category','id' => $this->url,'vendor' => $_GET['vendor'],'sort'=>'asc']) : Url::to(['site/category','id' => $this->url,'sort'=>'asc']) => 'По возрастанию цены',
					isset($_GET['vendor']) ? Url::to(['site/category','id' => $this->url,'vendor' => $_GET['vendor'],'sort'=>'desc']) : Url::to(['site/category','id' => $this->url,'sort'=>'desc']) => 'По убыванию цены'
				];
				echo Html::dropDownList('sort',$currentSort,$itemsSort,['class' => 'filter-select filter-sort']);
			?>
		</div>
		<div class='filter-input-group input-group hide'>
			<span class='filter-label'>Цена:</span><br>
			<span class='price-range-label'><i class='fa fa-rub'></i> <?= min($productPrices)?></span>
			<?= Html::input('text','','', ['id' => 'ex3', 'class' => 'span2', 'data-slider-min' => min($productPrices), 'data-slider-max' => max($productPrices), 'data-slider-step' => '100', 'data-slider-value' => '['.$minPrice.','.$maxPrice.']'])?>
			<span class='price-range-label'><i class='fa fa-rub'></i> <?= max($productPrices)?></span>
		</div>
		<?
		endif;
	}



}



?>