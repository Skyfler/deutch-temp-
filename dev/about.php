<?php
require_once("php_scripts/initTranslator.php");
?>

<!DOCTYPE html>
<html lang="<?= $translator->lang; ?>" class="page-about">
<head>
	<?php require('include/head.php'); ?>
	<title><?= __("about_title"); ?></title>
</head>
<body>
	<?php require('include/header.php'); ?>
	<section class="about">
		<div class="container">
			<h2 class="block_main_title"><?= __("block_main_title_about"); ?></h2>
			<p><?= __("about_p1"); ?></p>
			<p><?= __("about_p2"); ?></p>
			<p><?= __("about_p3"); ?></p>
			<p><?= __("about_p4"); ?></p>
			<p><?= __("about_p5"); ?></p>
		</div>
	</section>
	<section class="feedback">
		<div class="container flex flex-center-x flex-align-stretch">
			<h2 class="block_main_title"></h2>
			<div class="feedback_block flex flex-align-stretch">
				<div class="feedback_block_inner">
					<blockquote>
						<p class="text"><?= __("refference_1"); ?></p>
					</blockquote>
				</div>
			</div>
			<div class="feedback_block flex flex-align-stretch">
				<div class="feedback_block_inner">
					<blockquote>
						<p class="text"><?= __("refference_2"); ?></p>
					</blockquote>
				</div>
			</div>
			<div class="feedback_block flex flex-align-stretch">
				<div class="feedback_block_inner">
					<blockquote>
						<p class="text"><?= __("refference_3"); ?></p>
					</blockquote>
				</div>
			</div>
		</div>
	</section>
	<?php require('include/footer.php'); ?>
</body>
</html>
