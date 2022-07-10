<?php
session_start();
if(isset($_POST['valider'])){
    if((!empty($_POST['pseudo'])) and !empty($_POST['mdp'])){
    $pseudo_par_defaut = "admin";
    $mdp_par_defaut="admin258";

    $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
    $mdp_saisi = htmlspecialchars($_POST["mdp"]);

    if ( $pseudo_saisi == $pseudo_par_defaut AND $mdp_saisi == $mdp_par_defaut) {
        $_SESSION['mdp'] = $mdp_saisi;
        header('Location: index.php');
    }else 
    {
        echo "mot de passe ou pseudo incorrect";
    }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Connexion admin 6ril</title>
    <meta charset="utf-8">
</head>
<body>
    <form method="POST" action="" style="text-align: center;">
        <input type="text" name="pseudo" autocomplete="off" required="required" pattern="([A-Za-z0-9]){3,15}">
        <br>
        <input type="password" name="mdp"  required="required" pattern="([A-Za-z0-9]){3,15}">
        <br>
        <br>
        <input type="submit" name="valider">
    </form>
</body>
</html>