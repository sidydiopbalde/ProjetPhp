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
  <!--   <div class="conteneur"> -->
  <?php include "../model/listeApp.php";?>
         
            <div class="interm">
                <p>Référentiels</p><p style="font-size: 0.8rem;" >Référentiels * Liste</p>
            </div> 
            <div class="promotions">
          
            <div class="referentiels">
              <?php   $id=$_SESSION['id'];


               foreach(lister_refercsv($id) as $tableau): 
               ?>
                    <span class="refdyn"> 
                        <span>...</span>
                       <a href="?x=8"> <img src="../public/IMG/pedagogie.jpeg" alt="" style="width:100%;"></a>
                        <!-- redirection vers la liste des apprenants selon le referentiel choisi -->
                        <form action="?x=8"  method="post">
                        <button name="ref" value="<?= $tableau["ref"]?>"  type="submit"><span><?= $tableau["ref"]?></span></button>  
                        </form>
                    
                        <span class="active"><?= $tableau["etat"]?></span>
                    </span>
                 <?php endforeach?>
                                       
                    </div>
                  
             </div>
             <div class="form_ref">
                    <span class="ref ref5">
                        <span><strong>Nouveau Referentiel</strong></span>
                        <form action="" class="ref5" style="width:15rem;">
                        <span><label for="">Libelle</label></span>
                        <span><input type="text" placeholder="Entrer le libelle"></span>
                        <span><label for="">Description</label></span>
                        <span><input type="text" placeholder=" Entrer la Description"></span>
                        <span><button type="submit" style="background-color: #009088; color: white;position: absolute;left:6rem;padding: 0.5rem; border-radius: 0.3rem;">Enregistrer</button></span>
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

<?php //  if($tableau["etat"]== 'active') {
                                // echo '<span><font color="green">' .$tableau["etat"].'</font></span>';
                                // }
                                //else if($tableau["etat"]=='inactive') {
                                  // echo '<span> <font color="red">' .$tableau["etat"].'</font></span>';
                               // }?>