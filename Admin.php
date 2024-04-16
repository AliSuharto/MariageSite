<?php
$password='rueff';
$identifiant='Ali';

 if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputpassword = $_POST['password'];
    $inputidentifiant = $_POST['Identifiant'];
 echo'POST request detected';
if($inputpassword===$password && $inputidentifiant===$identifiant){
    header("Location:Admin.html");
    exit();
}
else{
    header("Location:acceuil.html#login");
}
 }
?>








?>