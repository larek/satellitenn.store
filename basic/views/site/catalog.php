<?php
use yii\widgets\ListView;
/* @var $this yii\web\View */

$this->title = 'Каталог Satellitenn Store';
?>




        <div class="content content-margin">

        <br><br>
        <div class="row">
        
      		<?= ListView::widget([
      			'dataProvider' => $dataProvider,
      			'itemView' => '_itemCategory',
                'summary' => false
      		]);?>
        
		</div>
        
        
        

            
              
        </div>

    
    