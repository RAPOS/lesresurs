<?php
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Статьи';
?>
<div class="page text-center">
	<div class="page-head">
		<h2>Статьи</h2>
		<div></div>
	</div>
	<div class="row" style="margin-top: 5px;">
		<div class="col-sm-1 hidden-xs"></div>
		<div class="col-sm-10 text-left">
			<ul class="breadcrumb">
				<li><?=Html::a('Панель управления', '/admin/')?></li>
				<li class="active">Статьи</li>
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
						'class' => 'yii\grid\ActionColumn',
						'buttons' => ['view' => function ($url, $model, $key) {return false;}]
					],
				],
			]); ?>
		</div>
	</div>
</div>
