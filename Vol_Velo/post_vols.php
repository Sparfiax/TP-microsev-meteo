<?php
$connexion = new PDO("mysql:host=localhost;dbname=microservices_velo","root",""); // connexion a la BDD
        $sql = $connexion->prepare("INSERT INTO vol (DescriptionVelo,AdresseVol,DateVol,TelProprietaire) VALUES (:DescriptionVelo, :AdresseVol, :DateVol, :TelProprietaire)") ;
        $sql->execute(array("DescriptionVelo"=>$_POST['DescriptionVelo'],
            "AdresseVol"=>$_POST['AdresseVol'],
            "DateVol"=>$_POST['DateVol'],
            "TelProprietaire"=>$_POST['TelProprietaire']
        ));


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

