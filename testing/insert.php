<?php
//API URL
$url = 'http://localhost/codeIgniter/index.php/api/Example/user';

//API URL
$api_key = "omkar@123";

//Auth credentials
$username = "admin";
$password = "1234";

$userData = ['username'=>'mohit','password'=>'1234'];

//Create a new url resource
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-API-KEY: " .$api_key));
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $userData);
//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');

$result = curl_exec($ch);
echo $result;
curl_close($ch);