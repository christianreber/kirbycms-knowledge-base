<!DOCTYPE html>
<html lang="en">
<head>
	
	<title><?= html($page->title()) ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<?= css('assets/styles/styles.css') ?>
	<?= css('assets/styles/php.css') ?>
	<?= css('assets/styles/html.css') ?>
	<?= css('assets/styles/js.css') ?>
	<?= css('assets/styles/css.css') ?>
</head>

<body>
	
	<div id="wrapper">
		
		<div class="menu">
			<a id="logo" href="/"></a>
			<form id="search" action="/search"><input type="search" name="q" placeholder="Search..."></form>
			<?php snippet('treemenu') ?>			
		</div>