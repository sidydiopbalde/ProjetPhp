
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <style>
                *{
    box-sizing: border-box;
    text-decoration: none;
}

body{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background:whitesmoke;
}
.conteneur{
  
    width: 100%;
    height: 100%;
    display: flex;
    padding: 1rem;
  
}
.side-bar{
    flex: 1;
    background-color: white;
    padding: 10px;
    margin-right: 1rem;
    border-radius: 10px;
   
}

.content{
    flex: 4;
    position: relative;
    display: flex;
    flex-direction: column;
   

}
img{
    width: 50%;
}
.menu{
   display: flex;
   flex-direction: column;
    gap: 1rem;
    font-size: 2rem;
}
.tete{
    width: 100%;
    background-color: white;
    height: 12%;
    border-radius:0.5rem;
    position: absolute;
    display: flex;
    align-items: center;
    justify-content: space-between;
  
}
.gauche{
  
    width: 50%;
    position: absolute;
    display: flex;
    justify-content: space-between;
    padding: 1rem;

}
.search-bar form input{
    height: 40px;
    width: 20vw;
padding: 1rem;
position:absolute;
top:0.5rem;
border-radius:0.5rem;
 
}
.carre{
    border-radius: 100%;
    background-color:whitesmoke;
    background-color: #F7FAFF;
    width: 3rem;
    height: 3rem;
    display: flex;
    align-items: center;
    justify-content: center;
  
}
.burg{
    width: 15%;
    height: 15%;
    cursor: pointer;
}

.droite{
    width: 35%;
    display: flex;
    justify-content: space-between; 
    padding: 1rem;
    position: absolute;
    left: 60%;
}

