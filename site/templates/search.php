<?php
	snippet('header');

	$search = new search(array(
		'searchfield' => 'q',
		'ignore'      => array('search', 'error'),
		'words'       => true,
		'paginate'    => 10
	));

	$results = $search->results();
      
?>

<div class="content">

	<?php snippet('breadcrumb') ?>
	
	<div class="search">
		<form action="<?= thisURL() ?>">
	  		<input type="text" placeholder="Search documentation.." name="q" value="<?= html($search->query()) ?>" />
	  		<input type="submit" value="Search" />
		</form>

		<?php if($results): ?>

		<?php snippet('pagination', array('pagination' => $results->pagination())) ?>

		<ul>
		  <?php foreach($results as $row): ?>
		  <li>
		    <strong><a href="<?= $row->url() ?>"><?= html($row->title()) ?></a></strong>
		    <a href="<?= $row->url() ?>"><?= html($row->url()) ?></a>
		  </li>
		  <?php endforeach ?>
		</ul>

		<?php snippet('pagination', array('pagination' => $results->pagination())) ?>

		<?php elseif($search->query()): ?>
		<div class="no-results">No results for <strong><?= html($search->query()) ?></strong></div>
		<?php endif ?>

	</div>

</div>
<div style="clear:both"></div>

<?php snippet('footer') ?>