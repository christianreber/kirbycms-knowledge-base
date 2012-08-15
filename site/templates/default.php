<?php snippet('header') ?>

<div class="content">

	<?php snippet('breadcrumb') ?>
	<?= kirbytext($page->text()) ?>
</div>
<div style="clear:both"></div>

<?php snippet('footer') ?>