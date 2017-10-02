<?php

// exemple of request
//http://localhost/meteo_microservices/OpenWeatherMap/index_meteo.php?country=Paris

$ville = $_GET["country"];
$json = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q='.$ville.'&APPID=b0520eb0985d69ff745a4b16677f40bb'); 
$jsonextract = json_decode($json);

var_dump($jsonextract);
//echo $jsonextract;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

