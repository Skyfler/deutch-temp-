<?php
require_once("php_scripts/initTranslator.php");
?>

<!DOCTYPE html>
<html lang="<?= $translator->lang; ?>" class="page-index">
<head>
	<?php require('include/head.php'); ?>
	<title>uTorrent (copy)</title>
</head>
<body>
	<?php require('include/header.php'); ?>
	<section class="intro_main">
		<div class="container">
			<h2 class="first_line">Минимальный размер. Максимум функций.<br><?= __("somestring"); ?></h2>
			<p class="second_line">Простой, понятный и эффективный торрент-клиент.</p>
			<a href="#" class="details btn">Скачайте µTorrent <span class="line small">Для Windows</span></a>
		</div>
	</section>
	<section class="assets">
		<div class="container flex">
			<h2 class="block_main_title">Почему он потрясающий?</h2>
			<div class="asset_block asset1">
				<h4 class="title">Занимает мало места</h4>
				<div class="description">µTorrent занимает чуть более 2 МБ (меньше, чем цифровая фотография!). Он исключительно быстро устанавливается и никогда не будет разбазаривать ваши ценные системные ресурсы.</div>
			</div>
			<div class="asset_block asset2">
				<h4 class="title">Мощный</h4>
				<div class="description">Want total control? uTorrent offers advanced settings such as automation, scripting, remote management and more.</div>
			</div>
			<div class="asset_block asset3">
				<h4 class="title">Высокая скорость</h4>
				<div class="description">Скачивайте файлы настолько быстро и эффективно, насколько это возможно, без замедления вашей деятельности в Интернете.</div>
			</div>
			<div class="asset_block asset4">
				<h4 class="title">BitTorrent Now</h4>
				<div class="description">Fresh new music, video, and culture direct to your computer, phone, or TV. Experience underground songs, stories, and more from thousands of artists.</div>
			</div>
		</div>
	</section>
	<section class="info_table">
		<div class="container">
			<h2 class="block_main_title">Choose the µTorrent that's best for you.</h2>
			<div class="table_desktop">
				<table>
					<thead>
						<tr>
							<th></th>
							<th>µTorrent</th>
							<th>µTorrent Ad-free</th>
							<th>µTorrent Pro</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>Быстрые загрузки с автоматическим управлением пропускной способностью канала</th>
							<td><span class="check"></span></td>
							<td><span class="check"></span></td>
							<td><span class="check"></span></td>
						</tr>
						<tr>
							<th>Никакой рекламы</th>
							<td></td>
							<td><span class="check"></span></td>
							<td><span class="check"></span></td>
						</tr>
						<tr>
							<th>Автоматическая защита от вирусов и вредоносных программ</th>
							<td></td>
							<td></td>
							<td><span class="check"></span></td>
						</tr>
						<tr>
							<th>Премиум-поддержка пользователей</th>
							<td></td>
							<td></td>
							<td><span class="check"></span></td>
						</tr>
						<tr>
							<th>Конвертация загруженных файлов для воспроизведения на любом устройстве</th>
							<td></td>
							<td></td>
							<td><span class="check"></span></td>
						</tr>
						<tr>
							<th>Мгновенное воспроизведение потокового торрент-видео</th>
							<td></td>
							<td></td>
							<td><span class="check"></span></td>
						</tr>
						<tr class="footer">
							<th></th>
							<td><button class="btn btn_transparent">Скачайте µTorrent <span class="line small">Для Windows</span></button></td>
							<td><button class="btn">Получите µTorrent Ad-free <span class="line small">$4.95 USD/год</span></button></td>
							<td><button class="btn">Получите µTorrent Pro <span class="line small">$19.95 USD/год</span></button></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="table_tablet">
				<ul>
					<li class="title">µTorrent</li>
					<li class="flex-nowrap flex-center-y">
						<div>Быстрые загрузки с автоматическим управлением пропускной способностью канала</div>
						<span class="check"></span>
					</li>
					<li class="last"><button class="btn btn_transparent">Скачайте µTorrent <span class="line small">Для Windows</span></button></li>
				</ul>
				<ul>
					<li class="title">µTorrent Ad-Free</li>
					<li class="flex-nowrap flex-center-y">
						<div>Быстрые загрузки с автоматическим управлением пропускной способностью канала</div>
						<span class="check"></span>
					</li>
					<li class="flex-nowrap flex-center-y">
						<div>Никакой рекламы</div>
						<span class="check"></span>
					</li>
					<li class="last"><button class="btn">Получите µTorrent Ad-free <span class="line small">$4.95 USD/год</span></button></li>
				</ul>
				<ul>
					<li class="title">µTorrent Pro</li>
					<li class="flex-nowrap flex-center-y">
						<div>Быстрые загрузки с автоматическим управлением пропускной способностью канала</div>
						<span class="check"></span>
					</li>
					<li class="flex-nowrap flex-center-y">
						<div>Никакой рекламы</div>
						<span class="check"></span>
					</li>
					<li class="flex-nowrap flex-center-y">
						<div>Автоматическая защита от вирусов и вредоносных программ</div>
						<span class="check"></span>
					</li>
					<li class="flex-nowrap flex-center-y">
						<div>Премиум-поддержка пользователей</div>
						<span class="check"></span>
					</li>
					<li class="flex-nowrap flex-center-y">
						<div>Конвертация загруженных файлов для воспроизведения на любом устройстве</div>
						<span class="check"></span>
					</li>
					<li class="flex-nowrap flex-center-y">
						<div>Мгновенное воспроизведение потокового торрент-видео</div>
						<span class="check"></span>
					</li>
					<li class="last"><button class="btn">Получите µTorrent Pro <span class="line small">$19.95 USD/год</span></button></li>
				</ul>
			</div>
		</div>
	</section>
	<?php require('include/footer.php'); ?>
</body>
</html>
