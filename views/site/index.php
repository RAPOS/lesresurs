<?php

/* @var $this yii\web\View */
use app\models\LImages;
$this->title = 'ООО «ЛЕС РЕСУРС»';
?>
<div style="margin-top: -23px;" class="page text-center">
    <div class="page-head">
        <h2>Продукция</h2>
        <span>Перечень выпускаемой продукции</span>
        <div></div>
    </div>
    <div class="row products">
		<?if($modelproductions){?>
			<?foreach ($modelproductions as $key => $value) {?>	
				<div class="col-xs-12 col-md-3">
					<div class="production-item">
						<?
						$model_images = json_decode($value->id_image);
						$LImages = LImages::findOne($model_images);
						if($LImages->path && file_exists(Yii::getAlias('@webroot/'.$LImages->path))){
							$image = Yii::$app->image->load(Yii::getAlias('@webroot/'.$LImages->path));
							$image->resize(368, 240);
							$image->save(Yii::getAlias('@webroot/assets/'.$LImages->name.'.'.$LImages->extension));
							?>			
							<img src="<?='/assets/'.$LImages->name.'.'.$LImages->extension?>" alt="">		
						<?}?>
						<h3><?=$value->header?></h3>
						<p><?=$value->text?></p>
						<button class="lbutton"
							onmouseover="this.style.background = '#12b154'"
							onmouseout="this.style.background = '#0b9444'"
							onmousedown="this.style.background = '#067333'"
							onmouseup="this.style.background = '#12b154'">Подробнее</button>
					</div>
				</div>
			<?}?>
		<?}?>
    </div>
    <div class="page-head">
        <h2>О компании</h2>
        <span>Описание деятельности нашей компании</span>
        <div></div>
    </div>
    <div class="row text-left company">
        <div class="col-xs-12 col-md-6">
            <h3>Деятельность</h3>
            <?=$model->text_activity?>
        </div>
        <div class="col-xs-12 col-md-6">
            <h3>Производство</h3>
            <?=$model->text_production?>
        </div>
    </div>
</div>