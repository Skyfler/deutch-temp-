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
			<h4 class="col_title"><?= __("download"); ?></h4>
			<ul class="links_list">
				<li><a href="#"><?= __("download_act"); ?> <?= __("for_win"); ?></a></li>
				<li><a href="#"><?= __("download_db"); ?> <?= __("for_win"); ?></a></li>
			</ul>
		</div>
		<div class="col">
			<h4 class="col_title"><?= __("company"); ?></h4>
			<ul class="links_list">
				<li><a href="about"><?= __("about"); ?></a></li>
				<li><a href="#"><?= __("privacy_policy"); ?></a></li>
				<li><a href="#">EULA</a></li>
				<li><a href="#">Copyright</a></li>
				<li><a href="terms_of_use"><?= __("terms"); ?></a></li>
			</ul>
		</div>
		<div class="col">
			<h4 class="col_title"><?= __("help"); ?></h4>
			<ul class="links_list">
				<li><a href="contacts"><?= __("contacts"); ?></a></li>

			</ul>
		</div>
		<div class="copyright"><?= __("copyright"); ?></div>
	</div>
</footer>
<script src="scripts/build.min.js"></script>
