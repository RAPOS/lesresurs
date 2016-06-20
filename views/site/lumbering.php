<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 02.05.2016
 * Time: 15:55
 */
use app\models\LImages;
$this->title = "Продажа леса";
?>
<div class="page text-center">
    <div class="page-head">
        <h2>Продажа леса</h2>
        <span>Описание деятельности нашей компании</span>
        <div></div>
    </div>
	<?if($modelpage){?>
		<div class="page-desc clearfix">
			<?foreach ($modelpage as $key => $value) {?>
				<?
				$model_images = json_decode($value->images);
				$LImages = LImages::findOne($model_images);
				if($LImages->path && file_exists(Yii::getAlias('@webroot/'.$LImages->path))){
					$image = Yii::$app->image->load(Yii::getAlias('@webroot/'.$LImages->path));
					$image->resize(280, 280);
					$image->save(Yii::getAlias('@webroot/assets/'.$LImages->name.'.'.$LImages->extension));
					?>			
					<img class="img-responsive square left" src="<?='/assets/'.$LImages->name.'.'.$LImages->extension?>" alt="">		
				<?}?>
				<div class="block left hidden-xs">
					<h3><?=$value->text_header?></h3>
					<p><?=$value->text_block?></p>
				</div>
			<?}?>
		</div>
		<?foreach ($modelpage as $key => $value) {?>
			<div class="block left visible-xs small-xs">
				<h3><?=$value->text_header?></h3>
				<p><?=$value->text_block?></p>
			</div>
		<?}?>
	<?}?>
    <div class="page-head">
        <h2>Продукция</h2>
        <h6>Описание деятельности нашей компании</h6>
        <div></div>
    </div>
    <div class="page-offer">
		<?if($modelproductions){?>
			<?foreach ($modelproductions as $key => $value) {?>
				<div class="item clearfix">
				<?
				$model_images = json_decode($value->id_image);
				$LImages = LImages::findOne($model_images);
				if($LImages->path && file_exists(Yii::getAlias('@webroot/'.$LImages->path))){
					$image = Yii::$app->image->load(Yii::getAlias('@webroot/'.$LImages->path));
					$image->resize(368, 240);
					$image->save(Yii::getAlias('@webroot/assets/'.$LImages->name.'.'.$LImages->extension));
					?>			
					<img class="img-responsive left" src="<?='/assets/'.$LImages->name.'.'.$LImages->extension?>" alt="">		
				<?}?>
					<div class="item-desc left">
						<h3><a href="/lumbering/<?=$value->id?>/"><?=$value->header?></a></h3>
						<p><?=$value->text?></p>
						<button class="lbutton order">Оставить заявку</button>
					</div>
				</div>
			<?}?>
		<?}?>
    </div>
</div>