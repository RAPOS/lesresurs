<?php
use kartik\widgets\Alert;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

Yii::$app->assetManager->forceCopy = true;

$this->title = 'Вход в панель управления';

if ($error) {
    echo Alert::widget([
        'type' => Alert::TYPE_DANGER,
        'title' => 'Ошибка авторизации!',
        'icon' => 'glyphicon glyphicon-ok-sign',
        'body' => $error,
        'showSeparator' => true,
        'delay' => 10000,
        'options' => [
            'style' => 'position: absolute;top: 0;right: 0;width: 400px;',
        ],
    ]);
}
?>
<div class="page text-center">
    <div class="page-head">
        <h2>Панель управления</h2>
        <span>Описание деятельности нашей компании</span>
        <div></div>
    </div>
    <div class="row" style="margin-top: 5px">
        <div class="col-sm-4"></div>
        <div class="col-sm-4 text-left">
            <?php $form = ActiveForm::begin(); ?>
                <?= $form->field($model, 'name') ?>
                <?= $form->field($model, 'password')->passwordInput() ?>
                <?= $form->field($model, 'rememberMe')->checkbox([
                    'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
                ]) ?>
                <div class="form-group">
                    <?= Html::submitButton('Авторизация', ['class' => 'lbutton']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>