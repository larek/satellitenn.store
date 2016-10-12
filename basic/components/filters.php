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
		$category = Category::find()->where(['url' => $this->url])->one();
		$product  = Product::find()->where(['category_id' => $category->id])->groupBy('vendor_id')->all();
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

		?>

		<div class="dropdown">
			<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
			<?
			if(isset($_GET['vendor'])){
				$vendor = Vendor::findOne($_GET['vendor']);
				echo $vendor->title;
			}else{
				echo "Производитель";
			}
			?>
			<span class="caret"></span>
			</button>
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