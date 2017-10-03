<?php
$connexion = new PDO("mysql:host=localhost;dbname=microservices_velo","root",""); // connexion a la BDD
        $sql = $connexion->query("SELECT DescriptionVelo, AdresseVol, DateVol, TelProprietaire FROM vol") ;
        
        $obj = new stdClass();
        $i = 0;
        
        while ($donnees = $sql->fetch())
        {
            $obj->data[$i] = array(
                 array(
                    "DescriptionVelo", $donnees['DescriptionVelo']
                ),
                array(
                    "AdresseVol", $donnees['AdresseVol']
                ),
                array(
                    "DateVol", $donnees['DateVol']
                ),
                array(
                    "TelProprietaire", $donnees['TelProprietaire']
                )
            );
            
            $i++;
        }
       
        var_dump($obj);
        
       