<?php
$passwords = [
    'Abcdef123', // Valide
    '12345678',  // Non valide (pas de lettre)
    'abcdefgh',  // Non valide (pas de chiffre)
    'Abcdef',    // Non valide (moins de 8 caractères)
    'ABCD1234',  // Valide
];

$pattern = '/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/';

foreach ($passwords as $password) {
    if (preg_match($pattern, $password)) {
        echo "$password est un mot de passe valide.<br>";
    } else {
        echo "$password n'est pas un mot de passe valide.<br>";
    }
}


      //  filtre par date
         /*    if(isset($_POST['referentiel'])){
                
                    if($referentiel=='referentiel')
                    {
                        $val=remplist($id_prom);  
                    }
                    else
                    {
                        $listeFiltree = array_filter($val, function ($apprenant) use ($referentiel) {
                            return $apprenant['Referentiel'] == $referentiel;
                            
                        });
                        
                        $val = array_values($listeFiltree); // Réindexer le tableau filtré
                    }
            }  */
           /*  if(isset($_POST['reset'])){
                if(!empty($_POST['reset'])){
                    $val=remplist($id_prom);
                }
              }
          if(isset($_POST['date1']))
            {
                $date=$_POST['date1'];
                if(!empty($date)) 
                {
                    $listeFiltree = array_filter($val, function ($apprenant) use ($date) {
                        return $apprenant['date'] == $date;
                        
                    });                   
                    $val = array_values($listeFiltree); // Réindexer le tableau filtré
                }
            }  */ 

                 //filtre par statut(prensence ou absence)
                  /*   if(isset($_POST['status']))
                    {                      
                            if($valeur=='status'){
                                $val=remplist($id_prom);  }
                                else{   
                                    $listeFiltree = array_filter($val, function ($apprenant) use ($valeur) {
                                        
                                        return $apprenant['statut'] == $valeur;
                                        
                                    });
                                    
                                    $val = array_values($listeFiltree); // Réindexer le tableau filtré
                                    
                                }   
                     }  */


                     P6_DEV_DATA_2024_129,Seck,Fallou,789032129,REF DIG,-,ABSENT,2024-04-19,6
