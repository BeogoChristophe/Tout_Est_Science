<?php 
    session_start();
    setcookie("remeber", "", -1);
    unset($_SESSION["auth"]);
    $_SESSION["flash"]["success"] = "Déconnection avec succès!";

    header("location: se_connecter.php");
?>