<?php
use app\models\LImages;
use dosamigos\tinymce\TinyMce;
use kartik\date\DatePicker;
use kartik\file\FileInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\BActions */
/* @var $form yii\widgets\ActiveForm */

$array_image = array();
$array_image_cfg = array();
if (!$model->isNewRecord) {
	$array_id_images = json_decode($model->images);
	for($i=0;$i<count($array_id_images);$i++){
		$LImages = LImages::findOne($array_id_images[$i]);
		$array_image[] = Html::img('/'.$LImages->path, ['class'=>'file-preview-image', 'alt'=>$LImages->name, 'title'=>$LImages->name, 'style'=>'width:auto;height:210px;']);
		$array_image_cfg[] = [
			'caption' => $LImages->name,
			'url' => '/admin/deleteimages/',
			'key' =>  $LImages->id_image,
			'extra' => ['delete_id_img' => $LImages->id_image, 'delete_path' => $LImages->path, 'id_images' => $array_id_images, 'page' => 'sertificate'],
		];
	}
}
if (!$array_image && !$array_image_cfg) {
	$array_image = array();
	$array_image_cfg = array();
}
?>
<div class="lactions-form">
    <?php $form = ActiveForm::begin(); ?>
	<div class="row">
		<div class="col-xs-12 col-sm-6">
			<?= $form->field($model, 'status')->dropDownList (
				[
					'1' => 'Действует',
					'0' => 'Не действует',
				]
			)?>
		</div>
		<div class="col-xs-12 col-sm-6">
			<label class="control-label">Время акции</label>
			<?= DatePicker::widget([
				'name' => 'from_date',
				'value' => '01-Feb-1996',
				'type' => DatePicker::TYPE_RANGE,
				'name2' => 'to_date',
				'value2' => '27-Feb-1996',
				'pluginOptions' => [
					'autoclose'=>true,
					'format' => 'dd-M-yyyy'
				]
			]);?>
		</div>
	</div>
	<?= $form->field($model, 'text')->widget(TinyMce::className(), [
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
			'multiple' => false,
			'accept' => 'image/*',
		],
		'pluginOptions' => [
			'previewFileType' => 'image',
			'previewSettings' => [
				'image' => ['width' => 'auto', 'height' => '210px'],
			],
			'maxFileCount' => 1,
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
				if($(".file-input .file-preview-frame").length == 1){
					$(".file-input .input-group").show();
				}
			}',
			'fileuploaded' => 'function(event, data, previewId, index){
				var form = data.form, files = data.files, extra = data.extra, response = data.response, reader = data.reader;
				$(".file-input").append(\'<input style="display: none;" type="text" data-name="\'+files[0]["name"]+\'" name="id_image" value="\'+response.id_image+\'"/>\');
				if($(".file-input .file-preview-frame").length == 1){
					$(".file-input .input-group").hide();
				}
			}',
			'filesuccessremove' => 'function(event, id){
				if($(".file-input .file-preview-frame").length == 1){
					$(".file-input .input-group").show();
				}
			}',
		]
	]);?>
	<br>
	<div class="form-group">
		<?= Html::submitButton($model->isNewRecord ? 'Сохранить' : 'Обновить', ['class' => 'btn btn-success']) ?>
		<?= Html::a('Назад', ['/admin/actions/'], ['class'=>'btn btn-primary']) ?>
	</div>
    <?php ActiveForm::end(); ?>
</div>
<script>page = {files_count: 1};</script>