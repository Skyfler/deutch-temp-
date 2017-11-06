<?php
require_once("php_scripts/initTranslator.php");
?>

<!DOCTYPE html>
<html lang="<?= $translator->lang; ?>" class="page-contacts">
<head>
	<?php require('include/head.php'); ?>
	<title>Контакты</title>
</head>
<body>
	<?php require('include/header.php'); ?>
	<section class="contacts">
		<div class="container">
			<h2 class="block_main_title"><?= __("block_main_title_contacts"); ?></h2>
			<ul class="flex contacts_list">
				<li>
					<div class="title"><?= __("help_email_1"); ?></div>
					<div class="description"><?= __("help_email_2"); ?></div>
				</li>
				<li>
					<div class="title"><?= __("help_phone_1"); ?></div>
					<div class="description">0171 288 96 80</div>
				</li>
				<li>
					<div class="title"><?= __("help_whatsup_1"); ?></div>
					<div class="description">0171 288 96 80</div>
				</li>
				<li>
					<div class="title"><?= __("help_adress_1"); ?></div>
					<div class="description"><?= __("help_adress_2"); ?></div>
				</li>
				<li>
					<div class="title"><?= __("ceo"); ?></div>
					<div class="description">
						<p><b><?= __("name_surname_1"); ?></b> <?= __("name_surname_2"); ?></p>
						<p><b><?= __("position_1"); ?></b> <?= __("position_2"); ?></p>
						<p><b><?= __("ceo_phone_1"); ?></b> <?= __("ceo_phone_2"); ?></p>
					</div>
				</li>
				<li>
					<div class="title"><?= __("bank_details"); ?></div>
					<div class="description">
						<p><b><?= __("account_number"); ?></b>1554351</p>
						<p><b>BLZ:</b> 39070024</p>
						<p><b>IBAN:</b> DE49 3907 0024 0155 4351 00</p>
						<p><b>BIC:</b> DEUTDEDB390 Deutsche Bank</p>
					</div>
				</li>
			</ul>
		</div>
	</section>
	<?php require('include/footer.php'); ?>
</body>
</html>
