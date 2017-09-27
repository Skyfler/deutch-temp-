<?php
require_once("php_scripts/initTranslator.php");
?>

<!DOCTYPE html>
<html lang="<?= $translator->lang; ?>" class="page-about">
<head>
	<?php require('include/head.php'); ?>
	<title>About Us</title>
</head>
<body>
	<?php require('include/header.php'); ?>
	<section class="about">
		<div class="container">
			<h2 class="block_main_title">About BitTorrent</h2>
			<p>BitTorrent Inc. is an Internet technology company based in San Francisco. We design distributed technologies that scale efficiently, keep intelligence at the edge, and keep creators and consumers in control of their content and data. More than 170 million people use our products every month. Our protocols move as much as 40% of the world's Internet traffic on a daily basis.</p>
			<p>Our mission is to build a better Internet. To work with people, industries and nations to create better ways to move information. Better ways for creators to make money. New ways for fans to engage, on their terms. Ways to sustain the stuff we share. The Internet promised us this much. And we promise to make good on it.</p>
			<p>We believe in an Internet of options, not rules.</p>
			<p>Care to join us? Contact us for more information.</p>
		</div>
	</section>
	<section class="feedback">
		<div class="container flex flex-center-x flex-align-stretch">
			<h2 class="block_main_title">О чем говорят люди</h2>
			<div class="feedback_block flex flex-align-stretch">
				<div class="feedback_block_inner">
					<blockquote>
						<p class="text">Brilliant. This app is absolutely brilliant. The update made it exceptionally better; and not only in aesthetics...</p>
					</blockquote>
				</div>
			</div>
			<div class="feedback_block flex flex-align-stretch">
				<div class="feedback_block_inner">
					<blockquote>
						<p class="text">The app for macbook is already good! The android app is better. I changed to an android phone because of this.</p>
					</blockquote>
				</div>
			</div>
			<div class="feedback_block flex flex-align-stretch">
				<div class="feedback_block_inner">
					<blockquote>
						<p class="text">...isn't it awesome when you go to rate an app and already have from years ago! I first rated it on my s2. Now I'm on my s5 and it's still as epic :)</p>
					</blockquote>
				</div>
			</div>
		</div>
	</section>
	<?php require('include/footer.php'); ?>
</body>
</html>
