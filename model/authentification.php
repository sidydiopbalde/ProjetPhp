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
                    'prenom'=>$ligne[3],
                    'nom'=>$ligne[4],
                    'matricule'=>$ligne[5],
                    'id'=>$ligne[6],
                    'referentiel'=>$ligne[7]
                );
        }
        fclose($fp);
        return $donnee;
    }
}


//fonction de lecture de fichier json
function readDatajson(){
    $chemin = '/var/www/html/Projet/data/authentification.json';
    $contenu_json = file_get_contents($chemin);

    if($contenu_json === false){
        echo 'Erreur de lecture du fichier JSON';
    } else {
        // Décoder le contenu JSON en un tableau PHP
        $donnees = json_decode($contenu_json, true);

        if($donnees === null){
            echo 'Erreur de décodage du JSON';
        } else {
            return $donnees;
        }
    }
}
/* function writeDataUser($chemin,$data){
    $file=fopen($chemin,'w');
        
        // On vérifie si on parvient à ouvrir le fichier
        if($file != null){
            
            // On ajoute la nouvelle valeur
            fputcsv($file, $data);
            
        }
        
        fclose($file);
    
  
} */