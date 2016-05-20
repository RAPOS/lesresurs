<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 02.05.2016
 * Time: 16:00
 */
use app\models\LImages;
$this->title = 'Статьи';
?>
<div class="page text-center">
    <div class="page-head">
        <h2>Статьи</h2>
        <span>Описание деятельности нашей компании</span>
        <div></div>
    </div>
    <div class="row articles">
        <?foreach ($articles as $key => $value) {?>
            <div class="item-article left">
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
                <h3><?=$value->header?></h3>
                <p>
                    <?=mb_truncate($value->text, 250)?>
                </p>
                <div class="col-xs-12 col-md-6 date">
                    <p>Добавлено <?=$value->date?></p>
                </div>
                <div class="col-xs-12 col-md-6 button">
                    <button class="lbutton" onclick="location.href='/articles/<?=$value->id?>/'">Читать далее...</button>
                </div>
            </div>
        <?}?>
    </div>
</div>