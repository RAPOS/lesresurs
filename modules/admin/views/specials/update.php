<?php
use yii\helpers\Html;

$this->title = 'Спецпредложения - Редактировать';
?>
<div class="page text-center">
    <div class="page-head hidden-md hidden-lg">
        <h2>Спецпредложения</h2>
        <div></div>
    </div>
    <div class="row" style="margin-top: 5px;">
        <div class="col-sm-12 text-left">
            <ul class="breadcrumb">
                <li><?=Html::a('Панель управления', '/admin/')?></li>
                <li><?=Html::a('Спецпредложения', ['/admin/actions/'])?></li>
                <li><?=Html::a($model->header, ['view', 'id' => $model->id])?></li>
                <li class="active">Редактировать</li>
            </ul>
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>
    </div>
</div>
