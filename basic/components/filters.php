<?
namespace app\components;

use yii;
use yii\base\Widget;
use yii\bootstrap\Dropdown;
use yii\helpers\ArrayHelper;
use app\modules\admin\models\Category;
use app\modules\admin\models\Product;
use app\modules\admin\models\Vendor;

class Filters extends Widget{
	public $url;

	public function run(){
		$model = Vendor::find()->all();
		$items = ArrayHelper::toArray($model, [
				'app\modules\admin\models\Vendor' => [
					'label' => 'title',
					'url' => function($data){
						return $this->url."?vendor=".$data->id;
					}
					
				]
			]);
		?>
		<div class="dropdown">
		    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Производитель <b class="caret"></b></a>
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