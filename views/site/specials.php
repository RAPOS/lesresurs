<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 02.05.2016
 * Time: 15:59
 */
$this->title = 'Спецпредложения';
?>
<div class="page text-center">
    <div class="page-head">
        <h2>Спецпредложения</h2>
        <span>Описание деятельности нашей компании</span>
        <div></div>
    </div>
    <div class="row actions">
        <?$count = 0;
        foreach ($model as $key => $value){
            $count++;?>
            <div <?=$count == 3? 'style="margin-right: 0;"' : ''?> class="item-action left">
                <img class="img-responsive" src="/images/0-2-4.png"/>
                <h3><?=$value->header?></h3>
                <p>
                    <?=$value->text?>
                </p>
                <div class="col-xs-12 col-md-6 date">
                    <?if ($value->status) {?>
                        <p>Действует до <?=$value->date?></p>
                    <?} else {?>
                        <p style="color: red;">Акция закончена</p>
                    <?}?>
                </div>
                <div class="col-xs-12 col-md-6 button">
                    <button type="submit" class="lbutton">Оставить заявку</button>
                </div>
            </div>
        <?}?>
    </div>
</div>