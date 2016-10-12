<?
namespace app\components;

use yii;
use yii\base\Widget;
use yii\bootstrap\Dropdown;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use app\modules\admin\models\Category;
use app\modules\admin\models\Product;
use app\modules\admin\models\Vendor;

class Filters extends Widget{
	public $url;

	public function run(){
		$CurrentCategory = Category::find()->where(['url' => $this->url])->one();
		$Category = Category::find()->all();
		$product  = Product::find()->where(['category_id' => $CurrentCategory->id])->groupBy('vendor_id')->all();
		$vendorIds = [];
		foreach($product as $item){
			array_push($vendorIds,$item->vendor_id);
		}
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
			<a href="#" data-toggle="dropdown" class="dropdown-toggle">
		 	<?
			if(isset($_GET['id'])){
				echo $CurrentCategory->title;
			}else{
				echo "Любая";
			}
			?>
			<b class="caret"></b>
			</a>
		    <?php
		        echo Dropdown::widget([
		            'items' => $CategoryItems
		        ]);
		    ?>
		</div>

		
		<div class='filter-input-group input-group'>
			<span class='filter-label'>Производитель:</span><br>
			<a href="#" data-toggle="dropdown" class="dropdown-toggle">
		 	<?
			if(isset($_GET['vendor'])){
				$vendor = Vendor::findOne($_GET['vendor']);
				echo $vendor->title;
			}else{
				echo "Любой";
			}
			?>
			<b class="caret"></b>
			</a>
		    <?php
		        echo Dropdown::widget([
		            'items' => $items
		        ]);
		    ?>
		</div>
		<?
	}



}



?>