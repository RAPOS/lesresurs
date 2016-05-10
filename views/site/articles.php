<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 02.05.2016
 * Time: 16:00
 */
$this->title = 'Статьи';
?>
<div class="page text-center">
    <div class="page-head">
        <h2>Статьи</h2>
        <span>Описание деятельности нашей компании</span>
        <div></div>
    </div>
    <div class="row articles">
        <?foreach ($articles as $key => $value) {?>
            <div class="item-article left">
                <img class="img-responsive" src="/images/0-2-4.png"/>
                <h3><?=$value->header?></h3>
                <p>
                    <?=mb_truncate($value->text, 250)?>
                </p>
                <div class="col-xs-12 col-md-6 date">
                    <p>Добавлено <?=$value->date?></p>
                </div>
                <div class="col-xs-12 col-md-6 button">
                    <button class="lbutton"
                            onclick="location.href='/articles/<?=$value->id?>/'"
                            onmouseover="this.style.background = '#12b154'"
                            onmouseout="this.style.background = '#0b9444'"
                            onmousedown="this.style.background = '#067333'"
                            onmouseup="this.style.background = '#12b154'">Читать далее...</button>
                </div>
            </div>
        <?}?>
    </div>
</div>