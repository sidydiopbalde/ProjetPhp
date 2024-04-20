<?php
function adapterSelectReferentiel($id_pro){
        $chemin='/var/www/html/Projet/data/selectRef.csv';
        $fp=fopen($chemin,'r');
    
        if($fp==NULL){
            echo 'Erreur ouverture';
        }
        else{
            while (($ligne = fgetcsv($fp)) !== false) {
               
                if($ligne[1]==$id_pro)
                {
                    $listeselect[] = array(
                        'libelleref' => $ligne[0],
                        'Idref' => $ligne[1]
                    );
            
                }          
            }
          
            return $listeselect;
        }
        fclose($fp);

        }

?>