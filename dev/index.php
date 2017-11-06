<?php
require_once("php_scripts/initTranslator.php");
?>

<!DOCTYPE html>
<html lang="<?= $translator->lang; ?>" class="page-index">
<head>
	<?php require('include/head.php'); ?>
	<title><?= __("index_title"); ?></title>
</head>
<body>
	<?php require('include/header.php'); ?>
	<section class="intro_main">
		<div class="container">
			<h2 class="first_line"><?= __("first_line"); ?><br><?= __("somestring"); ?></h2>
			<p class="second_line"><?= __("second_line"); ?></p>
			<a href="#" class="details btn"><?= __("download_act"); ?><span class="line small"><?= __("for_win"); ?></span></a>
			<a href="#" class="details btn"><?= __("download_db"); ?> <span class="line small"><?= __("for_win"); ?></span></a>
		</div>
	</section>
	<section class="assets">
		<div class="container flex">
			<h2 class="block_main_title"><?= __("block_main_title"); ?></h2>
			<div class="asset_block asset1">
				<h4 class="title"><?= __("feature_1"); ?></h4>
				<div class="description"><?= __("decribe_1"); ?></div>
			</div>
			<div class="asset_block asset2">
				<h4 class="title"><?= __("feature_2"); ?></h4>
				<div class="description"></div>
			</div>
			<div class="asset_block asset3">
				<h4 class="title"><?= __("feature_3"); ?></h4>
				<div class="description"></div>
			</div>
			<div class="asset_block asset4">
				<h4 class="title"><?= __("feature_4"); ?></h4>
				<div class="description"></div>
			</div>
		</div>
	</section>
	<section class="info_table">
		<div class="container">
			<h2 class="block_main_title"><?= __("block_main_title_2"); ?></h2>
			<div class="table_desktop">
				<table>
					<thead>
						<tr>
							<th></th>
							<th>DATA BASE</th>
							<th>ACT2018</th>
							<th>FULL PACK</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th><?= __("specification_1"); ?></th>
							<td></td>
							<td><span class="check"></span></td>
							<td><span class="check"></span></td>
						</tr>
						<tr>
							<th><?= __("specification_2"); ?></th>
							<td><span class="check"></span></td>
							<td></td>
							<td><span class="check"></span></td>
						</tr>
						<tr>
							<th><?= __("specification_3"); ?></th>
							<td><span class="check"></span></td>
							<td><span class="check"></span></td>
							<td><span class="check"></span></td>
						</tr>
						<tr>
							<th><?= __("specification_4"); ?></th>
							<td><span class="check"></span></td>
							<td></td>
							<td><span class="check"></span></td>
						</tr>
						<tr>
							<th><?= __("specification_5"); ?></th>
							<td></td>
							<td></td>
							<td><span class="check"></span></td>
						</tr>
						<tr class="footer">
							<th></th>
							<td><button class="btn btn_transparent"><?= __("download_db"); ?><span class="line small"><?= __("for_win"); ?></span></button></td>
							<td><button class="btn btn_transparent"><?= __("download_act"); ?><span class="line small"><?= __("for_win"); ?></span></button></td>
							<td><button class="btn"><?= __("get_full"); ?></button></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="table_tablet">
				<ul>
					<li class="title">DATA BASE</li>
					<li class="flex-nowrap flex-center-y">
						<div><?= __("specification_2"); ?></div>
						<span class="check"></span>
					</li>
					<li class="flex-nowrap flex-center-y">
						<div><?= __("specification_3"); ?></div>
						<span class="check"></span>
					</li>
					<li class="flex-nowrap flex-center-y">
						<div><?= __("specification_4"); ?></div>
						<span class="check"></span>
					</li>
					<li class="last"><button class="btn btn_transparent"><?= __("download_db"); ?><span class="line small"><?= __("for_win"); ?></span></button></li>
				</ul>
				<ul>
					<li class="title">ACT2018</li>
					<li class="flex-nowrap flex-center-y">
						<div><?= __("specification_1"); ?></div>
						<span class="check"></span>
					</li>
					<li class="flex-nowrap flex-center-y">
						<div><?= __("specification_3"); ?></div>
						<span class="check"></span>
					</li>
					<li class="last"><button class="btn btn_transparent"><?= __("download_act"); ?><span class="line small"><?= __("for_win"); ?></span></button></li>
				</ul>
				<ul>
					<li class="title">FULL PACK</li>
					<li class="flex-nowrap flex-center-y">
						<div><?= __("specification_1"); ?></div>
						<span class="check"></span>
					</li>
					<li class="flex-nowrap flex-center-y">
						<div><?= __("specification_2"); ?></div>
						<span class="check"></span>
					</li>
					<li class="flex-nowrap flex-center-y">
						<div><?= __("specification_3"); ?></div>
						<span class="check"></span>
					</li>
					<li class="flex-nowrap flex-center-y">
						<div><?= __("specification_4"); ?></div>
						<span class="check"></span>
					</li>
					<li class="flex-nowrap flex-center-y">
						<div><?= __("specification_5"); ?></div>
						<span class="check"></span>
					</li>
					<li class="last"><button class="btn"><?= __("get_full"); ?></button></li>
				</ul>
			</div>
		</div>
	</section>
	<?php require('include/footer.php'); ?>
</body>
</html>
