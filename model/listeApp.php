<?php


function remplist($id_promo)
{
$file= '/var/www/html/Projet/data/presence.csv';
$fp= fopen($file, 'r');


if($fp==NULL){
    echo 'impossible to open file';
}
else{
    $donnees=array();
    while (($ligne = fgetcsv($fp)) !== false) {
        if ($ligne[8]==$id_promo){
            $donnees[] = array(
                'Matricule' => $ligne[0],
                'Nom' => $ligne[1],
                'Prenom' => $ligne[2],
                'Telephone' => $ligne[3],
                'Referentiel' => $ligne[4],
                'Heure' => $ligne[5],
                'statut' => $ligne[6],
                'date' => $ligne[7],
                'id' => $ligne[8]
            );
        }
       
    }
    fclose($fp);  
    return $donnees;
}
}

function remplistApp($id)
{
    $file= '/var/www/html/Projet/data/apprenants.csv';
    $fp= fopen($file, 'r');
    
    if($fp==NULL){
        echo "echec lors de l'ouverture du fichier";
    }
    else{
        $apprenant=array();
        while(($row=fgetcsv($fp)) !== false){
            if($row[5]==$id){
                $apprenant[]=array(
                    'Nom'=>$row[0],
                    'Prenom'=>$row[1],
                    'Email'=>$row[2],
                    'Genre'=>$row[3],
                    'Téléphone'=>$row[4],
                    'id'=>$row[5],
                    'ref'=> $row[6]
                );
            }
          
        }
        fclose($fp);
        return $apprenant;
    }
    
    }


   


