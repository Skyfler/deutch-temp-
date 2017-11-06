<?php
require_once("php_scripts/initTranslator.php");
?>

<!DOCTYPE html>
<html lang="<?= $translator->lang; ?>" class="page-404">
<head>
	<?php require('include/head.php'); ?>
	<title>Page Not Found</title>
</head>
<body>
	<?php require('include/header.php'); ?>
	<section class="intro">
		<div class="container">
			<h2 class="first_line">Um... We couldn't find that page.</h2>
		</div>
	</section>
	<section class="promo">
		<div class="container flex flex-center-x flex-align-stretch">
			<div class="promo_block flex flex-align-stretch">
				<div class="promo_block_inner">
					<div class="title">Act2018</div>
					<div class="text">Bored of documentation routine? Download Act2018 and call us to do your work much faster!</div>
					<a href="product-page.html" class="btn btn_green">Learn More</a>
				</div>
			</div>
			<div class="promo_block flex flex-align-stretch">
				<div class="promo_block_inner">
					<div class="title">DabaBase</div>
					<div class="text">New software created to help you with your workflow! Easier, faster, automated!</div>
					<a href="product-page.html" class="btn btn_green">Learn More</a>
				</div>
			</div>
		</div>
	</section>
	<?php require('include/footer.php'); ?>
</body>
</html>
