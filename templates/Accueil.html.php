<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>animationIcone</title>
    <title>Promotion</title>
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

.interm{
    position: absolute;
    top: 15%;
    width: 100%;
    font-size: 2rem;
    display: flex;
    justify-content: space-between;
}

.promotions{
    width: 100%;
    background-color: white;
    height: 50%;
    position:relative;
    top: 25%;
    border-radius: 1rem;
}
.rond{
    width: 3rem;
    height: 3rem;
    background-color: lightgray;
    position: absolute;
    left: 16rem;
    border-radius: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.icone a{
    color: black ;
}
.icone i{
    margin-right: 0.5rem;
}
.icone:hover {
    background-color: #009088;
}
.libelle{
    position: absolute;
    left: 10rem;
    top: 10rem; 
}
#lib{
    width: 70rem;
    height: 3rem;
    border-radius: 0.5rem;
    padding: 1rem;
}
.date-debut{
    position: absolute;
    left: 10rem;
    top: 16rem;
    
    
}
#deb{
    width: 30rem;
    height: 3rem;
    border-radius: 0.5rem;
    padding: 1rem;
}
.date-fin{
    position: absolute;
    left: 50rem;
    top: 16rem;
}
#fin{
    width: 30rem;
    height: 3rem;
    border-radius: 0.5rem;
    padding: 1rem;
}
.ref{
    width: 10rem;
    height: 2rem;
    background-color: #3F51B3;
    position: absolute;
    top: 22rem;
    left: 10rem;
    border-radius: 0.5rem;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
}
.creerP{
    width: 10rem;
    height: 2rem;
    background-color: #009088;
    position: absolute;
    top: 22rem;
    left: 70rem;
    border-radius: 0.5rem;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
}
.ref a{
    color: white;
}
.creerP a{
    color: white;
}

.ligne{
    height: 19rem;
    width: 0.1rem;
    position: absolute;
    left: 5.5rem;
    top: 6.3rem;
    background-color: lightgrey;
}

/* @media screen and (max-width: 1024px) {
    .conteneur {
        flex-direction: column;
    }
    .side-bar {
        width: 100%;
        margin-right: 0;
    }
    .content {
        width: 100%;
    }
}

/* Ajout de styles CSS pour améliorer la responsivité */

/* Pour les écrans de taille moyenne (tablette) */
/* @media screen and (max-width: 1024px) {
    .content {
        flex-direction: column;
        align-items: center;
    }
    .tete {
        width: 100%;
        flex-direction: column;
    }
    .gauche, .droite {
        width: 100%;
        position: static;
        margin: 1rem 0;
    }
}  */

/* Pour les petits écrans (téléphone) */
/* @media screen and (max-width: 768px) {
    .side-bar {
        display: none;
    }
    .content {
        width: 100%;
    }
    .tete {
        flex-direction: column;
        align-items: center;
    }
    .search-bar {
        width: 100%;
        margin-top: 1rem;
    }
    .gauche, .droite {
        width: 100%;
        position: static;
        margin: 1rem 0;
    }
}
 */
/* Pour les très petits écrans (mobiles) */
/* @media screen and (max-width: 480px) {
    .menu {
        font-size: 1.2rem;
    }
    .tete {
        flex-direction: column;
        align-items: center;
    }
    .search-bar {
        width: 100%;
        margin-top: 1rem;
    }
    .gauche, .droite {
        width: 100%;
        position: static;
        margin: 1rem 0;
    }
    .promotions {
        padding: 0.5rem;
    }
    .footer {
        font-size: 0.8rem;
    }
    .material-icons {
        font-size: 24px;
    }
} */
    </style>
</head>
<body>
    <div class="conteneur">
        
       <!--  -->
            <div class="interm">
                <p>Promotions</p><p>promos*création</p>
            </div> 
            <div class="promotions">
                <span style=" width: 2rem; height: 2rem;border-radius: 100%; background-color: #009088; color: white;text-align: center; position: absolute; left: 5%; top: 15%;" > 1</span>
                 <span style=" position: absolute; left: 8%; top: 15%;"> Promotion</span>
                 <span class="ligne"></span>
                 <span class="libelle"><label for="lib">libelle <br> <br><input type="text" name="" id="lib" placeholder="Entrer le libelle*"></label></span>
                 <span class="date-debut"><label for="deb">Date Debut<br> <br><input type="text" name="" id="deb" placeholder="MM/DD/YYYY*"></label></span>
                 <span class="date-fin"><label for="fin">Date Fin<br> <br><input type="text" name="" id="fin" placeholder="MM/DD/YYYY*"></label></span>
                 <span class="ref"><a href="">Ajouter Referenciel(s)</a></span>
                 <span class="creerP"><a href="indexe.php?x=7">Créer promotions</a></span>
                 <span style=" width: 2rem; height: 2rem;border-radius: 100%; background-color: lightgrey; color: green;text-align: center; position: absolute; left: 5%; top:85%;" > 2</span>
                 <span style=" position: absolute; left: 8%; top: 86%;">Référentiels</span>
            </div>
            
        </div>
        <div class="footer"> Sontel Academy
                <i class="material-icons" style="font-size:48px;color:white; background-color: rgb(22, 103, 76); border-radius: 100%; position: absolute; left: 97%; top: 2%; font-weight: bold;">settings</i>
            </div>
    </div>
</body>
</html>