<?
$this->title = 'Панель управления';
?>
<div class="page text-center">
	<div class="page-head">
		<h2>Панель управления</h2>
		<div></div>
	</div>
	<div class="row" style="margin-top: 5px;">
		<div class="col-sm-1 hidden-xs"></div>
		<div class="col-sm-10 text-left">
			<ul class="breadcrumb">
				<li class="active"><?=$this->title?></li>
			</ul>
			<div class="row">
				<div class="col-xs-6 col-sm-4 col-md-3 text-center">
					<a class="icon_panel" href="/admin/mainpage/">
						<img src="/images/panel/home.png"/>
						<h3>Главная страница</h3>
						<div></div>
					</a>
				</div>
				<div class="col-xs-6 col-sm-4 col-md-3 text-center">
					<a class="icon_panel" href="/admin/actions/">
						<img src="/images/panel/calendar.png"/>
						<h3>Акции</h3>
						<div></div>
					</a>
				</div>
				<div class="col-xs-6 col-sm-4 col-md-3 text-center">
					<a class="icon_panel" href="/admin/production/">
						<img src="/images/panel/money_bag.png"/>
						<h3>Продукция</h3>
						<div></div>
					</a>
				</div>
				<div class="col-xs-6 col-sm-4 col-md-3 text-center">
					<a class="icon_panel" href="/admin/gallery/">
						<img src="/images/panel/image.png"/>
						<h3>Галерея</h3>
						<div></div>
					</a>
				</div>
				<div class="col-xs-6 col-sm-4 col-md-3 text-center">
					<a class="icon_panel" href="/admin/articles/">
						<img src="/images/panel/book.png"/>
						<h3>Статьи</h3>
						<div></div>
					</a>
				</div>
				<div class="col-xs-6 col-sm-4 col-md-3 text-center">
					<a class="icon_panel" href="/admin/feedback/">
						<img src="/images/panel/speech_bubble.png"/>
						<h3>Обратная связь</h3>
						<div></div>
					</a>
				</div>
				<div class="col-xs-6 col-sm-4 col-md-3 text-center">
					<a class="icon_panel" href="/admin/userchange/">
						<img src="/images/panel/password.png"/>
						<h3>Личные данные</h3>
						<div></div>
					</a>
				</div>
				<div class="col-xs-6 col-sm-4 col-md-3 text-center">
					<a class="icon_panel" href="/admin/logout/">
						<img src="/images/panel/next.png"/>
						<h3>Выход</h3>
						<div></div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>