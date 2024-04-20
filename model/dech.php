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