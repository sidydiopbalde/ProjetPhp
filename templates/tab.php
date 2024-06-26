<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste de presence</title>  
    <link rel="stylesheet" href="../public/CSS/tab.css">
    <link rel="stylesheet" href="../public/CSS/listePresence.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .ref5{
        height:20rem;
    }
  </style>
</head>
<body>
    <div class="conteneur">
    <input type="checkbox" name="" id="bouton">
      
            <div class="interm">
                <p>Presence</p><p style="font-size: 0.8rem;" >presence * liste </p>
            </div>        
            <div class="promotions">             
                <div>
                <table> 
                <thead>
                    <th>Matricule</th> 
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Téléphone</th> 
                    <th>Referentiel</th> 
                    <th>Heure d'arrivée</th>
                    <th>Status</th>
                    <th>Date</th>
                 </thead> 
                 <tbody>
                 <?php                  
                    $w=$_GET["w"];
                    include ('/var/www/html/Projet/model/listeApp.php');
                    include ('/var/www/html/Projet/model/listeSelectReferentiel.php');
                  
                    if($_GET["x"] == 2)
                    {
                        $valeur = $_POST['status'] ?? 'status' ;
                        $referentiel = $_POST['referentiel'] ?? 'referentiel'; 
                        
                        $date_select = isset($_POST['date1']) ? $_POST['date1'] : date('Y-m-d');

                       /*  $reset=$_POST['reset']; */

                        $nombrePage=10;
                        $debut=($w-1)*$nombrePage;
                        $id_prom=$_SESSION['id'];

                        //récupérer la liste compléte des apprenants
                        $val=remplist($id_prom);
                        
                        
                        // $TabEtudiant=array_slice(filtrerPresence1($valeur,$referentiel),$debut,$nombrePage);  
                        $val=array_slice(filtrerPresence1($valeur,$referentiel,$id_prom),$debut,$nombrePage);   
                        
                    } 
                                 //====================afficher les presences de l'apprenant connecté===========================
                    if($_SESSION['user']['statut']=='student'){

                        $val=list_presence_connecte($_SESSION['user']['id'], $_SESSION['user']['matricule']);
                        
                        if(isset($_POST['status']))
                        {      
                            $valeur=$_POST['status'];                
                                if($valeur=='status'){
                                    $val=list_presence_connecte($_SESSION['user']['id'], $_SESSION['user']['matricule']);
                                  }
                                    else{   
                                        $listeFiltree = array_filter($val, function ($apprenant) use ($valeur) {
                                            
                                            return $apprenant['statut'] == $valeur;
                                            
                                        });
                                        
                                        $val = array_values($listeFiltree); // Réindexer le tableau filtré
                                        
                                    }   
                         }  

                         if(isset($_POST['date1']))
                         {
                            $value_date=$_POST['date1'];

                                if(!empty($_POST['date1']))
                                {   
                                    $listeFiltree = array_filter($val, function ($apprenant) use ($value_date) {
                                        
                                        return $apprenant['date'] == $value_date;
                                        
                                    });
                                    
                                    $val = array_values($listeFiltree); // Réindexer le tableau filtré
                                    
                                }    
                        } 

                    }

                                //===============si l'admin se connecte ,la liste compléte des présences des apprenants lors===============

                    if($_SESSION['user']['statut']=='administrateur')
                    {
                    // recherchre sur la barre de recherche globale
                    if(isset($_POST['search'])){
                        $search=$_POST['search'];
                       
                        $referentiel = $_POST['referentiel'];
                      
                        
                    }

                    if (!empty($search)) 
                    {
                        $val=array_slice(filtrerPresence1($search,$referentiel,$id_prom),$debut,$nombrePage); 
                    }

                    if(isset($_POST['status']))
                    {            
                        $valeur=$_POST['status'];           
                        if($valeur=='status'){

                            $val=remplist($id_prom);
                            $val=array_slice($val,$debut,$nombrePage);
                           /*  $val = array_values($val); */
                        }
                        else{
                            $val=remplist($id_prom);   
                            $listeFiltree = array_filter($val, function ($apprenant) use ($valeur) {
                                
                                
                                return $apprenant['statut'] == $valeur;
                                        
                                    });
                                    $val = array_values($listeFiltree); // Réindexer le tableau filtré
                                    
                                }   
                     }  

                     if(isset($_POST['referentiel']))
                     {            
                         $valeur1=$_POST['referentiel'];           
                         if($valeur1=='referentiel'){
                             $val=remplist($id_prom);
                             $val=array_slice($val,$debut,$nombrePage);
                         }
                         else{
                            /*  $val=remplist($id_prom); */   
                             $listeFiltree = array_filter($val, function ($apprenant) use ($valeur1) {
                                
                                 return $apprenant['Referentiel'] == $valeur1;
                                         
                                     });
                                     $val = array_values($listeFiltree); // Réindexer le tableau filtré
                                 }   
                      } 

                      if(isset($_POST['date1']))
                      {
                         $value_date=$_POST['date1'];

                             if(!empty($_POST['date1']))
                             {   
                                 $listeFiltree = array_filter($val, function ($apprenant) use ($value_date) {
                                     
                                     return $apprenant['date'] == $value_date;
                                     
                                 });
                                 
                                 $val = array_values($listeFiltree); // Réindexer le tableau filtré
                                 
                             }    
                     } 
                    }
            ?>
         
                            <?php foreach($val as $Etudiants):  ?>
                                <tr>
                            <td><?= $Etudiants["Matricule"] ?> </td>                            
                            <td>
                               <?= $Etudiants["Nom"] ?></td>
                            <td>                                
                                <div><?= $Etudiants["Prenom"] ?></div>
                            </td>
                            <td>
                                
                                <div> <?= $Etudiants["Telephone"] ?>
                                </div>
                            </td>
                            <td>
                              
                                <div><?= $Etudiants["Referentiel"] ?></div>
                            </td>
                            <td>
                               
                                <div><?= $Etudiants["Heure"] ?></div>
                            </td>
                            <td style=" background-color: #F7FAFF; border-radius:0.5rem">
                            <div><?= $Etudiants["statut"] ?></div> 
                             </td>
                            
                                <td><?=$Etudiants["date"]?></td>
                             
                         </tr>
                     <?php endforeach; ?>
                 </tbody>
                 </table>
            </div>
 <div style="position:absolute;width:10% ; left:70rem; bottom:2rem;">
    <?php 
    $longueurTab = count($val); 
     //récupérer le nombre d'éléments du tableau
  
    $page = ceil($longueurTab/$nombrePage); 
    
     //récupérer le nombre de pages de 10
    $currentPage = isset($_GET['x']) ? $_GET['x'] :1; // récupérer la page actuelle
   
     if ($currentPage > 1)  // Afficher le bouton "Précédent" s'il y a une page précédente
    {
         echo '<a style="color:black;" href="?x=2&w=' . ($currentPage - 1) . '"><i class="fa fa-angle-left" style="font-size:15px"></i></a>';
    }

    for ($i = 1; $i <= $page; $i++) 
    {
        // Afficher le numéro de la page
        echo '<a style="color:black; padding:0.5rem;" href="?x=2&w=' . $i . '">' . $i . '</a>';
    }

     //Afficher le bouton "Suivant" s'il y a une page suivante
     if ($currentPage < $page) {
         echo '<a style="color:black;" href="?x=2&w=' . ($currentPage + 1) . '"> <i class="fa fa-angle-right" style="font-size:15px"></i> </a>';
     }
    ?>
    </div>
 
    <div style="position:absolute; top:-1rem;display:flex; align-items:center;flex-direction:raw;width: 100%;height: 20%;">

    <?php   $selectreferentiel=adapterSelectReferentiel($id_prom);?>

        <form action="" method="post" style="display:flex; gap:1rem;">

                <input type="hidden" name="x" value="2">

                    <select name="status" id="selection1" style="width:10rem; height:2rem;border-radius: 0.4rem ;background:white;">
                    <!-- pour que la selection reste -->
                        <option <?php if(isset($_POST['status']) && $_POST['status']=='status') echo 'selected'?> value="status">status</option>
                        <option <?php if(isset($_POST['status']) && $_POST['status']=='PRESENT') echo 'selected'?> value="PRESENT">PRESENT</option>
                        <option <?php if(isset($_POST['status']) && $_POST['status']=='ABSENT') echo 'selected'?> value="ABSENT">ABSENT</option>

                    </select>

                <input type="hidden" name="x" value="2">
                <!-- afficher le référentiel de l'apprenant connecté -->
                <?php if($_SESSION['user']['statut']=='student'):?>

                    <select name="" id="selection2" style="border-radius: 0.4rem ;background:white;">
                    <option value=""><?php echo $_SESSION['user']['referentiel']?></option>
                    </select>

                <?php endif?>
                
                    <!-- afficher tous les referentiels si l'admin est connecté -->
                <?php if($_SESSION['user']['statut']=='administrateur'):?>

                <select name="referentiel" id="selection2" style="border-radius: 0.4rem ;background:white;">

                    <option value="referentiel" <?php if(isset($_POST['referentiel']) && $_POST['referentiel']=='referentiel') echo 'selected'?>>référentiel</option>

                         <?php foreach($selectreferentiel as $refe):?>
                            <option <?php if(isset($_POST['referentiel']) && $_POST['referentiel']==$refe['libelleref']) echo 'selected'?>
                                  value="<?=$refe['libelleref']?>"> <?=$refe['libelleref']?>  </option>

                         <?php endforeach?>
                </select>

                <?php endif?>
                <?php if($_SESSION['user']['statut']=='student'):?>
                <input type="date" name="date1" style="border-radius: 0.4rem" value="">
                <?php endif?>

                    <?php $dateChoisie= isset($_POST['date1']) ? $_POST['date1']:date('Y-m-d');?>
                <?php if($_SESSION['user']['statut']=='administrateur'):?>
                <input type="date" name="date1" style="border-radius: 0.4rem" value="<?php echo $dateChoisie;?>">
                <?php endif?>

                <button type="submit" name="" style="background-color:#009088;width:10rem; color:white;border-radius: 0.4rem ;">Rafraichir</button>
            <!-- <button type="reset"  name="reset" value="reset">Reset</button> -->
        </form>
                
            </div>  
     <span style="position:absolute;bottom:2rem; left:2rem;">
     <span>item per page</span> 
        <span>
            <select name="paginer" id="">
                <option value="" onchange='this.form.submit()'>10</option>
                <option value="" onchange='this.form.submit()'>20</option>
            </select>
        </span>   
     </span>       
        <span style="position:absolute;bottom:2rem; left:60rem;">
        1 of 2
    </span>
    <i class="material-icons" style="font-size:48px;color:white; background-color: rgb(22, 103, 76); border-radius: 100%; position: absolute; left: 97%; top: 35rem; font-weight: bold;">settings</i>
            </div>
            
    </div>

</body>
</html>
 