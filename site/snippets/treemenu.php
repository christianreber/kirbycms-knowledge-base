<?php if(!isset($subpages)) $subpages = $site->pages() ?>
<?php $page_url = ''; ?>

<ul>
	
	<?php foreach($subpages->visible() AS $p): ?>

	<li class="depth-<?= $p->depth() ?><?php if ($p->depth() >1 && $p->hasChildren()) echo ' hasChildren'; ?>">
		
	<a<?= ($p->isActive()) ? ' class="active"' : '' ?> href="<?= $p->url() ?>"><?= $p->title() ?></a>
			
			<?php
				if(($p->depth() < 2 && $p->hasChildren()) || $page == $p || $page->isDescendantOf($p)) {
					snippet('treemenu', array('subpages' => $p->children()));
				}
			?>

	</li>

	<?php endforeach ?>

</ul>
