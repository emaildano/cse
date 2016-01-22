<?php
$query    = rawurlencode($_GET['s']);
$key      = '123abc';
$cx       = '123abc';
$url      = 'https://www.googleapis.com/customsearch/v1?key='.$key.'&cx='.$cx.'&q='.$query;
$content  = file_get_contents($url);
$json     = json_decode($content, true);

// echo '<pre>';
//   print_r($json);
// echo '</pre>';

foreach($json['items'] as $item) {
  ...
}
