<?php
session_start();
if (!isset($_SESSION["utilisateur_id"])) {
    header("Location: connexion.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tableau de Bord</title>
</head>
<body>
    <h2>Bienvenue, <?php echo $_SESSION["utilisateur_nom"]; ?> !</h2>
    <a href="deconnexion.php">Se déconnecter</a>

    <!-- Votre tableau de données utilisateur ici -->
</body>
</html>
