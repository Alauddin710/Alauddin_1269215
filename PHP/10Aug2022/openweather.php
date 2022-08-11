<?php
$OpenWeather = ['api_key' => '1bad80fc7220d906e8b5950e94759beb'];
$zip = "7050"; // akane zipcode dite hobe jekankar weather dekte hobe
$lat= 23.96723658880676 ; // aigulo niea aste hobe google map theke right button click kore number gulo
$lon =88.93451149722618;
$base_url = "https://api.openweathermap.org/data/2.5";// upoer api key niea aste hobe ai website accout khule
$weather_url = "/weather?lat=" . $lat."&lon=" .$lon;
$api_key = "&appid={$OpenWeather['api_key']}";
$api_url = $base_url . $weather_url . $api_key;
$weather = json_decode(file_get_contents($api_url));
echo "<pre>";
print_r($weather);
?>