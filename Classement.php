<?php
  session_start();

  include 'OrdonnanceClassement/GroupeA.php';
  include 'OrdonnanceClassement/GroupeB.php';




  function option()
  {
      echo '
           <option value="0">0</option>
           <option value="1">1</option>
           <option value="2">2</option>
           <option value="3">3</option> 
           <option value="4">4</option>
           <option value="5">5</option>
           <option value="6">6</option>
           <option value="7">7</option>
           <option value="8">8</option>
      
      ';
       
  }

  if(isset($_POST['demiPlay'])){
    $_SESSION['demi1']= $_POST['indiceDemi1'];
    $_SESSION['demi2']= $_POST['indiceDemi2'];
    $_SESSION['statutmatch12']=true;
    
    
    }


  
  if(isset($_POST['demiPlay2'])){
    $_SESSION['demi3']= $_POST['indiceDemi3'];
    $_SESSION['demi4']= $_POST['indiceDemi4'];
    $_SESSION['statutmatch13']=true;

    } 


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Document</title>
</head>
<body>

       <!-- menu -->
       <header id="pri">
            
            <h1 class="logo">  Tournoi_2.0 </h1>
        
         <label class="hamburger" for="toggler">&#9776;</label>
         <input id="toggler" type="checkbox">
      
        <nav class="navbar">
            <ul>
                <li><a href="index.html" >Home</a></li>
                <li><a href="tirage.php">Tirage</a></li>
                <li><a href="Confrontation.php">Confrontation</a></li>
                <li><a href="Classement.php">Classement</a></li>
            </ul>
        </nav>
      </header>


      <div class="milieu1">

  <div class="grp">
       <div >

       <a class="champs" href="Confrontation.php">Precedent</a>
            <table class="tableau-style">
                <thead>
                    
                    <tr>
                        <th colspan="9">Groupe A</th>
                    </tr>

                    <tr>
                        <th></th>
                        <th>MJ</th>
                        <th>MG</th>
                        <th>MN</th>
                        <th>MP</th>
                        <th>BP</th>
                        <th>BC</th>
                        <th>DIF</th>
                        <th>POINT</th>
                    </tr>

                </thead>
                <tbody>
                     <?= ClassementA(); ?>
                </tbody>
              
                   
            </table>
        </div>
    

        <div class="groupeB">
            <table class="tableau-style">
                <thead>
                    <tr>
                        <th colspan="9">Groupe B</th>
                    </tr>
                    <tr>
                        <th></th>
                        <th>MJ</th>
                        <th>MG</th>
                        <th>MN</th>
                        <th>MP</th>
                        <th>BP</th>
                        <th>BC</th>
                        <th>DIF</th>
                        <th>POINT</th>
                    </tr>
                        <tbody>
                   <?= ClassementB(); ?>

                       </tbody>
                </thead>
            </table>
        </div>


         <!-- Demi final -->

        <div class="tableauBut">
            <table class="tableau-style">
                <thead>
                    <tr>
                        <th>Demi-final</th>
                        <th>Affiche</th>
                        <th>Score</th>
                        <th>Jouer</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Match 13</td>
                        <form action="" method="POST">
                        <td> <?php  echo $_SESSION['GroupeA'][0]['nom']. " VS " . $_SESSION['GroupeB'][1]['nom'] ?></td>
                        <td>    <?php if ($_SESSION['statutmatch12']==false) {  ?>
                                <select name="indiceDemi1" id="" >
                                <?php option(); ?>
                                </select>
                                <?php  } else {
                                           echo  $_SESSION['demi1'] ." VS ". $_SESSION['demi2'];
                                    
                                }?>

                                <?php if ($_SESSION['statutmatch12']==false) {  ?>
                                VS 
                                <select name="indiceDemi2" id="" >
                                <?php option(); ?>
                                </select>
                                 <?php  } ?>
                                </td>
                                <td><input type="submit" name="demiPlay" value="Play" <?php if($_SESSION['statutmatch12']) { ?> 
                                                    disabled <?php } ?>></td>
                              

                              
                    </tr>

                    <?php 
       
                if($_SESSION['statutmatch12']){
                    if( $_SESSION['demi1']>$_SESSION['demi2'] ){
                        $_SESSION['GRQlf1']=$_SESSION['GroupeA'][0]['nom'];
                        $_SESSION['ptit1']=$_SESSION['GroupeB'][1]['nom'];
                    }
                    elseif( $_SESSION['demi1']<$_SESSION['demi2']){
                        $_SESSION['GRQlf1']=$_SESSION['GroupeB'][1]['nom'];
                        $_SESSION['ptit1']=$_SESSION['GroupeA'][0]['nom'];

                    }
                    else{
                        $jouerNew=rand(0,1);

                        if($jouernew==0){
                            $_SESSION['GRQlf1']=$_SESSION['GroupeA'][0]['nom'];
                            $_SESSION['ptit1']=$_SESSION['GroupeB'][1]['nom'];

                        }else{
                            $_SESSION['GRQlf']=$_SESSION['GroupeB'][1]['nom'];
                            $_SESSION['ptit1']=$_SESSION['GroupeA'][0]['nom'];
                        }

                    } 
                }
                        ?>

                       

                    <tr>
                        <td>Match 14</td>
                        <td> <?php  echo $_SESSION['GroupeB'][0]['nom']. " VS ". $_SESSION['GroupeA'][1]['nom'] ?></td>
                        <td>
                              <?php  if($_SESSION['statutmatch13']==false) { ?>
                                <select name="indiceDemi3" id="" >
                                    <?php option(); ?>
                                </select> 
                                <?php } else{
                                  echo $_SESSION['demi3'] ." VS ". $_SESSION['demi4'];
                                }
                                ?> 
                                <?php  if($_SESSION['statutmatch13']==false) { ?>
                               VS
                                <select name="indiceDemi4" id="" >
                                <?php option(); ?>
                                </select> 
                                <?php  } ?>
                                <td><input type="submit" name="demiPlay2" value="Play" <?php if($_SESSION['statutmatch13']) { ?> 
                                                    disabled <?php } ?>></td>


                    </tr>


                 <?php
                 if($_SESSION['statutmatch13']){
                    if( $_SESSION['demi3']>$_SESSION['demi4'] ){
                    $_SESSION['GRQlf2']=$_SESSION['GroupeB'][0]['nom'];
                    $_SESSION['ptit2']=$_SESSION['GroupeA'][1]['nom'];
                    }
                    elseif( $_SESSION['demi3']<$_SESSION['demi4']){
                    $_SESSION['GRQlf2']=$_SESSION['GroupeA'][1]['nom'];
                    $_SESSION['ptit2']=$_SESSION['GroupeB'][0]['nom'];
                    
                    
                    }
                    else{
                    $jouerNew1=rand(0,1);
                    
                    if($jouernew1==0){
                        $_SESSION['ptit2']=$_SESSION['GroupeA'][1]['nom'];
                        $_SESSION['GRQlf2']=$_SESSION['GroupeB'][0]['nom'];
                        
                    }else{
                        $_SESSION['GRQlf2']=$_SESSION['GroupeA'][1]['nom'];
                    $_SESSION['ptit2']=$_SESSION['GroupeB'][0]['nom'];
                    }
                    
                    }
                    
                    }
                 
                    ?>

                </tbody>
                </form>
            </table>

           
        </div>
        <div class="envoie3">
        <a  class="champs"  href="PetiteFinal.php">Petite Final</a>

        </div>

    

        </div>
 </div>
      

      
    
</body>
</html>