<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des Apprenants</title>
    <link rel="stylesheet" href="../public/CSS/ListeApprenants1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>
    <div class="conteneur"> 

    
           
            <div class="interm">
                <p>Apprenants</p><p style="font-size: 0.8rem;" >promos*Liste* details* Apprenants </p>
            </div> 
            <div class="interm1" style="position:absolute; top:20%;">
                <p><span style="color: black;">Promotions:</span>Promotion 6</p><p><span style="color: black;">Referenciels:</span> Web/Mobile</p>
            </div>
            <div class="promotions" style="position:absolute; top:29%;">
               
                <span style=" width: 2rem; height: 2rem;border-radius: 100%; background-color: #009088; color: white;text-align: center; position: absolute; left: 5%; top: 6%;" > 1</span>
                <span style=" position: absolute; left: 8%; top: 7%;"><strong>Promotion</strong> </span>
                <span class="ligne"></span>
                <span class="list"><strong>Listes des apprenants</strong></span><span class="list50"><strong>(50)</strong></span>
                <span class="filter" style="position:absolute; top:5rem;">

                    <form action="" method="post">
                    <input type="text" name="filtrer" value="Nom" placeholder="filtrer">
                    </form>
                   
                </span>
                <span class="folder" style=""><img src="../public/IMG/folder.jpeg" alt=""></span> 
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
                                <td>Actions</td>
                            </tr>
                        </thead>
                        <tbody>
                         <?php   

                        include('/var/www/html/Projet/model/listeApp.php');

                        //Définir le nombre d'apprenants à afficher par page
                         $nombreParPage = 5;

                        // // Obtenir la liste complète des apprenants
                         $listeApprenants = listeApprenant();

                        // // Calculer le nombre total d'apprenants
                        $totalApprenants = count($listeApprenants);

                        // // Calculer le nombre total de pages
                         $nombrePages = ceil($totalApprenants / $nombreParPage);

                        // // Déterminer la page actuelle
                         $pageActuelle = isset($_GET['x']) ? $_GET['x'] : 1;

                        // // Calculer l'index de départ pour la pagination
                        $w=$_GET["w"];
                        $indiceDebut = ($w - 1) * $nombreParPage;

                        // // Obtenir les apprenants pour la page actuelle
                         $apprenantsPage = array_slice($listeApprenants, $indiceDebut, $nombreParPage);


                        
                        /* filtre par le Nom */
                   
                        $value=$_POST['filtrer'] ?? 'filtrer';
                   
                         $listeApprenants = listeApprenant();

                        foreach($listeApprenants as $liste):
                       
                        if($liste["Prenom"]==$value){
                        $tab_filtree[]=$liste;
    
                        }
                        endforeach;
                        /* fin filtre */
    
                    // foreach($tab_filtree as $listeEtudiant): ?>

                         <tr>
                           <td><img src="../public/IMG/user.jpeg" alt="user"></td>
                           <td class="np"><?=$listeEtudiant["Nom"]?></td>
                           <td class="np"><?=$listeEtudiant["Prenom"]?></td>
                           <td><?=$listeEtudiant["Email"]?></td>
                           <td><?=$listeEtudiant["Genre"]?></td>
                           <td><?=$listeEtudiant["Téléphone"]?></td>
                           <td><input type="checkbox" style="accent-color: green;"> </td>
                      </tr> 
                       <?php //endforeach;?>
                     
                        <!-- fin filtre par Nom -->
 
                        <!-- ?> --> 

                         <!--  Afficher les liens de pagination -->
                         <span style="position:absolute; top:31rem; left:2rem;">page</span>
                         <div style="position:absolute; top:33rem; left:2rem; border:1px solid;">
                         <?php 
                         for ($i = 1; $i <= $nombrePages; $i++) {
                            echo "<a  style='border:1px solid; font-size:20px;' href='?x=$pageActuelle&w=$i'>$i</a> ";
                       }
                        ?>
                         </div>

                             
                         <?php  // $apprenantsPage=listeApprenant();              
                        foreach($apprenantsPage as $listeEtudiant): ?> 
                              <tr>
                                <td><img src="../public/IMG/user.jpeg" alt="user"></td>
                                <td class="np"><?=$listeEtudiant["Nom"]?></td>
                                <td class="np"><?=$listeEtudiant["Prenom"]?></td>
                                <td><?=$listeEtudiant["Email"]?></td>
                                <td><?=$listeEtudiant["Genre"]?></td>
                                <td><?=$listeEtudiant["Téléphone"]?></td>
                                <td><input type="checkbox" style="accent-color: green;"> </td>
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
               
                <div class="fichierModel">
                    <span>choisir un fichier excel</span>

                    <div style="width: 90%; height: 70%; border: 2px dotted  ; display: flex; justify-content: center; align-items: center;position: absolute; left: 5%;">
                        <input type="text" placeholder="drop files here or click to upload" style="height:20% ;">
                    </div>
                    
                    <span style="position: absolute; top: 75%; left: 70%; display: flex; padding: 1rem;">
                        <button style="background-color: red;  padding: rem; border-radius: 0.5rem;"><label for="popup2">Fermer</label> </button>
                        <button style="background-color: #009088; color: white; padding: 0.5rem; border-radius: 0.5rem;"><label for="popup2">Enregistrer</label> </button>
                    </span>
                </div>
            </div>
        
            <div class="mesboutons" style=" position: absolute;left: 50rem;top: 35%;">
               <button style="background-color: #009088; cursor: pointer;  padding: 0.5rem; border-radius: 0.4rem;"> <Label for="popup" style="color: white;"> + nouveau</Label></button>
                <button style="background-color: #FF8900; padding: 0.5rem; border-radius: 0.4rem;"><label for="popup2" style="color: white;">insertion en masse</label></button>
                <button style="background-color: #0084A6; padding: 0.5rem; border-radius: 0.4rem;"><a href=""><i class="fa fa-download" style="font-size:15px"></i>fichier model</a/button>
                <button style="background-color: #0F46A4; padding: 0.5rem; border-radius: 0.4rem;"><a href="">liste des exclus</a></button>
            </div>  
            
                       
            <div class="footer"> Sontel Academy
                <i class="material-icons" style="font-size:48px;color:white; background-color: rgb(22, 103, 76); border-radius: 100%;
                 position: absolute; left: 97%; top: 2%; font-weight: bold;">settings</i>
            </div>
    </div>
</body>
</html>