function remplirListeApprenant()
{
    $Etudiants=[

        [
            "Matricule"=>"P6_DEV_DATA_2024_129",
            "Nom"=>"Balde", 
            "Prenom"=>"Sidy Diop", 
            "Telephone"=>"784316538",
            "Referentiel"=>"REF DIG", 
            "Heure"=>"06:49",
            "status"=>"PRESENT",
            "date"=>"12/04/2024"
        ],
        [
            "Matricule"=>"P6_DEV_DATA_2024_130",
            "Nom"=>"issa", 
            "Prenom"=>"Ndiaye", 
            "Telephone"=>"784316538",
            "Referentiel"=>"REF DIG", 
            "Heure"=>"06:49",
            "status"=>"PRESENT",
            "date"=>"10/04/2024"
        ],
        [
            "Matricule"=>"P6_DEV_DATA_2024_131",
            "Nom"=>"Diop", 
            "Prenom"=>"Aziz", 
            "Telephone"=>"78322538",
            "Referentiel"=>"AWS", 
            "Heure"=>"07:32",
            "status"=>"PRESENT",
            "date"=>"10/04/2024"
        ],
        [
            "Matricule"=>"P6_DEV_DATA_2024_132",
            "Nom"=>"Seck", 
            "Prenom"=>"Rama", 
            "Telephone"=>"76390238",
            "Referentiel"=>"WEB", 
            "Heure"=>"-",
            "status"=>"ABSENT",
            "date"=>"10/04/2024"
        ]
        ,
        [
            "Matricule"=>"P6_DEV_DATA_2024_133",
            "Nom"=>"issa", 
            "Prenom"=>"Ndiaye", 
            "Telephone"=>"784316538",
            "Referentiel"=>"REF DIG", 
            "Heure"=>"07:20",
            "status"=>"PRESENT",
            "date"=>"10/04/2024"
        ]
        ,
        [
            "Matricule"=>"P6_DEV_DATA_2024_134",
            "Nom"=>"issa", 
            "Prenom"=>"Ndiaye", 
            "Telephone"=>"784316538",
            "Referentiel"=>"REF DIG", 
            "Heure"=>"-",
            "status"=>"ABSENT",
            "date"=>"10/04/2024"
        ],
        [
            "Matricule"=>"P6_DEV_DATA_2024_135",
            "Nom"=>"Seck", 
            "Prenom"=>"Rama", 
            "Telephone"=>"76390238",
            "Referentiel"=>"WEB", 
            "Heure"=>"-",
            "status"=>"ABSENT",
            "date"=>"10/04/2024"
        ]
        ,
        [
            "Matricule"=>"P6_DEV_DATA_2024_136",
            "Nom"=>"issa", 
            "Prenom"=>"Ndiaye", 
            "Telephone"=>"784316538",
            "Referentiel"=>"REF DIG", 
            "Heure"=>"06:20",
            "status"=>"PRESENT",
            "date"=>"10/04/2024"
        ]
        ,
        [
            "Matricule"=>"P6_DEV_DATA_2024_137",
            "Nom"=>"issa", 
            "Prenom"=>"Ndiaye", 
            "Telephone"=>"784316538",
            "Referentiel"=>"REF DIG", 
            "Heure"=>"-",
            "status"=>"PRESENT",
            "date"=>"10/04/2024"
        ],
        [
            "Matricule"=>"P6_DEV_DATA_2024_138",
            "Nom"=>"Seck", 
            "Prenom"=>"Rama", 
            "Telephone"=>"76390238",
            "Referentiel"=>"WEB", 
            "Heure"=>"-",
            "status"=>"ABSENT",
            "date"=>"10/04/2024",
            "id"=>"p5"

        ]
        ,
        [
            "Matricule"=>"P6_DEV_DATA_2024_145",
            "Nom"=>"issa", 
            "Prenom"=>"Ndiaye", 
            "Telephone"=>"784316538",
            "Referentiel"=>"REF DIG", 
            "Heure"=>"06:49",
            "status"=>"PRESENT",
            "date"=>"10/04/2024"
        ]
        ,
        [
            "Matricule"=>"P6_DEV_DATA_2024_156",
            "Nom"=>"issa", 
            "Prenom"=>"Ndiaye", 
            "Telephone"=>"784316538",
            "Referentiel"=>"REF DIG", 
            "Heure"=>"06:49",
            "status"=>"PRESENT",
            "date"=>"10/04/2024"
        ],
        [
            "Matricule"=>"P6_DEV_DATA_2024_138",
            "Nom"=>"Seck", 
            "Prenom"=>"Rama", 
            "Telephone"=>"76390238",
            "Referentiel"=>"WEB", 
            "Heure"=>"-",
            "status"=>"ABSENT",
            "date"=>"10/04/2024"
        ],
        [
            "Matricule"=>"P6_DEV_DATA_2024_138",
            "Nom"=>"Seck", 
            "Prenom"=>"Rama", 
            "Telephone"=>"76390238",
            "Referentiel"=>"WEB", 
            "Heure"=>"07:50",
            "status"=>"PRESENT",
            "date"=>"09/04/2024"
        ],
        [
            "Matricule"=>"P6_DEV_DATA_2024_138",
            "Nom"=>"Seck", 
            "Prenom"=>"Rama", 
            "Telephone"=>"76390238",
            "Referentiel"=>"WEB", 
            "Heure"=>"-",
            "status"=>"ABSENT",
            "date"=>"09/04/2024"
        ],
        [
            "Matricule"=>"P6_DEV_DATA_2024_138",
            "Nom"=>"Seck", 
            "Prenom"=>"Rama", 
            "Telephone"=>"76390238",
            "Referentiel"=>"WEB", 
            "Heure"=>"-",
            "status"=>"ABSENT",
            "date"=>"09/04/2024"
        ],
        [
            "Matricule"=>"P6_DEV_DATA_2024_138",
            "Nom"=>"Seck", 
            "Prenom"=>"Rama", 
            "Telephone"=>"76390238",
            "Referentiel"=>"HACKEUSE", 
            "Heure"=>"-",
            "status"=>"ABSENT",
            "date"=>"09/04/2024"
        ],
        [
            "Matricule"=>"P6_DEV_DATA_2024_138",
            "Nom"=>"Seck", 
            "Prenom"=>"Rama", 
            "Telephone"=>"76390238",
            "Referentiel"=>"WEB", 
            "Heure"=>"-",
            "status"=>"ABSENT",
            "date"=>"09/04/2024"
        ],
        [
            "Matricule"=>"P6_DEV_DATA_2024_138",
            "Nom"=>"Seck", 
            "Prenom"=>"Rama", 
            "Telephone"=>"76390238",
            "Referentiel"=>"HACKEUSE", 
            "Heure"=>"10h:17",
            "status"=>"PRESENT",
            "date"=>"09/04/2024"
        ]
        ,
        [
            "Matricule"=>"P6_DEV_DATA_2024_138",
            "Nom"=>"Seck", 
            "Prenom"=>"Rama", 
            "Telephone"=>"76390238",
            "Referentiel"=>"WEB", 
            "Heure"=>"-",
            "status"=>"ABSENT",
            "date"=>"09/04/2024"
        ]
        ,
        [
            "Matricule"=>"P6_DEV_DATA_2024_138",
            "Nom"=>"Seck", 
            "Prenom"=>"Rama", 
            "Telephone"=>"76390238",
            "Referentiel"=>"WEB", 
            "Heure"=>"-",
            "status"=>"ABSENT",
            "date"=>"09/04/2024"
        ]
        ,
        [
            "Matricule"=>"P6_DEV_DATA_2024_138",
            "Nom"=>"Seck", 
            "Prenom"=>"Rama", 
            "Telephone"=>"76390238",
            "Referentiel"=>"WEB", 
            "Heure"=>"-",
            "status"=>"ABSENT",
            "date"=>"09/04/2024"
        ]
        ,
        [
            "Matricule"=>"P6_DEV_DATA_2024_138",
            "Nom"=>"Seck", 
            "Prenom"=>"Rama", 
            "Telephone"=>"76390238",
            "Referentiel"=>"WEB", 
            "Heure"=>"-",
            "status"=>"ABSENT",
            "date"=>"09/04/2024"
        ]
        ,
        [
            "Matricule"=>"P6_DEV_DATA_2024_138",
            "Nom"=>"Seck", 
            "Prenom"=>"Rama", 
            "Telephone"=>"76390238",
            "Referentiel"=>"DATA", 
            "Heure"=>"-",
            "status"=>"ABSENT",
            "date"=>"09/04/2024"
        ]
       
        ];

        return $Etudiants;
}


