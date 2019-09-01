<?php
$url='http://example.com/';
$ch=curl_init();
$data_array=array("username"=>"Falcon", "password"=>"123456");

curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,true);
curl_setopt($ch,CURLOPT_POSTFIELDS, http_build_query($data_array));
// curl_setopt($ch,CURLOPT_RETURNTRANSFER,$url);

$output=curl_exec($ch);
curl_close($ch);

echo $output;




?>