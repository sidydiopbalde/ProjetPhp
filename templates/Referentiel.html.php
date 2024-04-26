<?php 

/*   $_SESSION = [
    "erreur_lbl" => "",
    "erreur_desc" => "",
    "id_promo" => "p2"
];   */
include "../model/listeApp.php"; 
$id=$_SESSION['id'];
//Fonction pour valider le description
function validate_description($description) {
    
    if(empty($description)){
        $_SESSION["erreur_desc"] = "active";
        return false; // Quand on ne valide pas la description
    }else{
        $_SESSION["erreur_desc"] = "";
        return true; // Quand on valide la description
    }
}

// Fonction pour valider le libelle
function validate_libelle($libelle, $liste_referentiels){
    $msg_error = "Vous n'avez pas entrer un libelle";
    
    // Variable pour la validation
    $resultat = false;
    
    if(empty($libelle)){
        $_SESSION["erreur_lbl"] = "active";
    }else{
        
        // Condition pour vérifier si le libelle contient minimum 6 caractères*
        if(strlen($libelle) >= 6){
            $libelle_existe = false;

            // On parcourt la liste des référentiels pour vérifier si le référentiel qu'on veut créer existe déja
            foreach($liste_referentiels as $ref){
                if(strtolower($ref["ref"]) == strtolower($libelle)){
                    // Ici le libelle existe
                    $libelle_existe = true;
                    break;
                }
            }
            
            if($libelle_existe == true){
                $_SESSION["erreur_lbl"] = "active";
                $msg_error = "Le libelle existe déja";
            }else{
                $_SESSION["erreur_lbl"] = "";
                $msg_error = "valider";
                $resultat = true; // C'est quand on valide le libelle
            }
 
        }else{
            $_SESSION["erreur_lbl"] = "active";
            $msg_error = "Le libelle doit contenir minimum 6 caractères";
        }
    }
            // index 0,   index 1
            return [ $resultat, $msg_error];
      }
           
        // Fonction qui permet ajouter des éléments dans un fichier csv
            function ecrit_dans_fichier_csv($path, $data){
                        $file = fopen($path, "a");
                        
                        // On vérifie si on parvient à ouvrir le fichier
                        if($file != null){
                            
                            // On ajoute la nouvelle valeur
                            fputcsv($file, $data);
                            
                        }
                        
                        fclose($file);
            }



function recupImage($name_input){
    if(isset($_FILES[$name_input])){
        // On récupère l'image
        $image = $_FILES[$name_input];
        $temp = $image["tmp_name"];
        $full_image = explode(".", $image["name"]);
        $extension = end($full_image);
        
        // Pour récupérer l'erreur
        $erreur = $image['error'];
        // Si on parvient à charger l'image
        if($erreur == 0){
            $dir = "../public/IMG/"; // Le chemin vers le dossier où on veut stocker l'image
            
            // On génère un nouveau nom unique pour l'image
            $name_image = uniqid() ."." . $extension;
            
            // On déplace l'image du dossier temporaire vers le dossier de destination
            if (move_uploaded_file($temp, $dir . $name_image)) {
                return $dir . $name_image; // On retourne le chemin complet de l'image choisie
            }
        }
    }
    // On retourne le chemin de l'image par défaut
    return "../public/IMG/pedagogie.jpeg";
}
        
        if(isset($_REQUEST['ajouter-ref'])){
            //trim pour enlever les espaces
            $libelle= trim ($_REQUEST['libelle']);
            $description=trim ($_REQUEST['description']);
          /*   validate_libelle($libelle, $referentiels);
            validate_description($description); */
            $promo = isset($_REQUEST["in-promo"]) ? $_SESSION["id"] : "aucun"; 
            $file=trim ($_REQUEST['file']);

            
            $referentiels=lister_refercsv($_SESSION["id"]);  
          
            $validation_libelle = validate_libelle($libelle, $referentiels);
            $validation_desc = validate_description($description);
           
            $msg_error = $validation_libelle[1];
        
            if($validation_libelle[0] == true && $validation_desc == true){
                ajouter_referentiel($libelle, $description, $promo);
            }
            
            } 
        // Fonction ajouter nouveau référentiel
        function ajouter_referentiel($libelle, $description, $promo){
            $nouveau_referentiel = [
               
                "ref" => $libelle,
                "etat" => 'desactivé',
                "id" => $promo,
                "image" => recupImage("file"),
                "description" => $description
                
            ];
            
            ecrit_dans_fichier_csv("/var/www/html/Projet/data/referentiel.csv", $nouveau_referentiel);
        }

        ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/CSS/Referentiel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Referentiel</title>
   