function listeApprenant(){
    $listes=[
        [
        
          "Nom"=>"Baye Saer",
          "Prenom"=>"Mbow",
          "Email"=>"mbowbayesaer4@gmail.com",
          "Genre"=>"M",
          "Téléphone"=>"762895563",
          
        ],
        [
            
            "Nom"=>"fanta",
            "Prenom"=>"Ndao Tine",
            "Email"=>"ndaotine@gmail.com",
            "Genre"=>"F",
            "Téléphone"=>"775647563"
          ],
          [
       
            "Nom"=>"Rame",
            "Prenom"=>"Seck",
            "Email"=>"ramaseck@gmail.com",
            "Genre"=>"F",
            "Téléphone"=>"788945563"
          ],
          [
          
            "Nom"=>"Fata",
            "Prenom"=>"Mbow",
            "Email"=>"mbowbayesaer4@gmail.com",
            "Genre"=>"M",
            "Téléphone"=>"789308563"
          ],

          [
          
            "Nom"=>"Kine",
            "Prenom"=>"Mbow",
            "Email"=>"mbowbayesaer4@gmail.com",
            "Genre"=>"M",
            "Téléphone"=>"789308563"
          ],

          [
          
            "Nom"=>"Mouhamed",
            "Prenom"=>"Beye",
            "Email"=>"metzo@gmail.com",
            "Genre"=>"M",
            "Téléphone"=>"789308563"
          ]
          ,

          [
          
            "Nom"=>"BALDE",
            "Prenom"=>"SIDY",
            "Email"=>"mbowbayesaer4@gmail.com",
            "Genre"=>"M",
            "Téléphone"=>"789308563"
          ]
          ,

          [
          
            "Nom"=>"MBENGUE",
            "Prenom"=>"Modou",
            "Email"=>"modou@gmail.com",
            "Genre"=>"M",
            "Téléphone"=>"789308563"
          ]
          ,

          [
          
            "Nom"=>"DIOP",
            "Prenom"=>"Abdou",
            "Email"=>"da@gmail.com",
            "Genre"=>"M",
            "Téléphone"=>"769308563"
          ] ,
          [
        
            "Nom"=>"Baye Saer",
            "Prenom"=>"Mbow",
            "Email"=>"mbowbayesaer4@gmail.com",
            "Genre"=>"M",
            "Téléphone"=>"762895563",
            
          ],
          [
              
              "Nom"=>"fanta",
              "Prenom"=>"Ndao Tine",
              "Email"=>"ndaotine@gmail.com",
              "Genre"=>"F",
              "Téléphone"=>"775647563"
            ],
            [
         
              "Nom"=>"Jules",
              "Prenom"=>"Seck",
              "Email"=>"Js@gmail.com",
              "Genre"=>"M",
              "Téléphone"=>"788456563"
            ],
            [
            
              "Nom"=>"SAGNA",
              "Prenom"=>"Oumy",
              "Email"=>"salimataos@gmail.com",
              "Genre"=>"F",
              "Téléphone"=>"784178563"
            ]
        ];
        return $listes;
}
function listerPromotions(){
    $promotion=[
        
    ];
}

