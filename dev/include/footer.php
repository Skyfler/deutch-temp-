<footer>
	<div class="container flex">
		<div class="col">
			<div id="lang_switch_footer" class="customselect">
				<button class="title"></button>
				<ul class="option_list">
					<li class="option" data-value="en" <?= $translator->lang === 'en' ? 'data-selected' : ''; ?>>English</li>
					<li class="option" data-value="de" <?= $translator->lang === 'de' ? 'data-selected' : ''; ?>>Deutsch</li>
					<li class="option" data-value="ru" <?= $translator->lang === 'ru' ? 'data-selected' : ''; ?>>Русский</li>
				</ul>
			</div>
			<ul class="soc_list">
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram"></i></a></li>
			</ul>
		</div>
		<div class="col">
			<h4 class="col_title">Загрузить</h4>
			<ul class="links_list">
				<li><a href="#">Windows</a></li>
				<li><a href="#">Mac</a></li>
				<li><a href="#">Linux</a></li>
				<li><a href="#">Мобильная версия</a></li>
				<li><a href="#">Remote</a></li>
			</ul>
		</div>
		<div class="col">
			<h4 class="col_title">Компания</h4>
			<ul class="links_list">
				<li><a href="#">О нас</a></li>
				<li><a href="#">Блог</a></li>
				<li><a href="#">Конфи&shy;ден&shy;ци&shy;аль&shy;ность</a></li>
				<li><a href="#">EULA</a></li>
				<li><a href="#">Copyright</a></li>
				<li><a href="#">Условия</a></li>
				<li><a href="#">Реклама</a></li>
			</ul>
		</div>
		<div class="col">
			<h4 class="col_title">Справка</h4>
			<ul class="links_list">
				<li><a href="#">Справка</a></li>
				<li><a href="#">Форумы</a></li>
			</ul>
		</div>
		<div class="copyright">&copy;2017 BitTorrent, Inc. µTorrent является торговой маркой BitTorrent, Inc.</div>
	</div>
</footer>
<script src="scripts/build.min.js"></script>
