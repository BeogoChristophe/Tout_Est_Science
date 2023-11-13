<br><br>
<?php
       
    require_once('function.php');
       
    require_once ('./includes/bd.php');

if (isset($_GET["id"]) && isset($_GET["token"])) {
    $userId = $_GET["id"];
    $token = $_GET["token"];


    $query = "SELECT * FROM users WHERE id =?";
    $req = $pdo->prepare($query);
    $req->execute(["$userId"]);
    $user = $req->fetch();

    if($user && $token == $user->confirmation_token){
       $query="UPDATE users SET confirmation_token = NULL,confirmed_at=NOW() WHERE id =?";
        $req = $pdo->prepare($query);
        $req->execute(["$userId"]);
        $_SESSION["flash"]["success"]="Votre compte a été validé";
        $_SESSION["auth"] = $user;
        
        require_once('header1.php');
        header("location: Acceuil.php");
    }else{
        $_SESSION["flash"]["danger"]="ce compte n'existe pas";
        header("location: s_enregister.php");
    }
}
?><br><br><br><br><br><br><br><br><br>

<?php 

require_once('footer.php'); 
?>