<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=Virg_bdd;','root','');
?>
<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <title>・ Actualités</title>
        <link rel="stylesheet" href="./style.css">
        <link rel="shortcut icon" type="image/x-icon" href="logo.png" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Finlandica:wght@500&display=swap" rel="stylesheet"> 
      
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
      
            #  Developed and designed by   : 𝑯𝒊𝒅.𝒆𝒙𝒆#1440
                   _           _          
                  | |   (_)   | |               
                  | |__  _  __| |  _____  _____ 
                  | '_ \| |/ _` | / _ \ \/ / _ \
                  | | | | | (_| ||  __/>  <  __/
                  |_| |_|_|\__,_(_)___/_/\_\___|
                                                
            #  Me retrouver     : https://discord.gg/3rBYhjVByt  
      
            ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Last Update:  10-07-2022 14:26~~-->
      </head>


    <header>
        <nav>
            <a href="./index.html">Accueil</a>
            <a href="./actu.php">Actualités</a>
        </nav>
    </header>
    <body>
        <div class="title">Actualités</div>
        <?php $recArt = $bdd->query('SELECT * FROM actu');
  
        while($art = $recArt->fetch()){
        
            echo $art['titre'];
            
            echo $art['texte'];
            echo $art['date'];
        }


  ?>

    </body>

    