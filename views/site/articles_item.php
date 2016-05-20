<?php
/**
 * Created by PhpStorm.
 * User: Aliscom4
 * Date: 10.05.2016
 * Time: 16:26
 */
$this->title = 'Статьи - ' . $articles->header;
?>
<div class="page text-center">
    <div class="page-head">
        <h2>Статьи</h2>
        <span>Описание деятельности нашей компании</span>
        <div></div>
    </div>
    <div class="page-article">
        <h3><?=$articles->header?></h3>
        <img class="img-responsive" src="/images/articlesimage.jpeg" />
        <p><?=$articles->text?></p>
        <div class="share">
            <button class="btn btn-primary" onclick="$('.bubble').css('display', ($('.bubble').css('display') == 'none') ? 'block' : 'none')">Поелиться статьей</button>
            <div class="bubble">
                <script type="text/javascript" src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js" charset="utf-8"></script>
                <script type="text/javascript" src="//yastatic.net/share2/share.js" charset="utf-8"></script>
                <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,gplus,twitter,surfingbird,tumblr,viber,whatsapp"></div>
            </div>
        </div>
    </div>
</div>