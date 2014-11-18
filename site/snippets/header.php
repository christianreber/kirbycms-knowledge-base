<!DOCTYPE html>
<html lang="en">
<head>

	<title><?= html($page->title()) ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<?= css('assets/css/main.css') ?>
	<?= css('assets/css/php.css') ?>
	<?= css('assets/css/html.css') ?>
	<?= css('assets/css/js.css') ?>
	<?= css('assets/css/css.css') ?>
</head>

<body>

	<div id="wrapper">

		<div class="menu">
			<a id="logo" href="./"></a>
			<form id="search" action="./search"><input type="search" name="q" placeholder="Search..."></form>
			<?php snippet('treemenu') ?>
		</div>
