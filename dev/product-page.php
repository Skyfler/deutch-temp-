<?php
require_once("php_scripts/initTranslator.php");
?>

<!DOCTYPE html>
<html lang="<?= $translator->lang; ?>" class="page-product">
<head>
	<?php require('include/head.php'); ?>
	<title>product (copy)</title>
</head>
<body>
	<?php require('include/header.php'); ?>
	<section class="intro">
		<div class="container">
			<h2 class="first_line">The Best Just Got Better.</h2>
			<p class="second_line">The new uTorrent Pro is faster, smarter and safer. Instantly stream torrents. No waiting.</p>
			<a href="#" class="details btn">Получите µTorrent Pro <span class="line small">$19.95 USD/год</span></a>
		</div>
	</section>
	<section class="slider_block">
		<div class="container">
			<h2 class="block_main_title">A premium torrenting experience.</h2>
			<div class="slider" id="product_vertical_slider">
				<div class="flex-nowrap flex-center-y">
					<ul class="slider_controlls">
						<li><a href="#" data-action="change-slide" data-target-slide-index="0"><i class="fa fa-search"></i>Find a torrent</a></li>
						<li><a href="#" data-action="change-slide" data-target-slide-index="1"><i class="fa fa-arrow-down"></i>Загрузить</a></li>
						<li><a href="#" data-action="change-slide" data-target-slide-index="2"><i class="fa fa-play"></i>Stream</a></li>
						<li><a href="#" data-action="change-slide" data-target-slide-index="3"><i class="fa fa-mobile-phone"></i>Offline playback</a></li>
					</ul>
					<div class="overflow_hidden_container image_overflow_hidden_container">
						<div class="overflow_block image_overflow_block">
							<div class="slider_slide image_slide">
								<img src="img/product_slider/find-torrent.png" alt="" class="responsive_img">
							</div>
							<div class="slider_slide image_slide">
								<img src="img/product_slider/download.png" alt="" class="responsive_img">
							</div>
							<div class="slider_slide image_slide">
								<img src="img/product_slider/stream.png" alt="" class="responsive_img">
							</div>
							<div class="slider_slide image_slide">
								<img src="img/product_slider/offline.png" alt="" class="responsive_img">
							</div>
						</div>
					</div>
				</div>
				<div class="overflow_hidden_container text_overflow_hidden_container">
					<div class="overflow_block text_overflow_block">
						<div class="slider_slide text_slide">Поиск торрент-файлов и Magnet-ссылок в Интернете. Ты также можете осуществлять поиск среди тысяч BitTorrent Bundles напрямую через µtorrent.</div>
						<div class="slider_slide text_slide">Downloading torrents is fast and easy with µTorrent. Bandwidth usage is auto-adjusted so that online activities, such as gaming and streaming, are never affected.</div>
						<div class="slider_slide text_slide">After a download has started, click ‘play now’ to instantly play back that file. You don’t need to wait for the download to finish.</div>
						<div class="slider_slide text_slide">Every torrent is downloaded for offline playback. Enjoy the media on your PC, or convert files to play on iPhones, Android phones, gaming consoles and more.</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="image_blocks_container">
		<div class="container">
			<div class="image_block flex flex-center-y">
				<div class="text_container flex flex-cenetr-x flex-center-y">
					<p class="title">Instant gratification.</p>
					<p>Don't want to wait for your files to completely download? No problem. With µTorrent pro, you can play back a file immediately after the download has started.</p>
				</div>
				<div class="img_container flex flex-center-x flex-center-y"><img src="img/instant-gratification.png" alt="" class="responsive_img"></div>
			</div>
			<div class="image_block flex flex-center-y">
				<div class="text_container flex flex-cenetr-x flex-center-y">
					<p class="title">Play back your files on your mobile devices.</p>
					<p>Convert your files to play on popular devices such as iPhones, Android phones, iPads, gaming consoles, Apple TV and more.</p>
				</div>
				<div class="img_container flex flex-center-x flex-center-y"><img src="img/mobile-devices.png" alt="" class="responsive_img"></div>
			</div>
			<div class="image_block flex flex-center-y">
				<div class="text_container flex flex-cenetr-x flex-center-y">
					<p class="title">Automatic protection from viruses.</p>
					<p>µTorrent Pro will automatically scan downloads to keep your PC safe from dangerous viruses and malware.</p>
				</div>
				<div class="img_container flex flex-center-x flex-center-y"><img src="img/laptop.png" alt="" class="responsive_img"></div>
			</div>
		</div>
	</section>
	<section class="features_container">
		<div class="container flex">
			<h2 class="block_main_title">Also get these other features.</h2>
			<div class="feature feature1">
				<p class="title">Отсутствие рекламы</p>
				<p>As a Pro user of µTorrent, you can enjoy an ad-free experience.</p>
			</div>
			<div class="feature feature2">
				<p class="title">HD Player</p>
				<p>µTorrent Pro includes a media player with reliable HD codecs.</p>
			</div>
			<div class="feature feature3">
				<p class="title">BitTorrent Bundles</p>
				<p>Download media directly from a variety of artists, bands, authors and filmmakers.</p>
			</div>
		</div>
	</section>
	<section class="text_info_1">
		<div class="container">
			<h2 class="block_main_title">24/7 customer support.</h2>
			<p>Need some help? Support agents are available around the clock to answer questions.</p>
		</div>
	</section>
	<section class="feedback_slider">
		<div class="container">
			<div class="slider" id="feedback_slider">
				<div class="slider_controlls_container">
					<button class="arrow arrow_left" data-component="slider_control" data-action="back"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
					<button class="arrow arrow_right" data-component="slider_control" data-action="forward"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
				</div>
				<div class="overflow_hidden_container">
					<div class="overflow_block clr flex flex-center-y">
						<div class="slider_slide" data-component="slide">
							<p>"uTorrent Pro was easy to use and it was a lot quicker than waiting for a standard download."</p>
						</div>
						<div class="slider_slide" data-component="slide">
							<p>"Everything was very smooth and I’m very impressed with the quality of the streaming experience."</p>
						</div>
						<div class="slider_slide" data-component="slide">
							<p>"Streaming torrents is much simpler than having to open the files manually. A much welcomed feature."</p>
						</div>
					</div>
				</div>
				<div class="slider_dot_controlls flex flex-center-x flex-center-y" id="page_slide5_slider_controlls">
					<ul class="slider_dot_controlls_list flex-nowrap flex-center-y"></ul>
				</div>
			</div>
		</div>
	</section>
	<section class="info_table">
		<div class="container">
			<div class="row">
				<h2 class="block_main_title">Faster, safer, smarter with µTorrent Pro.</h2>
				<div class="table_desktop">
					<table>
						<thead>
							<tr>
								<th>Features</th>
								<th>Pro</th>
								<th>Бесплатно</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>Stream instantly: Watch your torrents without waiting</th>
								<td><span class="check"></span></td>
								<td></td>
							</tr>
							<tr>
								<th>Protect your PC: Keep it safe from viruses and malware</th>
								<td><span class="check"></span></td>
								<td></td>
							</tr>
							<tr>
								<th>Convert and Play: Convert your files, play in HD and on the go</th>
								<td><span class="check"></span></td>
								<td></td>
							</tr>
							<tr>
								<th>Get Premium access to new features and customer support</th>
								<td><span class="check"></span></td>
								<td></td>
							</tr>
							<tr>
								<th>Free of ads, free of interruptions</th>
								<td><span class="check"></span></td>
								<td></td>
							</tr>
							<tr>
								<th>Full library of cool content and bundles</th>
								<td><span class="check"></span></td>
								<td><span class="check"></span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="table_tablet">
					<ul>
						<li class="title">Обновление до Pro</li>
						<li class="flex-nowrap flex-center-y">
							<div>Stream instantly: Watch your torrents without waiting</div>
							<span class="check"></span>
						</li>
						<li class="flex-nowrap flex-center-y">
							<div>Protect your PC: Keep it safe from viruses and malware</div>
							<span class="check"></span>
						</li>
						<li class="flex-nowrap flex-center-y">
							<div>Convert and Play: Convert your files, play in HD and on the go</div>
							<span class="check"></span>
						</li>
						<li class="flex-nowrap flex-center-y">
							<div>Get Premium access to new features and customer support</div>
							<span class="check"></span>
						</li>
						<li class="flex-nowrap flex-center-y">
							<div>Free of ads, free of interruptions</div>
							<span class="check"></span>
						</li>
						<li class="flex-nowrap flex-center-y">
							<div>Full library of cool content and bundles</div>
							<span class="check"></span>
						</li>
					</ul>
					<ul>
						<li class="title">Бесплатно</li>
						<li class="flex-nowrap flex-center-y">
							<div>Full library of cool content and bundles</div>
							<span class="check"></span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section class="text_info_2">
		<div class="container">
			<h2 class="block_main_title">Ready to upgrade to µTorrent Pro?</h2>
			<button class="btn">Get It Now <span class="line small">$19.95 USD/год</span></button>
		</div>
	</section>
	<?php require('include/footer.php'); ?>
</body>
</html>
