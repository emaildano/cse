<?php
$query = rawurlencode($_GET['q']);
$args = 'https://ajax.googleapis.com/ajax/services/search/web?v=1.0&q=' . $query;
$site_url = 'http://myphillypark.org';

// sendRequest
// note how referer is set manually
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $args);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_REFERER, $site_url);
$body = curl_exec($ch);
curl_close($ch);

// Json Decode
$json = json_decode($body);

// Json Output
// print_r($json);

// Query
echo 'Search Query: ' . $query . '<hr>';

foreach( $json->responseData->results as $result) {
  echo '<div style="padding-bottom: 20px;">';
  echo $result->url . '<br>';
  echo $result->title . '<br>';
  echo $result->content . '<br>';
  echo $result->url . '<br>';
  echo $result->cacheUrl . '<br>';
  echo '<div><hr>';
}



?>
