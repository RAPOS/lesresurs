<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 08.05.2016
 * Time: 01:07
 */
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

Yii::$app->assetManager->forceCopy = true;

$this->title = 'Контакты';

if (!is_null($save)) print $this->render('_alert', ['save' => $save, 'captcha' => $captcha]);
?>
<div class="page text-center">
    <div class="page-head">
        <h2>Контакты</h2>
        <span>Описание деятельности нашей компании</span>
        <div></div>
    </div>
    <div class="row" style="text-align: left;">
        <div class="col-xs-12 col-sm-8">
            <div class="block-head">
                <h3>Обратная связь</h3>
                <div></div>
            </div>
            <p style="margin-top: 15px;">
                <?=$contacts->text_form?>
            </p>
            <div class="row">
                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                <div class="col-xs-12 col-sm-6">
                    <?= $form->field($feedback, 'name')->input('text', ['id' => 'name']) ?>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <?= $form->field($feedback, 'email')->input('text', ['id' => 'email']) ?>
                </div>
                <div class="col-xs-12">
                    <?= $form->field($feedback, 'subject')->input('text', ['id' => 'subject']) ?>
                </div>
                <div class="col-xs-12">
                    <?= $form->field($feedback, 'text')->textArea(['id' => 'text', 'rows' => '6']) ?>
                </div>
                <div class="col-sm-6 hidden-xs"></div>
                <div class="col-xs-12 col-sm-6">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" id="copy" value="1">
                            Выслать копию письма на мою почту
                        </label>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <?= $form->field($feedback, 'verifyCode')->widget(Captcha::className(), [
                        'captchaAction' => 'site/captcha',
                        'options' => [
                            'class' => 'form-control',
                            'style' => 'font-size: 24px;padding-left: 10px;padding-right: 10px;margin-left: 0px;height: 40px;',
                        ],
                        'template' => '<div class="row"><div class="col-xs-12 col-md-5">{image}</div><div class="col-xs-12 col-md-6">{input}</div></div>',
                    ])->label('Введите символы с картинки') ?>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <button type="submit" class="lbutton">Отправить письмо</button>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4">
            <div class="block-head">
                <h3>Местоположение</h3>
                <div></div>
            </div>
            <p class="contact-right">
                <?=$contacts->text_place?>
            </p>
            <div class="block-head" style="margin-top: 60px;">
                <h3>Контактные данные</h3>
                <div></div>
            </div>
            <p class="contact-right">
                <?=$contacts->text_contact?>
            </p>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
       $('#name').after('<span class="form-icon form-icon-user form-control-feedback" aria-hidden="true"></span>');
       $('#email').after('<span class="form-icon form-icon-envelope form-control-feedback" aria-hidden="true"></span>');
       $('#subject').after('<span class="form-icon form-icon-star form-control-feedback" aria-hidden="true"></span>');
       $('#text').after('<span class="form-icon form-icon-pencil form-control-feedback" aria-hidden="true"></span>');
    });
</script>