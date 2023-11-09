<?php
include("connexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $mot_de_passe = $_POST["mot_de_passe"];

    // Vérifier les informations de connexion
    $requete = "SELECT id, nom, mot_de_passe FROM utilisateurs WHERE email = ?";
    $statement = $connexion->prepare($requete);
    $statement->bind_param("s", $email);
    $statement->execute();
    $resultat = $statement->get_result();
    $utilisateur = $resultat->fetch_assoc();

    if ($utilisateur && password_verify($mot_de_passe, $utilisateur["mot_de_passe"])) {
        // Connecté avec succès, enregistrez l'utilisateur dans la session
        $_SESSION["utilisateur_id"] = $utilisateur["id"];
        $_SESSION["utilisateur_nom"] = $utilisateur["nom"];
        header("Location: tableau_de_bord.php");
    } else {
        echo "Identifiants incorrects.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
</head>
<body>
    <h2>Connexion</h2>
    <form method="post" action="">
        <input type="email" name="email" placeholder="Adresse e-mail" required><br>
        <input type="password" name="mot_de_passe" placeholder="Mot de passe" required><br>
        <button type="submit">Se connecter</button>
    </form>
</body>
</html>