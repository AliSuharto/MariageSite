<?php
// Configuration de la base de données
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

try {
    // Connexion à la base de données avec PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    // Requête pour récupérer les données de la table "Profil"
    $sql = "SELECT * FROM profil";
    $stmt = $pdo->query($sql);
   
    // Afficher les données sur la page d'administration
    echo "<h1>[Profil Clients</h1>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nom</th><th>Prenom</th><th>Telephone</th><th>Mail</th><th>Date</th><th>Theme</th><th>Message</th></tr>";
   
    // Parcourir les résultats de la requête
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['id']) . "</td>";
        echo "<td>" . htmlspecialchars($row['nameIns']) . "</td>";
        echo "<td>" . htmlspecialchars($row['surname']) . "</td>";
        echo "<td>" . htmlspecialchars($row['number']) . "</td>";
        echo "<td>" . htmlspecialchars($row['mail']) . "</td>";
        echo "<td>" . htmlspecialchars($row['datedemariage']) . "</td>";
        echo "<td>" . htmlspecialchars($row['theme']) . "</td>";
        echo "<td>" . htmlspecialchars($row['message']) . "</td>";
        echo "</table>";
}
    // Fermer la connexion à la base de données
    $pdo = null;
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>