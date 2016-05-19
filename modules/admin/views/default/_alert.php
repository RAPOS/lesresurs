<?php
/**
 * Created by PhpStorm.
 * User: Aliscom4
 * Date: 19.05.2016
 * Time: 17:08
 */
use kartik\alert\Alert;

if (isset($captcha) && !$captcha) {
    echo Alert::widget([
        'type' => Alert::TYPE_DANGER,
        'title' => 'Ошибка! Сообщение не отправлено!',
        'icon' => 'glyphicon glyphicon-remove-sign',
        'body' => 'Вы не верно ввели проверочный код!',
        'showSeparator' => true,
        'delay' => 5000,
        'options' => [
            'style' => 'position: absolute;top: 0;right: 0;width: 400px;',
        ],
    ]);
}

if($save){
    echo Alert::widget([
        'type' => Alert::TYPE_SUCCESS,
        'icon' => 'glyphicon glyphicon-ok-sign',
        'body' => 'Изменения успешно сохранены!',
        'showSeparator' => true,
        'delay' => 5000,
        'options' => [
            'style' => 'position: fixed;top: 100px;right: 0;width: 400px;',
        ],
    ]);
} else {
    echo Alert::widget([
        'type' => Alert::TYPE_DANGER,
        'icon' => 'glyphicon glyphicon-remove-sign',
        'body' => 'Не удалось сохранить!',
        'showSeparator' => true,
        'delay' => 5000,
        'options' => [
            'style' => 'position: fixed;top: 100px;right: 0;width: 400px;',
        ],
    ]);
}

if (Yii::$app->getSession()->has('captcha')) Yii::$app->getSession()->remove('captcha');
if (Yii::$app->getSession()->has('save')) Yii::$app->getSession()->remove('save');