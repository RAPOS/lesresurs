<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 02.05.2016
 * Time: 16:00
 */
use app\models\LImages;
$this->title = 'Галерея';
?>
<div class="page text-center">
    <div class="page-head">
        <h2>Галерея</h2>
        <span>Описание деятельности нашей компании</span>
        <div></div>
    </div>
    <div class="row gallery">
		<?if($model){
			for ($i = 0;$i < count($model);$i++) {
				$model_images = json_decode($model[$i]->id_image);
				$LImages = LImages::findOne($model_images);
				if($LImages->path && file_exists(Yii::getAlias('@webroot/'.$LImages->path))){
					$image = Yii::$app->image->load(Yii::getAlias('@webroot/'.$LImages->path));
					$image->resize(173, 173);
					$image->save(Yii::getAlias('@webroot/assets/'.$LImages->name.'.'.$LImages->extension));
					?>			
					<a class="zoomimage" rel="gallery-group" href="/<?=$LImages->path?>">
						<img class="gallery-img left" src="<?='/assets/'.$LImages->name.'.'.$LImages->extension?>" alt="">
					</a>					
				<?}?>				
			<?}
		}?>
    </div>
</div>
