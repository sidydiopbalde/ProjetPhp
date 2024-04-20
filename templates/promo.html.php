<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/CSS/page3 copy.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Page 3</title>
</head>
<body>
<?php 
                        //sauvegarder dans la session la valeur recupéree dans la request du chekbox  
                            
                            if(empty($_SESSION['id'])){
                                $_SESSION['id']=6;
                            }
                            else{
                                $id_promo=$_POST['chek'];
                                $_SESSION['id']=$id_promo ??  $_SESSION['id'] ?? 6; 
                            }
                           
                           ?>
    <div class="conteneur">
        <input type="checkbox" name="" id="bouton">
        
        <div class="content">
           
               
            </div>
            <div class="interm">
                <p>Promotions</p><p style="font-size: 0.8rem;" >promos*listes</p>
            </div> 
            <div class="promotions" style="height: 60%;">
               
                 <div class="selection">
                   <span class="c1">
                    <span>liste des Promotions</span>
                   <span style="color: #009088;">(6)</span>
                   </span>
                   <span class="c2">
                    <span><input class="rech" type="text" placeholder="Rechercher ici" style="padding: 0.5rem; background-color: #F7FAFF;"></span>
                    <span><button style="background-color: #009088; border-radius: 0.4rem; padding: 0.5rem;" ><a style="color: white;" href="?x=10">+ Nouvelle</a></button></span>
                   </span>
                   <div>
                    <?php include '/var/www/html/Projet/model/listepromotion.php' ?>
                   
                    <table class="montab">
                        <thead>
                            <th>Libelle</th>
                            <th>Date Début</th>
                            <th> Date Fin</th>
                            <th> Etat</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <?php $listepromo=lister_promotion();
                           // var_dump($listepromo);
                            //die();?>
                           <?php foreach($listepromo as $tableau):?>
                       
                            <tr>
                                <td style="color: #177e79d2; font-size:30px;" > <?=$tableau['libelle']?></td>
                                <td style="font-size:30px;"><?=$tableau['date_deb']?></td>
                                <td style="font-size:30px;"><?=$tableau['date_fin']?></td> 

                                <td style="font-size:30px;">
                                
                                <?php if($_SESSION['id']==$tableau['id'])
                                {echo '<font color="green"> on </font>';}else{ echo '<font color="red"> off </font>';}?>
                                </td>                           
                                <td> 
                                    <form action="" method="post">
                                 
                                        <input type="checkbox"  <?php if($_SESSION['id']== $tableau['id']){echo'checked';}?>   value="<?= $tableau['id']?>">
                                         <input type="submit" name="chek" value="<?= $tableau['id']?>" style="background:transparent; position:absolute; left:78rem; border:none;cursor:pointer;font-size:30px;color:transparent">

                                    </form>

                                </td> 
                                  <span classe="diplay:flex; flex-direction:column;"></span>  
                                  <!--   <td style="font-size:30px;"><input type="text" name="chek" id="" value=""></td>   -->
                                
                                
                            </tr>
                            <?php endforeach ?>
                         
                        </tbody>
                    </table>
                   </div>
                 <!--   <span class="items">
                    <span>item per page</span>
                   <span><select name="" id="">
                    <option value="">10</option>
                    <option value="">20</option>
                   </select></span>
                   </span>
                   <span style="position: absolute;left: 55rem; top: 2rem;">1-1 of 1</span> -->
                  
                 </div>
                <!--  <span class="signe" style="position: absolute; left: 70rem; top: 12rem;">
                    <span><i class="fa fa-angle-left" style="font-size:15px"></i></span>
                    <span><i class="fa fa-angle-left" style="font-size:15px"></i></span>
                    <span><i class="fa fa-angle-right" style="font-size:15px"></i></span>
                    <span><i class="fa fa-angle-right" style="font-size:15px"></i></span>
                 </span> -->
                
            </div>
            
    </div>

    </div>
</body>
</html>

<?=$tableau['statut']=="on" ? "checked":"" ?>



