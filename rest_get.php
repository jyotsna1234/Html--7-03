<?php
$ch = curl_init();
 curl_setopt($ch, CURLOPT_URL,"https://store-uzahrx.mybigcommerce.com/api/v2");
 curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY ) ;
 
curl_setopt($ch, CURLOPT_USERPWD, 'jyotsna:e034cef504f956523b80296772042ee53c980d8f');
curl_setopt($ch, CURLOPT_HEADER, 0);

curl_setopt($ch, CURLOPT_URL,"https://store-uzahrx.mybigcommerce.com/api/v2/products/105"); #set the url and get string together
     
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // return the output in string format
 
 echo curl_exec ($ch); // execute
$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);   //get status code
echo $status_code;
curl_close ($ch); // close curl handle

?>