#bouton{
    display: none;
}
#bouton:checked + .side-bar{
    display: none;
}
.rond{
    width: 3rem;
    height: 3rem;
    background-color: lightgray;
    position: absolute;
    left: 10rem;
    border-radius: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.statut{
    font-size: 1.5rem;
}
.date input{
    padding: 0.5rem;
    color: rgb(33, 169, 162);
}
.footer{
    width: 100%;
    height: 10%;
    background-color: white;
    position: absolute;
    top: 90%;
    border-radius: 0.5rem;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 1rem;

}


.form-menu {
   position:absolute;
    border: 1px solid;
    
}

   </style>
    <title>Document</title>
   <!--  <script>
        promo=document.getElementById('promo');
        if($_SESSION['user']['statut']=='student'){
            promo.href='#';
        }
    </script> -->
</head>

<body>

    
    <div class="conteneur">
    <input type="checkbox" name="" id="bouton">
        <div class="side-bar">
            <img src="../public/IMG/sonatel.jpeg" alt="sonatel">
            <div class="menu"><p>~~MENU</p>

                <div class="icone"><i class='fas fa-stream' style='font-size:20px;'></i><a href="?x=12" style="font-size:22px;">Dashboard</a></div>

                    <?php if($_SESSION['user']['statut']=='administrateur'):?>
                <div class="icone"><i class='fas fa-calendar-alt' style='font-size:20px;'></i><a href="?x=1" style="font-size:22px;">Promos</a></div>
                    <?php endif?>
                    <?php if($_SESSION['user']['statut']=='student'):?>
                <div class="icone"><i class='fas fa-calendar-alt' style='font-size:20px;color:gray; '></i><a href="#" id="promo" style="font-size:22px; poniter-events:none; color:gray;">Promos</a></div>
                    <?php endif?>

                    <?php if($_SESSION['user']['statut']=='administrateur'):?>
                <div class="icone"><i class='far fa-calendar-alt' style='font-size:20px;'></i><a href="?x=4" style="font-size:22px;">Referenciels</a></div>
                <?php endif?>
                <?php if($_SESSION['user']['statut']=='student'):?>
                <div class="icone"><i class='far fa-calendar-alt' style='font-size:20px; color:gray;'></i><a href="" style="font-size:22px; poniter-events:none; color:gray;">Referenciels</a></div>
                <?php endif?>

                <?php if($_SESSION['user']['statut']=='administrateur'):?>
                <div class="icone"><i class="far fa-user-circle" style="font-size:20px; color: black;"></i><a href="?x=8" style="font-size:22px;">Utilisateurs</a></div>
                <?php endif?>
                <?php if($_SESSION['user']['statut']=='student'):?>
                <div class="icone"><i class="far fa-user-circle" style="font-size:20px; color: black; color:gray;"></i><a href="" style="font-size:22px;poniter-events:none; color:gray">Utilisateurs</a></div>
                <?php endif?>

                <?php if($_SESSION['user']['statut']=='administrateur'):?>
                <div class="icone"><i class="far fa-user-circle" style="font-size:20px; color: black;"></i><a href="#" style="font-size:22px;">Visiteurs</a></div>
                <?php endif?>
                <?php if($_SESSION['user']['statut']=='student'):?>
                <div class="icone"><i class="far fa-user-circle" style="font-size:20px; color:gray;"></i><a href="#" style="font-size:22px; poniter-events:none; color:gray">Visiteurs</a></div>
                <?php endif?>

                <div class="icone"><i class="far fa-user-circle" style="font-size:20px; color: black;"></i><a href="?x=2" style="font-size:22px;">Présences</a></div>
                <div class="icone"><i class='far fa-calendar-alt' style='font-size:20px;'></i><a href="?x=3" style="font-size:22px;">Evenements</a></div>

                <?php if($_SESSION['user']['statut']=='administrateur'):?>
                <div class="icone"><i class='far fa-user-circle' style='font-size:20px;'></i><a href="?x=11" style="font-size:22px;">Administrateur</a></div>
                <?php endif?>
                
                <?php if($_SESSION['user']['statut']=='student'):?>
                <div class="icone"><i class='far fa-user-circle' style='font-size:20px; color:gray;'></i><a href="" style="font-size:22px; poniter-events:none; color:gray">Administrateur</a></div>
                <?php endif?>
            </div> 
        </div>
        <div class="content">
            <div class="tete">
                <div class="gauche">
                    <div class="burg">
                        <label for="bouton"><i class="material-icons fa-bars" style="font-size:30px;">menu</i></label></div>
                    <div class="carre" style=" background-color: #F7FAFF;"><img src="../public/IMG/qrcode.png" alt=""></div>
              
                            <div class="search-bar" style=" border-radius:1rem; background-color: #F7FAFF; width:100%;">
                            <form action="" method="post">
                                <input type="hidden" name="search">
                                <input type="hidden" name="search1">
                            <input type="text" name="search" placeholder="Rechercher par matricule">
                            </form>
                               
                            </div>
                   <?php 
                  /*  function deconnecter(){

                    $_SESSION['user']=null; 

                    header("Location: /Projet/public/indexe.php");
                   }
                   if( $_SERVER('REQUEST_METHOD')=="POST" && isset($_POST['outlog'])){
                    deconnecter();
                   } */
                    ?>
                </div>
                <div class="droite">
                    <div class="date"><input type="date" name="" id="" placeholder="<?php echo date('Y-m-d')?>"></div>
                    <div class="rond"><img src="../public/IMG/user.jpeg" alt="user"></div>
                    <div class="statut">
                        <?php $nom=$_SESSION['user']['nom'] ; $prenom=$_SESSION['user']['prenom'] ?>
                       <span style="color:#009088;"><?php echo $nom ;echo $prenom;?> </span> <br>

                       <span><?php echo $_SESSION['user']['statut']?></span> 
                        <!-- <select name="" id=""> -->
                            <form action="" method="post">

                                <button style="padding:10px; background:red;" name="outlog" type="submit"><a href="/Projet/public/indexe.php">Se déconnecter?</a></button>  
                            </form>
                       <!--  </select> -->
                    </div>
                </div>
            </div>

             <?php
          
            if($_GET["x"]==2)
            include "/var/www/html/Projet/templates/tab.php";
            
            //else if($_GET["x"]==3)
           // include "/var/www/html/Projet/templates/listePresence.html.php";

            else if($_GET["x"]==4)
            include "/var/www/html/Projet/templates/Referentiel.html.php";

            else if($_GET["x"]==7)
            include "/var/www/html/Projet/templates/page3.html.php";

            else if($_GET["x"]==8)
            include "/var/www/html/Projet/templates/ListeApprenants1.html copy.php";
           // include "/var/www/html/Projet/templates/ListeApprenants1.html.php";

            else if($_GET["x"]==9)
            include "/var/www/html/Projet/templates/promo.html.php";

             else if($_GET["x"]==10)
            include "/var/www/html/Projet/templates/page3.html.php";
            else if($_GET["x"]==11)
                include "/var/www/html/Projet/templates/administrateur.php";
                else if($_GET["x"]==12)
                    include "/var/www/html/Projet/templates/Accueil.html.php";

            
            else{
                include "/var/www/html/Projet/templates/promo.html.php";
            }
            
            ?> 
            
    </div>
  
</body>
</html>