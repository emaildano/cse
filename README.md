# Google CSE PHP Examples

```php
foreach( $json->responseData->results as $result) {
  echo '<div style="padding-bottom: 20px;">';
  echo $result->url . '<br>';
  echo $result->title . '<br>';
  echo $result->content . '<br>';
  echo $result->url . '<br>';
  echo $result->cacheUrl . '<br>';
  echo '<div><hr>';
}
```
