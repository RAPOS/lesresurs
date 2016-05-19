<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
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
	echo Nav::widget([
		'options' => ['class' => 'navbar-nav navbar-center'],
		'items' => [
			[
				'label' => 'Продажа леса',
				'url' => ['/site/lumbering'],
				'linkOptions' => [
					'class' => 'hidden-xs',
				],
			],
			[
				'label' => 'Спецпредложения',
				'url' => ['/site/specials'],
				'linkOptions' => [
					'class' => 'hidden-xs',
				],
			],
			'<li><a class="a-logo hidden-xs" href="/"><img class="nav-logo" src="/images/logo.png"/></a></li>',
			[
				'label' => 'Галлерея',
				'url' => ['/site/gallery'],
				'linkOptions' => [
					'class' => 'hidden-xs',
				],
			],
			[
				'label' => 'Статьи',
				'url' => ['/site/articles'],
				'linkOptions' => [
					'class' => 'hidden-xs',
				],
			],
			[
				'label' => 'Контакты',
				'url' => ['/site/contacts'],
				'linkOptions' => [
					'class' => 'hidden-xs',
				],
			],
			[
				'label' => 'Главная страница',
				'url' => ['/admin/mainpage'],
				'linkOptions' => [
					'class' => 'visible-xs',
				],
			],
			[
				'label' => 'Спецпредложения',
				'url' => ['/admin/actions'],
				'linkOptions' => [
					'class' => 'visible-xs',
				],
			],
			[
				'label' => 'Продукция',
				'url' => ['/admin/productions'],
				'linkOptions' => [
					'class' => 'visible-xs',
				],
			],
			[
				'label' => 'Галерея',
				'url' => ['/admin/gallery'],
				'linkOptions' => [
					'class' => 'visible-xs',
				],
			],
			[
				'label' => 'Статьи',
				'url' => ['/admin/articles'],
				'linkOptions' => [
					'class' => 'visible-xs',
				],
			],
			[
				'label' => 'Обратная связь',
				'url' => ['/admin/feedback'],
				'linkOptions' => [
					'class' => 'visible-xs',
				],
			],
			[
				'label' => 'Изменить данные входа',
				'url' => ['/admin/userchange'],
				'linkOptions' => [
					'class' => 'visible-xs',
				],
			],
		],
	]);
    NavBar::end();
    ?>
    <div class="container">
		<div class="row">
			<div class="col-sm-2 hidden-xs"></div>
			<div class="col-sm-8">
				<?= Breadcrumbs::widget([
					'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
					'homeLink'=>['label' => 'Панель управления', 'url' => '/admin'],
				]) ?>
				<?= $content ?>
			</div>
			<div class="col-sm-2 hidden-xs"></div>
		</div>
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
