<?php
// https://favqs.com/about/

$authorization = 'Authorization: Token token="you will get this token after registration"';

$ch = curl_init('https://favqs.com/api/quotes/?filter=travel');

curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ));
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

$result = curl_exec($ch);
curl_close($ch);

echo '<pre>';
print_r( json_decode($result) );

?>