</head>
<body>

   
         
            <div class="interm">
                <p>Référentiels</p><p style="font-size: 0.8rem;" >Référentiels * Liste</p>
            </div> 
            <div class="promotions">
          
            <div class="referentiels">
              <?php  
                  

               foreach(lister_refercsv($id) as $tableau): 
               ?>
                    <span class="refdyn"> 
                        <span>...</span>
                       <a href="?x=8"> <img src="<?=$tableau["img"]?>" alt="" style="width:60%;"></a>
                        <!-- redirection vers la liste des apprenants selon le referentiel choisi -->
                        <form action="?x=8"  method="post">
                        <button name="ref[]" value="<?= $tableau["ref"]?>"  type="submit"><span><?= $tableau["ref"]?></span></button>  
                        </form>
                    
                        <span class="active"><?= $tableau["etat"]?></span>
                    </span>
                 <?php endforeach?>
                                       
                    </div>
                  
             </div>
             <div class="form_ref">
                    <span class="ref ref5">
                        <span><strong>Nouveau Referentiel</strong></span>

                        <form action="" class="ref5" style="width:15rem;" method="post" enctype="multipart/form-data">

                        <span><label for="">Libelle</label></span>
                        <span><input type="text" placeholder="Entrer le libelle" name="libelle">
                        <span class="msg-error lbl <?=$_SESSION['erreur_lbl']?>"><?=$msg_error?></span></span>
                        <span><label for="">Description</label></span>
                        <span><input type="text" placeholder="Entrer la Description" name="description"></span>
                        <!-- message erreur libelle -->
                        <span class="msg-error lbl <?=$_SESSION["erreur_desc"]?>">vous n'avez pas saisi une description</span> 
                        <span class="group">
                            <div id="switch">
                                <input type="checkbox" name="in-promo" id="" class="switch-button">
                            </div>
                            <img src="../public/IMG/pedagogie.jpeg" alt="" name="img" id="img" class="img-ref">
                            <input type="file" name="file" id="file" hidden>
                            <label for="file">chosir une image</label>
                         </span>
                         <span class="msg-error" >Vous n'avez pas choisi une image</span>
                        
                        <span><button type="submit"  name="ajouter-ref" style="background-color: #009088; color: white;position: absolute;left:6rem;padding: 0.5rem; border-radius: 0.3rem;">Enregistrer</button></span>
                      
                        </form>
                        
                     </span>
             </div>
    </div>
    <div class="footer"> Sontel Academy
                <i class="material-icons" style="font-size:48px;color:white; background-color: rgb(22, 103, 76); border-radius: 100%; position: absolute; left: 97%; top: 2%; font-weight: bold;">settings</i>
            </div>
    </div>
</body>
</html>
<script>
    const input = document.getElementById("file");
    const image = document.querySelector("form .group img");
    

    const msg_error = document.querySelector(".msg-error");

    const extension_accepter = ["image/jpeg", "image/png", "image/gif", "image/svg"];

    input.onchange = function(){
        // Ici je récupére le fichier qu'il a sélectionner
        const fichier = input.files[0];

        // Ici je récupére l'extension du fichier
        const extension = fichier.type;

        if(extension_accepter.includes(extension)){

            image.src = URL.createObjectURL(fichier);

            if(msg_error.classList.contains("active")){
                msg_error.classList.remove("active");
            }
            
        }else{
            if(!msg_error.classList.contains("active")){
                msg_error.classList.add("active");
            }
        }   
    };
</script>
