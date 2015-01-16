<?php
return function($site, $pages, $page) {

  $query   = get('q');
  $results = $site->search($query, 'title|text|tag');
  $results = $results->paginate(20);

  return array(
    'query'      => $query,
    'results'    => $results,
    'pagination' => $results->pagination()
  );
};
