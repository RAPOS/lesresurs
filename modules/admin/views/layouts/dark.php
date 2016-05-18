<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\bootstrap\ButtonDropdown;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\models\LAdmins;

$LAdmins = LAdmins::findOne(Yii::$app->user->id);

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" style="background: none;">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">
    <?php
    NavBar::begin([
		'brandLabel' => Html::img('/images/logo.png', ['class' => 'brand-logo']),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse  nav-green',
        ],
    ]);
	if(!Yii::$app->user->isGuest){
		echo ButtonDropdown::widget([
			'label' => $LAdmins->name,
			'options' => [
				'class' => 'btn-link',
				'style' => 'margin: 8px'
			],
			/* 'dropdown' => [
				'items' => [
					['label' => 'Изменить данные', 'url' => '/admin/userchange'],
				],
			], */
		]);
		echo Nav::widget([
			'options' => ['class' => 'navbar-nav navbar-right'],
			'items' => [
				[
					'label' => 'Вернуться на сайт',
					'url' => Yii::$app->homeUrl,
				],
				[
					'label' => 'Выйти',
					'url' => ['/admin/logout'],
					'linkOptions' => ['data-method' => 'post']
				],
			],
		]);
	}
    NavBar::end();
    ?>
    <div class="container">
		<?if(!Yii::$app->user->isGuest){?>
			<div class="row">
				<div class="col-md-2 hidden-xs">
					<?echo Nav::widget([
						'options' => ['class' => 'navbar-left'],
						'items' => [
							[
								'label' => 'Главная страница',
								'url' => ['/admin/mainpage'],
							],
							[
								'label' => 'Спецпредложения',
								'url' => ['/admin/actions'],
							],
							[
								'label' => 'Продукция',
								'url' => ['/admin/productions'],
							],
							[
								'label' => 'Галерея',
								'url' => ['/admin/gallery'],
							],
							[
								'label' => 'Статьи',
								'url' => ['/admin/articles'],
							],
							[
								'label' => 'Обратная связь',
								'url' => ['/admin/feedback'],
							],
							[
								'label' => 'Изменить данные входа',
								'url' => ['/admin/userchange'],
							],
						],
					]);?>
				</div>
				<div class="col-md-10">
					<?= Breadcrumbs::widget([
						'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
						'homeLink'=>['label' => 'Панель управления', 'url' => '/admin'],
					]) ?>
					<?= $content ?>
				</div>
			</div>
		<?}?>
    </div>
</div>
<footer class="footer">
	<div class="container">
		<div class="row">
			<div style="text-align: center;" class="col-xs-12 col-md-2">
				ООО &laquo;ЛЕСРЕСУРС&raquo; <?= date('Y') ?>
			</div>
			<div class="col-xs-12 col-md-3 col-md-offset-7">
				<div style="width: 194px;margin: 0 auto;text-align: center;" class="clearfix">
					<div style="float: left;margin-right: 10px;">МЫ В СОЦСЕТЯХ</div>
					<a class="footer-icon icon-instagram" href="#" onclick="return false;"></a>
					<a class="footer-icon icon-vk" href="#" onclick="return false;"></a>
					<a class="footer-icon icon-twitter" href="#" onclick="return false;"></a>
				</div>
			</div>
		</div>
	</div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
