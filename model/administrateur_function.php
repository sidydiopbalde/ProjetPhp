<?php


function charger_data_admin($path)
{

$fp= fopen($path, 'r');


if($fp==NULL){
    echo 'impossible to open file';
}
else{
    $donnees=array();
    while (($ligne = fgetcsv($fp)) !== false) {
       
            $donnees[] = array(
                'image' => $ligne[0],
                'prenom' => $ligne[1],
                'nom' => $ligne[2],
                'email' => $ligne[3],
                'genre' => $ligne[4],
                'telephone' => $ligne[5],
                'fonction' => $ligne[6]    
            );
    
    }
    fclose($fp);  
    return $donnees;
}
}

?>