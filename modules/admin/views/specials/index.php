<?php
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Спецпредложения';
?>
<div class="page text-center">
	<div class="page-head">
		<h2>Спецпредложения</h2>
		<div></div>
	</div>
	<div class="row" style="margin-top: 5px;">
		<div class="col-sm-1 hidden-xs"></div>
		<div class="col-sm-10 text-left">
			<ul class="breadcrumb">
				<li><?=Html::a('Панель управления', '/admin/')?></li>
				<li class="active">Спецпредложения</li>
			</ul>
			<p>
				<?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
			</p>
			<?= GridView::widget([
				'dataProvider' => $dataProvider,
				'columns' => [
					['class' => 'yii\grid\SerialColumn'],
					'id',
					[
						'attribute' => 'date',
						'format' => ['date', 'php:d.m.Y']
					],
					[
						'attribute' => 'text',
						'format' => 'html',
						'contentOptions' => ['style' => 'width: 410px;'],
					],
					[
						'attribute' => 'status',
						'format' => 'html',
						'value' => function ($model, $key, $index, $column){
							if($model['status']){
								return '<img src="/images/panel/checkmark.png" width="32"/>';
							} else {
								return '<img src="/images/panel/cancel.png" width="32"/>';
							}
						},
					],
					[
						'class' => 'yii\grid\ActionColumn',
						'buttons' => ['view' => function ($url, $model, $key) {return false;}]
					],
				],
			]); ?>
		</div>
	</div>
</div>