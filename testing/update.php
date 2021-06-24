<?php
//API URL
$url = 'http://localhost/codeIgniter/index.php/api/Example/user';

//API URL
$api_key = "omkar@123";

//Auth credentials
$username = "admin";
$password = "1234";

$userData = ['id'=>'5','username'=>'rohit','password'=>'1234'];

//Create a new url resource
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-API-KEY: " .$api_key,'Content-type: application/x-www-form-urlencoded'));
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($userData));

$result = curl_exec($ch);
echo $result;
curl_close($ch);