P6_DEV_DATA_2024_130,Balla,Seck,702318934,WEB,-,ABSENT,2024-04-13,6
P6_DEV_DATA_2024_121,Balde,Sidy Diop,784893329,REF DIG,06:09,PRESENT,2024-04-13,6
P6_DEV_DATA_2024_138,Mbow,Fallou,789032129,REF DIG,06:09,PRESENT,2024-04-13,6
P4_DEV_DATA_2024_120,Mbow,Sidy Diop,784893329,REF DIG,06:09,PRESENT,2024-04-19,4
P4_DEV_DATA_2024_127,Paul,Seck,702318934,WEB,06:07,ABSENT,2024-04-13,4
P5_DEV_DATA_2024_120,Balde,Soda,784893329,REF DIG,06:09,PRESENT,2024-04-15,5
P5_DEV_DATA_2024_120,Mbow,Aliou,784893329,REF DIG,06:09,PRESENT,2024-04-14,5
P5_DEV_DATA_2024_154,Seck,Fatou,789032129,REF DIG,06:09,PRESENT,2024-04-16,5
P6_DEV_DATA_2024_127,Papa,Sow,702318934,WEB,06:07,ABSENT,2024-04-12,6
P6_DEV_DATA_2024_110,Balla,Seck,702318934,WEB,06:07,ABSENT,2024-04-12,6
P6_DEV_DATA_2024_120,Mbow,Sidy Diop,784893329,REF DIG,06:09,PRESENT,2024-04-16,6
P6_DEV_DATA_2024_154,Seck,Fallou,789032129,REF DIG,06:09,PRESENT,2024-04-12,6
P4_DEV_WEB_2024_127,Fentille,Woure,702318934,REF DIG,06:07,ABSENT,2024-04-19,4
P3_DEV_DATA_2024_154,Dial,Ndiaye,789032129,REF DIG,06:09,PRESENT,2024-04-12,3
P3_DEV_WEB_2024_105,Mor,Balde,702318934,DATA ARTISAN,06:07,ABSENT,2024-04-15,3
P5_DEV_DATA_2024_120,Mbow,Sidy Diop,784893329,REF DIG,06:09,PRESENT,2024-04-11,5
P5_DEV_DATA_2024_154,Seck,Fallou,789032129,REF DIG,06:09,PRESENT,2024-04-12,5
P6_DEV_DATA_2024_127,Paul,Seck,702318934,WEB,06:07,ABSENT,2024-04-12,6
P6_DEV_DATA_2024_110,Balla,Seck,702318934,WEB,06:07,ABSENT,2024-04-12,6
P6_DEV_DATA_2024_121,Balde,Sidy Diop,784893329,REF DIG,06:09,PRESENT,2024-04-13,6
P6_DEV_DATA_2024_138,Mbow,Fallou,789032129,REF DIG,06:09,PRESENT,2024-04-13,6
P3_DEV_DATA_2024_110,Balla,Seck,702318934,WEB,06:07,ABSENT,2024-04-13,3
P3_DEV_DATA_2024_120,Mbow,Sidy Diop,784893329,REF DIG,06:09,PRESENT,2024-04-13,3
P3_DEV_DATA_2024_154,Seck,Fallou,789032129,REF DIG,06:09,PRESENT,2024-04-13,3
P3_DEV_DATA_2024_127,Paul,Seck,702318934,WEB,06:07,ABSENT,2024-04-13,3
P2_DEV_DATA_2024_154,Seck,Fallou,789032129,REF DIG,06:09,PRESENT,2024-04-17,2
P2_DEV_DATA_2024_127,Paul,Seck,702318934,WEB,06:07,ABSENT,2024-04-17,2
P2_DEV_DATA_2024_110,Moussa,Sy,702318934,WEB,06:07,ABSENT,2024-04-19,2
P3_DEV_DATA_2024_120,Mbow,Sidy Diop,784893329,REF DIG,06:09,PRESENT,2024-04-13,3
P1_DEV_DATA_2024_154,Seck,Fallou,789032129,REF DIG,06:09,PRESENT,2024-04-17,1
P1_DEV_DATA_2024_127,Paul,Seck,702318934,WEB,06:07,ABSENT,2024-04-13,1
P1_DEV_DATA_2024_154,Seck,Fallou,789032129,REF DIG,06:09,PRESENT,2024-04-12,1
P1_DEV_DATA_2024_127,Paul,Seck,702318934,WEB,06:07,ABSENT,2024-04-14,1
P1_DEV_DATA_2024_110,Moussa,Sy,702318934,WEB,06:07,ABSENT,2024-04-16,1
P6_DEV_DATA_2024_154,Seck,Fallou,789032129,REF DIG,06:09,PRESENT,2024-04-13,6
P4_DEV_DATA_2024_127,Paul,Seck,702318934,WEB,06:07,ABSENT,2024-04-13,4
P5_DEV_DATA_2024_120,Mbow,Sidy Diop,784893329,REF DIG,06:09,PRESENT,2024-04-15,5
P5_DEV_DATA_2024_154,Seck,Fallou,789032129,REF DIG,06:09,PRESENT,2024-04-11,5
P5_DEV_DATA_2024_127,Paul,Seck,702318934,WEB,06:07,ABSENT,2024-04-11,5
P5_DEV_DATA_2024_120,Mbow,Sidy Diop,784893329,REF DIG,06:09,PRESENT,2024-04-17,5
P5_DEV_DATA_2024_154,Seck,Fallou,789032129,REF DIG,06:09,PRESENT,2024-04-16,5
P6_DEV_DATA_2024_127,Paul,Seck,702318934,WEB,06:07,ABSENT,2024-04-20,3
P6_DEV_DATA_2024_110,Balla,Seck,702318934,WEB,06:07,ABSENT,2024-04-20,3
P6_DEV_DATA_2024_120,Mbow,Sidy Diop,784893329,REF DIG,06:09,PRESENT,2024-04-16,6
P6_DEV_DATA_2024_154,Seck,Fallou,789032129,REF DIG,06:09,PRESENT,2024-04-12,6
P4_DEV_WEB_2024_127,Fentille,Woure,702318934,WEB,06:07,ABSENT,2024-04-17,4
P3_DEV_DATA_2024_154,Dial,Ndiaye,789032129,REF DIG,06:09,PRESENT,2024-04-20,3
P3_DEV_WEB_2024_105,Mor,Balde,702318934,DATA ARTISAN,06:07,ABSENT,2024-04-17,3
P5_DEV_DATA_2024_120,Mbow,Sidy Diop,784893329,REF DIG,06:09,PRESENT,2024-04-11,5
P5_DEV_DATA_2024_154,Seck,Fallou,789032129,REF DIG,06:09,PRESENT,2024-04-17,5
P6_DEV_DATA_2024_127,Paul,Seck,702318934,WEB,06:07,ABSENT,2024-04-17,6
P6_DEV_DATA_2024_110,Balla,Seck,702318934,WEB,06:07,ABSENT,2024-04-17,6
P1_DEV_DATA_2024_127,Paul,Seck,702318934,WEB,06:07,ABSENT,2024-04-13,1
P1_DEV_DATA_2024_154,Seck,Fallou,789032129,REF DIG,06:09,PRESENT,2024-04-19,1
P1_DEV_DATA_2024_127,Paul,Seck,702318934,WEB,06:07,ABSENT,2024-04-14,1
P1_DEV_DATA_2024_110,Moussa,Sy,702318934,WEB,06:07,ABSENT,2024-04-16,1
P6_DEV_DATA_2024_154,Seck,Fallou,789032129,REF DIG,06:09,PRESENT,2024-04-13,6
P4_DEV_DATA_2024_127,Paul,Seck,702318934,WEB,06:07,ABSENT,2024-04-13,4
P5_DEV_DATA_2024_120,Mbow,Sidy Diop,784893329,REF DIG,06:09,PRESENT,2024-04-15,5
P5_DEV_DATA_2024_154,Seck,Fallou,789032129,REF DIG,06:09,PRESENT,2024-04-20,5
P5_DEV_DATA_2024_127,Paul,Seck,702318934,WEB,06:07,ABSENT,2024-04-20,5
P5_DEV_DATA_2024_120,Mbow,Sidy Diop,784893329,REF DIG,06:09,PRESENT,2024-04-20,5
P5_DEV_DATA_2024_154,Seck,Fallou,789032129,REF DIG,06:09,PRESENT,2024-04-20,5
P6_DEV_DATA_2024_127,Paul,Seck,702318934,WEB,06:07,ABSENT,2024-04-20,6
P6_DEV_DATA_2024_110,Balla,Seck,702318934,WEB,06:07,ABSENT,2024-04-20,6
P4_DEV_WEB_2024_127,Fentille,Woure,702318934,WEB,06:07,ABSENT,2024-04-20,4
P3_DEV_DATA_2024_154,Dial,Ndiaye,789032129,REF DIG,06:09,PRESENT,2024-04-20,3
P3_DEV_WEB_2024_105,Mor,Balde,702318934,DATA ARTISAN,06:07,ABSENT,2024-04-20,3
P5_DEV_DATA_2024_120,Mbow,Sidy Diop,784893329,REF DIG,06:09,PRESENT,2024-04-20,5
P5_DEV_DATA_2024_154,Seck,Fallou,789032129,REF DIG,06:09,PRESENT,2024-04-20,5
P6_DEV_DATA_2024_127,Paul,Seck,702318934,WEB,06:07,ABSENT,2024-04-20,6
P6_DEV_DATA_2024_110,Balla,Seck,702318934,WEB,06:07,ABSENT,2024-04-20,6
P1_DEV_DATA_2024_127,Paul,Seck,702318934,WEB,06:07,ABSENT,2024-04-20,1
P1_DEV_DATA_2024_154,Seck,Fallou,789032129,REF DIG,06:09,PRESENT,2024-04-20,1
P1_DEV_DATA_2024_127,Paul,Seck,702318934,WEB,06:07,ABSENT,2024-04-20,1
P1_DEV_DATA_2024_110,Moussa,Sy,702318934,WEB,06:07,ABSENT,2024-04-20,1
P6_DEV_DATA_2024_154,Seck,Fallou,789032129,REF DIG,06:09,PRESENT,2024-04-20,6
P4_DEV_DATA_2024_127,Paul,Seck,702318934,WEB,06:07,ABSENT,2024-04-20,4
P5_DEV_DATA_2024_120,Mbow,Sidy Diop,784893329,REF DIG,06:09,PRESENT,2024-04-20,5
P5_DEV_DATA_2024_154,Seck,Fallou,789032129,REF DIG,06:09,PRESENT,2024-04-20,5
P5_DEV_DATA_2024_127,Paul,Seck,702318934,WEB,06:07,ABSENT,2024-04-20,5
P5_DEV_DATA_2024_120,Mbow,Sidy Diop,784893329,REF DIG,06:09,PRESENT,2024-04-20,5
P5_DEV_DATA_2024_154,Seck,Paul,789032129,REF DIG,06:09,PRESENT,2024-04-20,5
P6_DEV_DATA_2024_127,Paul,Seck,702318934,WEB,06:07,ABSENT,2024-04-20,6
P6_DEV_DATA_2024_110,Aziz,Diop,702318934,WEB,06:07,ABSENT,2024-04-20,6
P6_DEV_DATA_2024_110,Aziz,Diop,702318934,WEB,06:07,PRESENT,2024-04-20,6

        // Fonction qui permet de récupérer et de stocker l'image 
        function recupImage($name_input){

            if(isset($_FILES[$name_input])){
                // On récupére l'image
                $image = $_FILES[$name_input];
                $temp = $image["tmp_name"];
                $full_image = explode(".", $image["name"]);
                $extension = $full_image[count($full_image) - 1];
                
                // Pour récupérer l'erreur
                $erreur = $image['error'];
                // Si on parvient à charger l'image
                if($erreur == 0){
                    $dir = "../public/IMG/"; // Le chemin vers le dossier ou on veut stocker l'image
                    
                    // On génère un nouveau nom unique pour l'image
                    $name_image = uniqid() ."." . $extension;
                    if(isset($_FILES[$name_input])){
                        // On récupére l'image
                        $image = $_FILES[$name_input];
                        $temp = $image["tmp_name"];
                        $full_image = explode(".", $image["name"]);
                       
                    // On déplace l'image du dossier temporaire vers le dossier
                    if (move_uploaded_file($temp, $dir . $name_image)) {
                        return $dir .$name_image; // On retourne le nom de l'image choisie;
                    }
                }
            }
        }
            // On retourne le nom de l'image par défaut
            return "../public/IMG/pedagogie.jpeg";
        }