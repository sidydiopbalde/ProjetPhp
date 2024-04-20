<?php

function lister_promotion(){

    $chemin='/var/www/html/Projet/data/promotion.csv';
    $fp=fopen($chemin,'r');

    if($fp==NULL){
        echo 'Erreur ouverture';
    }
    else{
        while (($ligne = fgetcsv($fp)) !== false) {
            //if($ligne[3]=="on"){
              //  $_SESSION['id']=$ligne[4];}
                $listepro[] = array(
                    'libelle' => $ligne[0],
                    'date_deb' => $ligne[1],
                    'date_fin' => $ligne[2],
                     'id'=> $ligne[3]
        
                );
        
            
        }

        return $listepro;
    }
    fclose($fp);
    }
  