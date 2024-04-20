<?php
function readDataUser(){
    $chemin='/var/www/html/Projet/data/authentification.csv';
    $fp=fopen($chemin,'r');

    if($fp==NULL){
        echo 'Erreur ouverture';
    }
    else{
        while (($ligne = fgetcsv($fp)) !== false) {
           
                $donnee[] = array(
                    'email' => $ligne[0],
                    'password' => $ligne[1],
                    'statut' => $ligne[2],
                   
                );
        }
        fclose($fp);
        return $donnee;
    }
}