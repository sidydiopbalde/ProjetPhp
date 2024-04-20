<?php
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les valeurs soumises
        $email = $_POST['email'] ?? '';
        $motdepasse = $_POST['motdepasse'] ?? '';

        include '/var/www/html/Projet/model/authentification.php';
        $data=readDataUser();
        /* var_dump($data); */
        foreach($data as $value)
            if(($value['email']==$email) && ($value['password']==$motdepasse))
            {$bool="true";break;}
            else{
            $bool="false";}
        

        // Vérifier les informations d'identification
        if ($bool== "true") {
            // Rediriger vers la page d'accueil
            header("Location: ?x=1");
            exit; // Arrêter l'exécution du script pour éviter toute sortie supplémentaire
        } elseif($bool=="false"){
            // Afficher un message d'erreur si les informations d'identification sont incorrectes
            $error_message = "Adresse e-mail ou mot de passe incorrect.";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/CSS/connexion.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>CCCCCCCCC</title>
</head>
<body>
                      
    <div class="conteneur">
        
        <form action="" class="formulaire" method="post">
            <img src="../public/IMG/sonatel.jpeg" alt="sonatelAcademy">
            <div class="conect">
               
                    <div class="requierd">
                    <?php if(isset($error_message)) echo "<p>$error_message</p>"; ?>
                         <p>Email et Mot de passe requis</p></div>
                    <label for="">Email Address <span style="color: red;">*</span></label>
                    <input type="text" name="email" class="add" placeholder="Enter email address*">
                    <label for="">Password <span style="color: red;">*</span></label></label>
                    <input type="text" name="motdepasse" class="add" placeholder="Enter your password*">
                    <i class="fa fa-eye-slash" style="font-size:30px;color: black;"></i>
           
            </div>          
             <div class="remember">
            <label for=""><input type="checkbox"> Remember me</label>
            <a href="#" style="color: lightseagreen;"><p>Mot de passe Oublié?</p></a>
        </div>

<div class="logIn">
<?php if($email=="sididiop53@gmail.com" && $motdepasse=="diop")?>
    <!-- <a href="?x=1" style="color: white;">Log In</a> -->
    <button type="submit">log in</button>

  </div>
 
</div>
            
        </form>

    </div>
   
</body>
</html>