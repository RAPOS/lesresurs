<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 02.05.2016
 * Time: 15:59
 */
use app\models\LImages;
$this->title = 'Спецпредложения';
?>
<div class="page text-center">
    <div class="page-head">
        <h2>Спецпредложения</h2>
        <span>Описание деятельности нашей компании</span>
        <div></div>
    </div>
    <div class="row actions">
        <?
		$count = 0;
		if($model){
			foreach ($model as $key => $value){
				$count++;
				?>
				
				<div <?=$count == 3? 'style="margin-right: 0;"' : ''?> class="item-action left">
					<?
					$model_images = json_decode($value->id_image);
					$LImages = LImages::findOne($model_images);
					if($LImages->path && file_exists(Yii::getAlias('@webroot/'.$LImages->path))){
						$image = Yii::$app->image->load(Yii::getAlias('@webroot/'.$LImages->path));
						$image->resize(400, 300);
						$image->save(Yii::getAlias('@webroot/assets/'.$LImages->name.'.'.$LImages->extension));
						?>			
						<img class="img-responsive" src="<?='/assets/'.$LImages->name.'.'.$LImages->extension?>" alt="">		
					<?}?>				
					
					<h3><a href="/specials/<?=$value->id?>/"><?=$value->header?></a></h3>
					<p>
						<?=$value->text?>
					</p>
					<div class="col-xs-6 date">
						<?if ($value->status) {?>
							<p>Действует до <?=$value->date?></p>
						<?} else {?>
							<p style="color: red;">Акция закончена</p>
						<?}?>
					</div>
					<div class="col-xs-6 button">
						<button type="submit" class="lbutton order">Оставить заявку</button>
					</div>
				</div>
			<?}				
		}?>
    </div>
</div>