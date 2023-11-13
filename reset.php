
<style>
body {
  height: 90%;
}

form {
  max-width: 200%;
  max-height: 80lvh;
  padding: 1rem;
  float:center;
  border: 2px solid blue;
  border-radius: 5px;
  position: center;
  margin-left: 40%;
  width: 70%;
  background-color: transparent;
}

fieldset{
  z-index: 2;
}

.form input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.col-md-8 .col-md-offset-2 a:hover{
  color:#4005e0;
}
</style>

<?php
session_start();
require_once('./includes/bd.php');

if (isset($_GET["id"]) && isset($_GET["token"])) {
    $userId = $_GET["id"];
    $token = $_GET["token"];

    $query = "SELECT * FROM users WHERE id = ? AND reset_token = ? AND reset_at > DATE_SUB(NOW(), INTERVAL 5 MINUTE) AND confirmed_at IS NOT NULL";
    $req = $pdo->prepare($query);
    $req->execute([$userId, $token]);

    $user = $req->fetch();

    if ($user) {
        if (!empty($_POST)) {
            if (!empty($_POST["password"]) && $_POST["password"] == $_POST["password_confirm"]) {
                $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
                $query = "UPDATE users SET password = ?, reset_token = NULL, reset_at = NULL WHERE id = ?";
                $pdo->prepare($query)->execute([$password, $userId]);

                $_SESSION["flash"]["success"] = "Votre mot de passe a bien été mis à jour!";
                $_SESSION["auth"] = $user;

                // Renvoie l'utilisateur dans la partie réinitialisation
                header("Location: index.php");
                exit();
            } else {
                $_SESSION["flash"]["danger"] = "Les deux mots de passe ne correspondent pas.";
            }
        }
    } else {
        $_SESSION["flash"]["danger"] = "Ce token n'est plus valide.";
        header("Location: se_connecter.php");
        exit();
    }
} else {
    // Gérer le cas où id et token ne sont pas définis dans l'URL
}
?>

<?php
    require_once('header1.php')
?><br><br><br><br><br><br>

<div class="col-md-8 col-md-offset-2" >
 
  <form action="" method="post">
  <h1 style="color:black;">Rénitiliser votre mot de passe</h1>
    <fieldset>
        
        <div class="form-group">
            <label for="password">Mot de passe </label>
            <input type="password" id="password" class="form-control" name="password">
        </div><br>
        <div class="form-group">
            <label for="password">Confirmation du mot de passe </label>
            <input type="password" id="password" class="form-control" name="password_confirm">
        </div><br>
       
        <input type="submit" style="background-color:blue;" class="btn btn-primary" value="Réinitialiser le mot de passe" >
    </fieldset>

</form>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php  
  require_once 'footer.php'; 
?>