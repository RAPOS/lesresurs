<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 02.05.2016
 * Time: 16:00
 */
$this->title = 'Галерея';
?>
<div class="page text-center">
    <div class="page-head">
        <h2>Галерея</h2>
        <span>Описание деятельности нашей компании</span>
        <div></div>
    </div>
    <div class="row gallery">
        <?for ($i = 0;$i < 4;$i++) {?>
            <img class="gallery-img left" src="/images/0-2-3.png"/>
            <img class="gallery-img left" src="/images/0-2-3.png"/>
            <img class="gallery-img left" src="/images/0-2-3.png"/>
            <img class="gallery-img left" src="/images/0-2-3.png"/>
            <img class="gallery-img left" src="/images/0-2-3.png"/>
            <img style="margin-right: 0;" class="gallery-img left" src="/images/0-2-3.png"/>
        <?}?>
    </div>
</div>
