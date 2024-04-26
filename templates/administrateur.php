<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des Apprenants</title>
    <link rel="stylesheet" href="../public/CSS/administrateur.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>
<?php include ('/var/www/html/Projet/model/listeSelectReferentiel.php');?>
            <?php $id=$_SESSION['id']; $selectreferentiel=adapterSelectReferentiel($id);?>
    <div class="conteneur"> 

           
            <div class="interm">
                <p>Administrateur</p><p style="font-size: 0.8rem;" >admin*Liste* details* Administrateur </p>
            </div> 
            <form method="post" class="interm1" style="position:absolute; top:18%;">
           

               <div style="display:flex; justify-content:center; align-items:center;margin:auto;"><p style="position:absolute; top:20px; left:50px;">ADMINISTRATIONS De l'école du code ECSA</p></div> 
            
                  
                    </form>
            <div class="promotions" style="position:absolute; top:29%;">
               
                
                <span class="ligne"></span>
                <span class="list"><strong>Listes des administrateur</strong></span><span class="list50"><strong>(10)</strong></span>
                <span class="filter" style="position:absolute; top:5rem;">

                    <form action="" method="post">
                    <input type="text" name="filtrer" value="" placeholder="filtrer">
                    </form>
                   
                </span>
               
               
                <div>
                    <table>
                        <thead>
                            <tr>
                                <td style="width: 5%;">Image</td>
                                <td>Nom</td>
                                <td>Prenom</td>
                                <td>Email</td>
                                <td>Genre</td>
                                <td>Téléphone</td>
                                <td>Fonctions</td>
                                
                            </tr>
                        </thead>
                        <tbody>
                         <?php   

                        include('/var/www/html/Projet/model/administrateur_function.php');
                        include('/var/www/html/Projet/model/helpers.php');
                        //Définir le nombre d'apprenants à afficher par page
                         $nombreParPage = 6;

                         // Obtenir la liste complète des apprenants                     
                         $id=$_SESSION['id'];
                         $chemin='/var/www/html/Projet/data/administrateur.csv';
                         $listeAdmin = charger_data_admin($chemin);

                         // Calculer le nombre total d'apprenants
                        $totaladmin = count($listeAdmin);

                        // Calculer le nombre total de pages
                         $nombrePages = ceil($totaladmin / $nombreParPage);
                        

                         // Déterminer la page actuelle
                         $pageActuelle = isset($_GET['x']) ? $_GET['x'] : 1;

                         // Calculer l'index de départ pour la pagination
                        $w=$_GET["w"];                     
    
                        $indiceDebut = ($w - 1) * $nombreParPage;

                        /* filtre globale par le Nom */
                        if(isset($_POST['search'])){
                            $search=$_POST['search'];
                        }
                        if (!empty($search)) {
                            $listeFiltree = array_filter($listeAdmin, function ($apprenant) use ($search) {
                                return $apprenant['Prenom'] == $search;
                               
                            });
                            $listeAdmin = array_values($listeFiltree); // Réindexer le tableau filtré
                        }
                        /* filtre globale par le nom */
                        if(isset($_POST['filtrer'])){
                            $value = $_POST['filtrer'] ?? '';
                        }
                       
                        if (!empty($value)) {
                            $listeFiltree = array_filter($listeAdmin, function ($apprenant) use ($value) {
                                return $apprenant['prenom'] == $value;
                              
                            });
                            $listeAdmin = array_values($listeFiltree); // Réindexer le tableau filtré
                        }
                      
                        $apprenantsPage = array_slice($listeAdmin, $indiceDebut, $nombreParPage);
                         ?>  

                         <!--  Afficher les liens de pagination -->
                         <span style="position:absolute; top:31rem; left:2rem;">page</span>
                         <div style="position:absolute; top:33rem; left:2rem; border:1px solid;">
                         <?php 
                         for ($i = 1; $i <= $nombrePages; $i++) {
                            echo "<a  style='border:1px solid; font-size:20px;' href='?x=$pageActuelle&w=$i'>$i</a> ";
                       }
                        ?>
                         </div>
 
                         <?php               
                        foreach($apprenantsPage as $listeadmin): ?> 
                              <tr>
                                <td><img src="<?=$listeadmin["image"]?>" alt="user"></td>
                                <td class="np"><?=$listeadmin["nom"]?></td>
                                <td class="np"><?=$listeadmin["prenom"]?></td>
                                <td> <?=$listeadmin["email"]?> </td>
                                <td><?=$listeadmin["genre"]?></td>
                                <td><?=$listeadmin["telephone"]?></td>
                                <td><?=$listeadmin["fonction"]?></td>
                                
                             </tr>
                           <?php endforeach?>
                        
                        </tbody>
                    </table>
                    <div>
                   
                    </div>
                </div>

                <input type="checkbox" name="" id="popup">

                <div id="nouvelAprenant1">
                   
                    <!--  <label for="popup"></label> -->
                     <span class="haut"><strong>Nouvel Apprenant</strong> <span><label for="popup">X</label</span></span>
                    <span class="infoP1">
                     <span style=" width: 2rem; height: 2rem;border-radius: 100%; background-color: #009088; color: white;text-align: center;  " > 1</span>
                     <span>Informations Perso.</span>
                     <span style=" width: 20rem;  height: 0.5rem; background-color: whitesmoke;" > </span>
                     <span style=" width: 2rem; height: 2rem;border-radius: 100%; background-color: #009088; color: white;text-align: center;  " > 2</span>
                     <span>Informations Supplémentaires</span>
                    </span> 
                    
                    <form action="">
                     <div style="display: flex; flex-direction: column;">
                         <label for="">Nom</label><br>
                         <input type="text" placeholder="Entrer le nom"><br>
                     </div>
 
                     <div style="display: flex; flex-direction: column; ">
                     <label for="">Prénom</label><br>
                     <input type="text" placeholder="Entrer le prénom"><br>
                    </div>
 
                    <div style="display: flex; flex-direction: column;">
                     <label for="">Email</label><br>
                     <input type="text" placeholder="Entrer l'email" style="border: 1px solid;"><br>
                    </div>
 
                    <div style="display: flex; flex-direction: column;">
                     <label for="">Téléphone</label><br>
                     <input type="text" style="border: 1px solid;" placeholder="Entrer le téléphone" ><br>
                    </div>
 
                    <div style="display: flex; flex-direction: column;">
                     <label for="">Sexe</label><br>
                     <input type="text" style="border: 1px solid;" placeholder="Choisir le sexe" ><br>
                    </div>
 
                    <div style="display: flex; flex-direction: column;">
                     <label for="">Date de naissance</label><br>
                     <input type="date" style="border: 1px solid;" >
                    </div>
 
                    <div style="display: flex; flex-direction: column;">
                     <label for="">Lieu Naissance</label>
                     <input type="text" style="border: 1px solid;" >
                    </div>
                    <div style="display: flex; flex-direction: column;">
                        <label for="">N CNI</label>
                        <input type="text" style="border: 1px solid;" >
                       </div>
                    </form>
                    <span style="position: absolute; top: 90%; left: 3%;">

                     <button class= "nouveauA" style="background-color: #009088; color: white; padding: 0.5rem; border-radius: 0.5rem; "><Label for="popup" style="color: white;"><label for="popup3">nouveau</label></Label></button>
                 </span>
                 </div>

                 <input type="checkbox" name="" id="popup3">


                <div id="nouvelAprenant">
                    <span class="haut"><strong>Nouvel Apprenant</strong> <span><label for="popup">X</label</span></span>
                   <span class="infoP">
                    <span style=" width: 2rem; height: 2rem;border-radius: 100%; background-color: #009088; color: white;text-align: center;  " > 1</span>
                    <span>Informations Perso.</span>
                    <span style=" width: 2rem; height: 2rem;border-radius: 100%; background-color: #009088; color: white;text-align: center;   " > 2</span>
                    <span>Informations Supplémentaires</span>
                   </span> 

                   <form action="">
                    <div style="display: flex; flex-direction: column;">
                        <label for="">Nom & prénom Tuteur</label><br>
                        <input type="text" placeholder="Entrer le nom et le prénom du tuteur"><br>
                    </div>

                    <div style="display: flex; flex-direction: column; ">
                    <label for="">Contact Tuteur</label><br>
                    <input type="text" placeholder="Entrer le contact du tuteur"><br>
                   </div>

                   <div style="display: flex; flex-direction: column;">
                    <label for="">Photocopie CNI</label><br>
                    <input type="file" placeholder="Entrer le contact du tuteur" style="border: 1px solid;"><br>
                   </div>

                   <div style="display: flex; flex-direction: column;">
                    <label for="">Extrait de naissance</label><br>
                    <input type="file" style="border: 1px solid;" ><br>
                   </div>

                   <div style="display: flex; flex-direction: column;">
                    <label for="">Diplome</label><br>
                    <input type="file" style="border: 1px solid;" ><br>
                   </div>

                   <div style="display: flex; flex-direction: column;">
                    <label for="">Carte judiciaire</label><br>
                    <input type="file" style="border: 1px solid;" >
                   </div>

                   <div style="display: flex; flex-direction: column;">
                    <label for="">Visite médicale</label>
                    <input type="file" style="border: 1px solid;" >
                   </div>
                   </form>
                   <span style="position: absolute; top: 90%; left: 70%;">
                    <button style="background-color: whitesmoke;  padding: 0.5rem; border-radius: 0.5rem;"><label for="popup">x cancel</label></button>
                    <button style="background-color: #009088; color: white; padding: 0.5rem; border-radius: 0.5rem;">+ Créer nouvel apprenant</button>
                </span>
                </div>
                <input type="checkbox" name="" id="fermer">
                <input type="checkbox" name="" id="popup2">
               
              
            </div>
        
            <div class="mesboutons" style=" position: absolute;left: 50rem;top: 35%;">
               <button style="background-color: #009088; cursor: pointer;  padding: 0.5rem; border-radius: 0.4rem;"> <Label for="popup" style="color: white;"> + nouveau</Label></button>
        
            </div>  
            
                       
            <div class="footer"> Sontel Academy
                <i class="material-icons" style="font-size:48px;color:white; background-color: rgb(22, 103, 76); border-radius: 100%;
                 position: absolute; left: 97%; top: 2%; font-weight: bold;">settings</i>
            </div>
    </div>
</body>
</html>