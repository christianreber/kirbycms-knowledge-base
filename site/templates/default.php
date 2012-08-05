<? snippet('header') ?>

<div class="content">

	<? snippet('breadcrumb') ?>
	<?= kirbytext($page->text()) ?>
</div>
<div style="clear:both"></div>

<? snippet('footer') ?>