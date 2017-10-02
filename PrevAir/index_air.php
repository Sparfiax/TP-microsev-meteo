<?php
$json = file_get_contents('http://www2.prevair.org/ineris-web-services.php?url=atmo&date=20171002'); 
$jsonextract = json_decode($json);

foreach($jsonextract as $j){
    if($j[4] == "ANGERS"){
        $commune = $j[4];
        $region = $j[6];
        $incide = $j[7];
        $pm10 = $j[11];
    }
}

$data = array(array("Commune",$commune),array("region",$region),array("incide",$incide),array("pm10",$pm10));
var_dump($data);
//echo data;
//var_dump($jsonextract);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

