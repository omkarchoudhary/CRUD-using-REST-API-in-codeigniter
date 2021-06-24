<?php
//API URL
$cityId = '1273293';
$apiKey = "68b29ba27bdd902155cdb64c010280d5";

$url = "http://api.openweathermap.org/data/2.5/weather?id=".$cityId."&lang=en&units=metrics&APPID=".$apiKey."";



//Create a new url resource
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_HEADER, 0);
//USE RSPONSE THAT WE GET
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);



$result = curl_exec($ch);
$data= json_decode($result);
$currentime = time();
echo "<pre>";print_r($data);exit;
curl_close($ch);