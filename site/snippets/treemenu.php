<?php if(!isset($subpages)) $subpages = $site->pages() ?>
<?php $page_url = ''; ?>

<ul>
	
	<?php foreach($subpages->visible() AS $p): ?>

	<li class="depth-<?= $p->depth() ?><?php if ($p->depth() >1 && $p->hasChildren()) echo ' hasChildren'; ?>">
		
	<a<?= ($p->isActive()) ? ' class="active"' : '' ?> href="<?= $p->url() ?>"><?= $p->title() ?></a>
			
			<?php
				$request_URI = $_SERVER['REQUEST_URI'];
				
				// Is this the a subpage?
				if (strlen($request_URI) > 1)
				{
					$url = explode('/', substr($request_URI, 1));
					
					for ($i = 0; $i < count($url); $i++)
						$url_array[] = implode("/", array_slice($url, 0, $i+1));

					// Generate the uri of the menu link that will be generated (e. g. /how-we-work)
					$page_url = parse_url($p->url());
					$page_url = $page_url['path'];
					$page_url = substr($page_url, 1);
				}

				// Generate submenu for max. 1 level
				if ($p->depth()<2)
				{
					snippet('treemenu', array('subpages' => $p->children()));
				}

				// Generate submenu ONLY if you selected the parent menu
				else if (!empty($page_url) AND !empty($url_array) AND in_array($page_url, $url_array))
				{
					snippet('treemenu', array('subpages' => $p->children()));
				}
			?>

	</li>

	<?php endforeach ?>

</ul>
