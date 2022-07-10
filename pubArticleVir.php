<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=Virg_bdd;','root','');
if(!$_SESSION['mdp']){
    header('Location: connexion.php');
}

if(isset($_POST['envoi'])){
    if(!empty($_POST['titre']) AND !empty($_POST['texte'])){
        //recuperation des elements dans la bdd
        $titre = htmlspecialchars($_POST['titre']);
        //consideration des sauts de lignes dirctement avec nl2br: 
        $texte = nl2br(htmlspecialchars($_POST['texte']));

        $date = htmlspecialchars($_POST['date']);

        $insererArticle = $bdd->prepare('INSERT INTO actu(titre, texte, date) VALUES (?, ?, ?)');
        $insererArticle->execute(array($titre, $texte, $date,));

        
        echo"Recette bien envoyer !";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Publication de recettes</title>
    <meta charset="utf-8">
</head>
<body>
<form method="POST" action="">
    ・Titre : <br>
    <input type="titre" name="titre" required="required" pattern="([A-Za-z0-9]){3,100}">
    <br>
    ・Texte : <br>
    <textarea name="texte" required="required"  pattern="([A-Za-z0-9]){3,10000}"></textarea>
    <br>
    ・Date : <br>
    <input type="date" name="date"required="required" pattern="([A-Za-z0-9]){3,10000}"></textarea>
    <br>
    <br>

     <!-- 
    Groupe cuisine : <br>
    <input type="text" name="groupe_cuisine" required="required"></textarea>
    <br>

     Image 1 : <br>
    <input type="text" name="lienImage"></textarea>
    <br> Image 2 : <br>
    <input type="text" name="lienImage2"></textarea>
    <br> Image 3 : <br>
    <input type="text" name="lienImage3"></textarea>
    <br> -->
    <input type="submit" name="envoi">
</form>

</body>
</html>