<?php
require_once("php_scripts/initTranslator.php");
?>

<!DOCTYPE html>
<html lang="<?= $translator->lang; ?>" class="page-contacts">
<head>
	<?php require('include/head.php'); ?>
	<title>Contacts</title>
</head>
<body>
	<?php require('include/header.php'); ?>
	<section class="contacts">
		<div class="container">
			<h2 class="block_main_title">Contact Us</h2>
			<ul class="flex contacts_list">
				<li>
					<div class="title">e-mail</div>
					<div class="description">somemail@mail.com</div>
				</li>
				<li>
					<div class="title">Телефон поррежки</div>
					<div class="description">123456789</div>
				</li>
				<li>
					<div class="title">Скайп\Whatsup</div>
					<div class="description">someSkypeId</div>
				</li>
				<li>
					<div class="title">Адрес регистрации ЮЛ</div>
					<div class="description">Somecountry, Somecity, Somestreet 1</div>
				</li>
				<li>
					<div class="title">Контакты управляющего</div>
					<div class="description">
						<p><b>ФИО:</b> Name Surname</p>
						<p><b>Должность:</b> Должность</p>
						<p><b>Телефон:</b> 987654321</p>
					</div>
				</li>
				<li>
					<div class="title">Налоговый номер \ Банковские данные</div>
					<div class="description">12345679987654321</div>
				</li>
			</ul>
		</div>
	</section>
	<?php require('include/footer.php'); ?>
</body>
</html>
