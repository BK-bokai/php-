<?php
$url='http://example.com/';
$ch=curl_init();
$data_array=array("acc"=>"F", "pwd"=>"123");
$url=$url . http_build_query($data_array);

curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,$url);
$output = curl_exec($ch);
curl_close($ch);
echo $output;

?>