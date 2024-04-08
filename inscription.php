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
     $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sth = $dbco->prepare("

     INSERT INTO profil (Nom, Prenom, mail, Date, Msg, Theme) 
     VALUES(:Nom, :Prenom, :mail, :Date, :Msg, :Theme)");

        $sth->bindParam(':Nom',$nameIns);
        $sth->bindParam(':Prenom',$surname);
        $sth->bindParam(':mail',$mail);
        $sth->bindParam(':Date',$datedemariage);
        $sth->bindParam(':Msg',$message);
        $sth->bindParam(':Theme',$theme);
        $sth->execute();  

        
        
        //On renvoie l'utilisateur vers la page de remerciement
        header("Location:recup.php");
    
    }
    catch(PDOException $e){
        echo 'Erreur : '.$e->getMessage();
    }
?>