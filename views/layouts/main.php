<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
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
        'options' => [
            'class' => 'navbar-inverse  nav-green', // navbar-fixed-top
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-center'],
        'items' => [
            ['label' => 'Продажа леса', 'url' => ['/site/lumbering']],
            ['label' => 'Спецпредложения', 'url' => ['/site/specials']],
            '<li><a class="a-logo" href="/"><img class="nav-logo" src="/images/logo.png"/></a></li>',
            ['label' => 'Галлерея', 'url' => ['/site/gallery']],
            ['label' => 'Статьи', 'url' => ['/site/articles']],
            ['label' => 'Контакты', 'url' => ['/site/contacts']],
        ],
    ]);
    NavBar::end();
    ?>
    <?if ((Yii::$app->controller->id == 'site') and (Yii::$app->controller->action->id == 'index'))  {?>
        <div class="banner-main">
            <div class="container">
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <?= $content ?>
            </div>
        </div>
    <?} else {?>
        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div>
    <?}?>
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
