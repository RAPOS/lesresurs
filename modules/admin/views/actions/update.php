<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\BActions */
$this->title = 'Акции - Редактировать';
?>
<div class="page text-center">
    <div class="page-head">
        <h2>Акции</h2>
        <div></div>
    </div>
    <div class="row" style="margin-top: 5px;">
        <div class="col-sm-1 hidden-xs"></div>
        <div class="col-sm-10 text-left">
            <ul class="breadcrumb">
                <li><?=Html::a('Панель управления', '/admin/')?></li>
                <li><?=Html::a('Акции', ['/admin/actions/'])?></li>
                <li><?=Html::a($model->header, ['view', 'id' => $model->id])?></li>
                <li class="active">Редактировать</li>
            </ul>
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>
    </div>
</div>
