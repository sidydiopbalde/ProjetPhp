<?php
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les valeurs soumises
        $email = $_POST['email'] ?? '';
        $motdepasse = $_POST['motdepasse'] ?? '';

        //verifie si email ne correspond pas à un format valide
        if(!empty($email)){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error_email = "le champ doit etre un e-mail !!!";
        }
         }

     
        if(empty($motdepasse)|| empty($email)){
            $error_message = "Adresse e-mail et mot de passe obligatoire.";
        }

        include '/var/www/html/Projet/model/authentification.php';
        $data=readDataUser();  
       
        
        if(filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($motdepasse)){
            
            foreach($data as $value){
                if(($value['email']==$email) && ($value['password']==$motdepasse))
                {
                    $bool="true";
                   
                    $_SESSION['user']=$value;
                    break;
                }
                else
                {
                    $bool="false";
                    $error_message = " email ou mot de passe  incorrect !!"; 
                } 
                
            } 
        
        }
        
       
        // Vérifier les informations d'identification
        if ($bool== "true") {
            // Rediriger vers la page d'accueil
            if($_SESSION['user']['statut']=='administrateur'){
            header("Location: ?x=1");
            exit; // Arrêter l'exécution du script pour éviter toute sortie supplémentaire
            }
            else{
                header("location: ?x=2");
                exit;
            }
        }
         /* elseif($bool=="false"){
            // Afficher un message d'erreur si les informations d'identification sont incorrectes
           $error_message = "Adresse e-mail et mot de passe obligatoire.";
        } */
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/CSS/connexion.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Page de connexion </title>
</head>
<body>
                      
    <div class="conteneur">
        
        <form action="" class="formulaire" method="post">
            <img src="../public/IMG/sonatel.jpeg" alt="sonatelAcademy">
            <div class="conect">
               
                <div class="requierd">
                    <!-- email et password requierd -->
                    <?php if(isset($error_message)) echo "<p><font red>$error_message</font></p>"; ?>
                </div>

                    <label for="">Email Address <span style="color: red;">*</span></label>
                    <input type="text" name="email" class="add" placeholder="Enter email address*">
                    <?php if(isset($error_email)) echo "<p style='color:red;'>$error_email</p>"; ?>

                    <label for="">Password <span style="color: red;">*</span></label></label>
                    <input type="password" name="motdepasse" class="add" placeholder="Enter your password*">

                    <?php if(isset($error_password)) echo "<span style='color:red;'>$error_password</span>"; ?>
                    <i class="fa fa-eye-slash" style="font-size:30px;color: black;"></i>
           
            </div>          
             <div class="remember">
            <label for=""><input type="checkbox"> Remember me</label>
            <a href="#" style="color: lightseagreen;"><p>Mot de passe Oublié?</p></a>
        </div>

       <div class="logIn">
            
            <button type="submit" style="background:rgb(33, 169, 162); cursor:pointer; color:white;border:none; font-size:2rem" >log in</button>

        </div>
        
        </div>
                    
                </form>

            </div>
   
</body>
</html>