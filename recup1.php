<?php
 $serveur = "localhost";
 $dbname = "sitemariage";
 $user = "root";
 $pass = "";
    $nameIns=$_POST['nameIns'];
    $surname=$_POST['surname'];
    $number=$_POST['number'];
    $mail=$_POST['mail'];
    $datedemariage=$_POST['datedemariage'];
    $theme=$_POST['theme'];
    $message=$_POST['message'];
 
 try{
     //On se connecte à la BDD
     $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
    }
    catch(PDOException $e){
        echo 'Erreur : '.$e->getMessage();
    }
    $sqlQuery = 'SELECT Prenom FROM profil ORDER BY id DESC LIMIT 1';
    $affiche = $dbco->prepare($sqlQuery);
    $affiche->execute();
    $show = $affiche->fetch();
    ?>
    <p> <?php echo $show['Nom']; ?> </p>