<header id="header">
	<div class="container flex-nowrap flex-center-y">
		<div class="brand">
			<h1 class="logo_container">
				<a href="/" class="navbar_brand flex flex-center-y">
					<img src="img/logo.png" alt="µTorrent" class="responsive_img">
				</a>
			</h1>
		</div>
		<button class="menu_open_btn" id="header_menu_open_btn"></button>
		<nav class="main_nav" id="header_menu">
			<div class="nav_inner">
				<button class="menu_close_btn" id="header_menu_close_btn">×</button>
				<ul class="main_menu flex flex-center-y">
					<li class="submenu_container">
						<span><?= __("products"); ?></span>
						<div class="submenu">
							<ul>
								<li><a href="product-page">Act2018</a></li>
								<li><a href="product-page">Database</a></li>
							</ul>
						</div>
					</li>
					<li><a href="about"><?= __("about"); ?></a></li>
					<li><a href="contacts"><?= __("contacts"); ?></a></li>
					<li id="lang_switch_header" class="customselect">
						<button class="title"></button>
						<ul class="option_list">
							<li class="option" data-value="en" <?= $translator->lang === 'en' ? 'data-selected' : ''; ?>>English</li>
							<li class="option" data-value="de" <?= $translator->lang === 'de' ? 'data-selected' : ''; ?>>Deutsch</li>
							<li class="option" data-value="ru" <?= $translator->lang === 'ru' ? 'data-selected' : ''; ?>>Русский</li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</header>
