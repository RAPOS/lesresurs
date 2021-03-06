<?php
use yii\helpers\Html;

$this->title = 'Продукция - Добавить';
?>
<div class="page text-center">
    <div class="page-head hidden-md hidden-lg">
        <h2>Продукция</h2>
        <div></div>
    </div>
    <div class="row" style="margin-top: 5px;">
        <div class="col-sm-12 text-left">
            <ul class="breadcrumb">
                <li><?=Html::a('Панель управления', '/admin/')?></li>
                <li><?=Html::a('Продукция', ['/admin/productions/'])?></li>
                <li class="active">Добавить</li>
            </ul>
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>
    </div>
</div>
