<?php
use app\models\LImages;
use dosamigos\tinymce\TinyMce;
use kartik\file\FileInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Продукция - Информация на странице';

if (!is_null($save)) print $this->render('@app/modules/admin/views/default/_alert', ['save' => $save]);

$array_image = array();
$array_image_cfg = array();
if (!$model->isNewRecord) {
	$array_id_images = json_decode($model->images);
	for ($i = 0; $i < count($array_id_images); $i++) {
		$LImages = LImages::findOne($array_id_images[$i]);
		$array_image[] = Html::img('/'.$LImages->path, ['class'=>'file-preview-image img-responsive', 'alt'=>$LImages->name, 'title'=>$LImages->name, 'style'=>'width: auto;height: 200px;']);
		$array_image_cfg[] = [
			'caption' => $LImages->name,
			'url' => '/admin/deleteimages/',
			'key' =>  $LImages->id_image,
			'extra' => ['delete_id_img' => $LImages->id_image, 'delete_path' => $LImages->path, 'id_images' => $array_id_images, 'page' => 'productions_page'],
		];
	}
}
if (!$array_image && !$array_image_cfg) {
	$array_image = array();
	$array_image_cfg = array();
}
?>
<div class="page text-center">
	<div class="page-head">
		<h2>Продукция</h2>
		<div></div>
	</div>
	<div class="row" style="margin-top: 5px;">
		<div class="col-sm-1 hidden-xs"></div>
		<div class="col-sm-10 text-left">
			<ul class="breadcrumb">
				<li><?=Html::a('Панель управления', '/admin/')?></li>
				<li><?=Html::a('Продукция', '/admin/productions/')?></li>
				<li class="active"><?=$this->title?></li>
			</ul>
			<?php $form = ActiveForm::begin(); ?>
				<h3>Основное</h3>
				<div class="row">
					<div class="col-xs-12 col-sm-4">
						<?= $form->field($model, 'text_header')->input('text')?>
					</div>
					<div class="col-xs-12 col-sm-4"></div>
				</div>
				<?= $form->field($model, 'text_block')->widget(TinyMce::className(), [
					'options' => ['rows' => 6],
					'language' => 'ru',
					'clientOptions' => [
						'plugins' => [
							"advlist autolink lists link charmap print preview anchor",
							"searchreplace visualblocks code fullscreen",
							"insertdatetime media table contextmenu paste"
						],
						'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
					]
				]);?>
				<?=FileInput::widget([
					'name' => 'image[]',
					'language' => 'ru',
					'options' => [
						'multiple' => true,
						'accept' => 'image/*',
					],
					'pluginOptions' => [
						'previewFileType' => 'image',
						'previewSettings' => [
							'image' => ['width' => 'auto', 'height' => '200px'],
						],
						'maxFileCount' => 3,
						'validateInitialCount' => true,
						'overwriteInitial' => false,
						'initialPreview' => $array_image,
						'initialPreviewConfig' => $array_image_cfg,
						'uploadUrl' => '/admin/upload/',
						'browseClass' => 'btn btn-success',
						'uploadClass' => 'btn btn-info',
						'removeClass' => 'btn btn-danger',
						'removeIcon' => '<i class="glyphicon glyphicon-trash"></i> ',
						'showRemove' => false,
					],
					'pluginEvents' => [
						'filepredelete' => 'function(event, key) {
							if ($(".file-input .file-preview-frame").length == 3) {
								$(".file-input .input-group").show();
							}
						}',
						'fileuploaded' => 'function(event, data, previewId, index) {
							var form = data.form, files = data.files, extra = data.extra, response = data.response, reader = data.reader;
							$(".file-input").append(\'<input style="display: none;" type = "text" name = "id_images[]" value = "\'+response["id_image"]+\'" />\');
							$(".file-input input[name=\"id_images[]\"]").each(function(i, value){
								$(this).attr("data-name", files[i]["name"]);
							});
							if ($(".file-input .file-preview-frame").length == 3) {
								$(".file-input .input-group").hide();
							}
						}',
						'filesuccessremove' => 'function(event, id) {
							if ($(".file-input .file-preview-frame").length == 3) {
								$(".file-input .input-group").show();
							}
						}',
					]
				]);?>
				<h3>Для продвижения</h3>
				<?= $form->field($model, 'keywords')->textInput() ?>
				<?= $form->field($model, 'description')->textarea(['rows' => 6])?>
				<br>
				<div class="form-group">
					<?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
					<?= Html::a('Назад', ['/admin/productions/'], ['class'=>'btn btn-primary']) ?>
				</div>
			<?php ActiveForm::end(); ?>
		</div>
	</div>
</div>
<script>page = {files_count: 3};</script>