<?php
use yii\helpers\Html;

$this->title = 'Спецпредложения - Добавить';
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
                <li><?=Html::a('Спецпредложения', ['/admin/actions/'])?></li>
                <li class="active">Добавить</li>
            </ul>
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>
    </div>
</div>
