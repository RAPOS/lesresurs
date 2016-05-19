<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Редактирование - Личные данные';

print $this->render('_alert', ['save' => $save]);
?>
<div class="page text-center">
	<div class="page-head">
		<h2>Личные данные</h2>
		<div></div>
	</div>
	<div class="row" style="margin-top: 5px;">
		<div class="col-sm-1 hidden-xs"></div>
		<div class="col-sm-10 text-left">
			<ul class="breadcrumb">
				<li><a href="/admin/">Панель управления</a></li>
				<li class="active">Личные данные</li>
			</ul>
			<?php $form = ActiveForm::begin(); ?>
				<?= $form->field($model, 'name')->input('text', ['value' => ''])->label('Введите новый логин:')?>
				<?= $form->field($model, 'password')->passwordInput(['value' => ''])->label('Введите новый пароль:')?>
				<br>
				<div class="form-group">
					<?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
					<?= Html::a('Назад', ['/admin'], ['class'=>'btn btn-primary']) ?>
				</div>
			<?php ActiveForm::end(); ?>

		</div>
	</div>
</div>