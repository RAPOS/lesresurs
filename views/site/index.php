<?php

/* @var $this yii\web\View */

$this->title = 'ООО «ЛЕС РЕСУРС»';
?>
<div style="margin-top: -23px;" class="page text-center">
    <div class="page-head">
        <h2>Продукция</h2>
        <span>Перечень выпускаемой продукции</span>
        <div></div>
    </div>
    <div class="row products">
        <div class="col-xs-12 col-md-3">
            <div class="production-item">
                <img src="/images/Productions-23.png"/>
                <h3>Лес кругляк</h3>
                <p>
                    Кругляк изготавливают из стволов
                    спиленных деревьев, ствол которых
                    очищен от сучков и неровностей.
                </p>
                <button class="lbutton"
                    onmouseover="this.style.background = '#12b154'"
                    onmouseout="this.style.background = '#0b9444'"
                    onmousedown="this.style.background = '#067333'"
                    onmouseup="this.style.background = '#12b154'">Подробнее</button>
            </div>
        </div>
        <div class="col-xs-12 col-md-3">
            <div class="production-item">
                <img src="/images/Productions-24.png"/>
                <h3>Пиловочник</h3>
                <p>
                    Круглые лесоматериалы - бревна
                    и кряжы хвойных и лиственных
                    пород древесины.
                </p>
                <button class="lbutton"
                        onmouseover="this.style.background = '#12b154'"
                        onmouseout="this.style.background = '#0b9444'"
                        onmousedown="this.style.background = '#067333'"
                        onmouseup="this.style.background = '#12b154'">Подробнее</button>
            </div>
        </div>
        <div class="col-xs-12 col-md-3">
            <div class="production-item">
                <img src="/images/Productions-25.png"/>
                <h3>Тонкомер</h3>
                <p>
                    Тонкоствольная древесина, которая
                    используется для создания лесов и в
                    других целях при строительстве.
                </p>
                <button class="lbutton"
                        onmouseover="this.style.background = '#12b154'"
                        onmouseout="this.style.background = '#0b9444'"
                        onmousedown="this.style.background = '#067333'"
                        onmouseup="this.style.background = '#12b154'">Подробнее</button>
            </div>
        </div>
        <div class="col-xs-12 col-md-3">
            <div class="production-item">
                <img src="/images/Productions-26.png"/>
                <h3>Баланс</h3>
                <p>
                    Специалисты нашей компании
                    предоставят полную информацию о
                    качестве продукции и возможных...
                </p>
                <button class="lbutton"
                        onmouseover="this.style.background = '#12b154'"
                        onmouseout="this.style.background = '#0b9444'"
                        onmousedown="this.style.background = '#067333'"
                        onmouseup="this.style.background = '#12b154'">Подробнее</button>
            </div>
        </div>
    </div>
    <div class="page-head">
        <h2>О компании</h2>
        <span>Описание деятельности нашей компании</span>
        <div></div>
    </div>
    <div class="row text-left company">
        <div class="col-xs-12 col-md-6">
            <h3>Деятельность</h3>
            <?=$model->text_activity?>
        </div>
        <div class="col-xs-12 col-md-6">
            <h3>Производство</h3>
            <?=$model->text_production?>
        </div>
    </div>
</div>