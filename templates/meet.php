<?php

// // Pour activer les erreurs
// ini_set("display_errors", 1);
// ini_set("display_startup_errors", 1);
// error_reporting(E_ALL);

session_start();

$_SESSION = [
    "erreur_lbl" => "",
    "erreur_desc" => "",
    "id_promo" => "p2"
];


function dd($data, $die=true){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    if($die) die();
}

// Fonction qui permet de récupérer la liste des référentiels
function recupReferentiel(){
    $result = [];
    $path = "referentiel.csv";
   
    $file = fopen($path, "r");
    if($file != null){
        $premier_ligne = fgetcsv($file);

        while (($ligne_suivant = fgetcsv($file)) != null) {
            $result[] = array_combine($premier_ligne, $ligne_suivant);
        }
    }

    fclose($file);

    return $result;
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
                if(strtolower($ref["libelle"]) == strtolower($libelle)){
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



// Fonction pour valider le description
function validate_description($description) {

    if(empty($description)){
        $_SESSION["erreur_desc"] = "active";
        return false; // Quand on ne valide pas la description
    }else{
        $_SESSION["erreur_desc"] = "";
        return true; // Quand on valide la description
    }
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
            $dir = "img/"; // Le chemin vers le dossier ou on veut stocker l'image

            // On récupére le nouveau nom de l'image
            $name_image = uniqid() ."." . $extension;

            // On déplace l'image du dossier temporaire vers le dossier
            if (move_uploaded_file($temp, $dir . $name_image)) {
                return $name_image; // On retourne le nom de l'image choisie;
            }
        }
    }
    // On retourne le nom de l'image par défaut
    return "image.png";
}


// Fonction ajouter nouveau référentiel
function ajouter_referentiel($libelle, $description, $promo){
    $nouveau_referentiel = [
        "promo" => $promo,
        "libelle" => $libelle,
        "description" => $description,
        "image" => recupImage("file")
    ];

    ecrit_dans_fichier_csv("referentiel.csv", $nouveau_referentiel);
}


// On récupére la liste des référentiels
$referentiels = recupReferentiel();

$msg_error = "Vous n'avez pas entrer un libelle";


if(isset($_REQUEST["ajouter-ref"])){

    $libelle =  trim($_REQUEST["libelle"]);
    $description = trim($_REQUEST["desc"]);
    $promo = isset($_REQUEST["add-promo"]) ? $_SESSION["id_promo"] : "aucun"; 
    $image = $_REQUEST["file"];

    $validation_libelle = validate_libelle($libelle, $referentiels);
    $validation_desc = validate_description($description);
   
    $msg_error = $validation_libelle[1];

    if($validation_libelle[0] == true && $validation_desc == true){
        ajouter_referentiel($libelle, $description, $promo);
    }

} 

?>


<link rel="stylesheet" href="style.css">
<body>
    
    <form action="" method="post" enctype="multipart/form-data">
        <h1>Nouvelle référentiel</h1>
    
        <div id="content-form">
            <div class="group">
                <label for="">Libelle</label>
                <input type="text" id="libelle" name="libelle">
                <span class="msg-error lbl <?=$_SESSION["erreur_lbl"]?>"><?=$msg_error?></span>
            </div>
            <div class="group">
                <label for="">Description</label>
                <textarea name="desc" id="desc"></textarea>
                <span class="msg-error lbl <?=$_SESSION["erreur_desc"]?>">Vous n'avez pas entrer une description</span>
            </div>
            <div class="group">
                <div id="box-switch">
                    <div class="switch">
                        <input type="checkbox" class="switch-slider" name="add-promo">
                    </div>
                </div>
                <div class="image">
                    <div class="logo">
                        <img src="../img/classe.jpg" id="img">
                    </div>
                    <div class="box-input">
                        <input type="file" name="file" id="file" hidden>
                        <label for="file">Choisir une image</label>
                    </div>
                    <span class="msg-error">Vous n'avez pas choisi une image</span>
                </div>
            </div>
            <div class="group">
                <button type="submit" name="ajouter-ref">Enregistrer</button>
            </div>
        </div>
    </form>

</body>

<script>
    const input = document.getElementById("file");
    
    const image = document.querySelector("form .group .image img");
    const msg_error = document.querySelector("form .group .image .msg-error");

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



