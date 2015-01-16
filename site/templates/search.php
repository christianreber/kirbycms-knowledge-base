<?php
snippet('header');
?>

<div class="content">

	<?php snippet('breadcrumb') ?>

	<div class="search">
		<form action="<?= thisURL() ?>">
			<input type="search" placeholder="Search documentation.." name="q" value="<?php echo esc($query) ?>" />
			<input type="submit" value="Search" />
		</form>

		<ul>
			<?php foreach($results as $result): ?>
				<li>
					<a href="<?php echo $result->url() ?>">
						<?php echo $result->title()->html() ?>
					</a>
				</li>
			<?php endforeach ?>
		</ul>

	</div>

</div>
<div style="clear:both"></div>

<?php snippet('footer') ?>