function filtrerPresence($status='status',$id_promo){
     //$ETAT=remplirListeApprenant();
    $ETAT=remplist($id_promo);
    
    if($status=='status'){
        return $ETAT;

    }
    $resultat=[];
    foreach($ETAT as $valeur){
        if($valeur['status']==$status)
        {
            $resultat[]=$valeur;
        }
    }

    return $resultat;
}
function filtrerReferentiel($status='referentiel',$id_promo){
    //$ETAT=remplirListeApprenant();
    $ETAT=remplist($id_promo);
    
    if($status=='referentiel'){
        return $ETAT;

    }
    $resultat=[];
    foreach($ETAT as $valeur){
        if($valeur['Referentiel']==$status)
        {
            $resultat[]=$valeur;
        }
    }

    return $resultat;
}

function filtrerPresence1($status, $referentiel,$id_promo){
    
   
   // $ETAT = remplirListeApprenant();
     $ETAT = remplist($id_promo);  // focntion qui retourne un tableau dont les données sont lues à partir du fichier presence.csv
    
     if($status == 'status' && $referentiel == 'referentiel'){
         return $ETAT;
        }
        
        $resultat = [];
        
        foreach($ETAT as $valeur){
            if(($status == 'status' || $valeur['statut'] == $status) && 
            ($referentiel == 'referentiel' || $valeur['Referentiel'] == $referentiel))
            {
                $resultat[] = $valeur;
               
        }
    }
    return $resultat;
}

function lister_referentiel(){
    $liste_ref=[
        ["ref"=>"DEV WEB",
        "etat"=>"actif"],
    ["ref"=>"REF DIG",
        "etat"=>"actif"
    ],
    ["ref"=>"DATA",
        "etat"=>"actif"
    ],
    ["ref"=>"AWS",
        "etat"=>"actif"
    ],
    ["ref"=>"HACKEUSE",
        "etat"=>"actif"
    ]
];
return $liste_ref;
}
function lister_refercsv($id){

    $file= '/var/www/html/Projet/data/referentiel.csv';
    $fp= fopen($file, 'r');
    
    if($fp==NULL){
        echo "echec lors de l'ouverture du fichier";
    }
    else{
        $apprenant=array();
        while(($row=fgetcsv($fp)) !== false){

            if($row[2]==$id){
                $apprenant[]=array(
                    'ref'=>$row[0],
                    'etat'=>$row[1],
                    'id'=>$row[2]);                 
            }
        }
        return $apprenant;
    }
    
    }



    function filtre_par_date($date,$id){
        $tab=remplist($id);
        if($date== date('Y-m-d')){
            return $tab;
        }
        foreach($tab as $valeur){
            if($valeur['date']==$date)
            {
                $resultat[]=$valeur;
            }
        }
    
        return $resultat;
    } 
?>