<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
           
           

 session_start();

// Vérifier si l'utilisateur est connecté
/* if (!isset($_SESSION['user'])) {
    // Rediriger vers la page de connexion
    header("Location: /Projet/public/indexe.php");
    exit;
}
 */
        if(isset($_GET["x"])==1){
        
        include "../templates/partial/menu.html.php";       
        }
        else{
            include "../templates/connexion3.html.php";
        }
       
?>
</body>
</html>