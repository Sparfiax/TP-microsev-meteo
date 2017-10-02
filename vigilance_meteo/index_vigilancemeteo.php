<?php


    
$Oldxml=simplexml_load_file("http://vigilance.meteofrance.com/data/NXFR49_LFPW_.xml?9326401.xml") or die("Error: Cannot create object");
$pheno = array();
$i = 0;
foreach ($Oldxml->PHENOMENE as $phenomene){
    if($phenomene['departement']== 49){
        if($phenomene['phenomene']== 3 || $phenomene['phenomene']== 4){
            $pheno['departement'][$i] = $phenomene['departement'];
            $nomPheno = "";
            if($phenomene['phenomene'] == 3){
                $nomPheno = "tempête";
            }else{
                $nomPheno = "innondation";
            }
            $pheno['phenomene'][$i] = $nomPheno;
            $pheno['couleur'][$i] = $phenomene['couleur'];
            $pheno['dateDebutEvtTU'][$i] = $phenomene['dateDebut'];
            $pheno['dateFinEvtTU'][$i] = $phenomene['dateFin'];
            $i++;
        }
    }
}
var_dump($pheno);


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

