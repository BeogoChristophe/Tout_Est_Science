


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
<br><br><br>

<?php

  
     require_once ('./includes/bd.php');

     require_once ('function.php');

     reconnect_auto();
?>
<?php if(isset($_SESSION['flash'])) : ?>
  <?php foreach($_SESSION['flash'] as $type => $message) : ?>
    <div class="alert alert-<?= $type ?>">
      <?= $message ?>
    </div>
  <?php endforeach; ?>
  <?php unset($_SESSION['flash']); ?>
<?php endif ?>

<?php



     if( !empty($_POST) && !empty($_POST["username"]) && !empty($_POST["email"]) && !empty($_POST["password"])){
        $query = "SELECT * FROM users WHERE username = :username AND email = :email AND confirmed_at IS NOT NULL";
        $req = $pdo->prepare($query);
        $req->execute(["username" =>$_POST["username"] , "email" =>$_POST["email"]]);
        $user = $req->fetch();

        if($user && password_verify($_POST["password"], $user->password)){
            $_SESSION["auth"] = $user;
            $_SESSION["flash"]["success"] = "Connexion effectuée avec succès";
            
           
            if(isset($_POST["remember"])){
               $remember_token = generateToken(100);
               $query = "UPDATE users SET remember_token = ? WHERE id = ?";
               $pdo->prepare($query)->execute([$remember_token,$user->id]);

               setcookie("remember", $user->id . "::".$remember_token. sha1($user->id. "BEOGOCHRISTOPHE"), time()+ 60* 60* 24 *7);

             
            }

            header("location: index.php");
            exit();
        } else {
            $_SESSION["flash"]["danger"] = "Identifiant ou mot de passe incorrect";
            header("locution: ../se_connecter.php");
          
    }   
  }
?>
<?php

if( session_status() == PHP_SESSION_NONE){
    session_start();
}
require_once('header1.php')
?>
<br><br><br><br><br><br>
<div class="col-md-8 col-md-offset-2" >
  <form action="se_connecter.php" method="post">
  <h1 style="color:black">Veuillez vous connecter!</h1><br>
    <fieldset>
        <div class="form-group">
            <label for="speudo">Nom d'utilisateur </label>
            <input type="text" id="speudo" class="form-control" name="username">
        </div><br>
        <div class="form-group">
            <label for="speudo"> Email</label>
            <input type="text" id="speudo" class="form-control" name="email">
        </div><br>
        <div class="form-group">
            <label for="password">Mot de passe <a href="se_souvenir.php">(J'ai oublié mon Mot de passe)</a></label>
            <input type="password" id="password" class="form-control" name="password">
        </div><br>
        <div class="form-group">
            <label for="password"><input type="checkbox" name="remember" value="1" >Se souvenir de moi</label>
            
        </div><br>
        <a>
        <li><a class="btn btn-db-primary " style="color: #fff; background-color:blue;" href="s_enregister.php">S'inscrie</a></li>
        <input type="submit" style="background-color:blue; " class="btn btn-primary" value="Se connecter" >
        <br>
        </a>
        <div class="g-recaptcha" data-sitekey="YOUR_SITE_KEY"></div>
    </fieldset>
<br>
</form>
</div>
<br><br><br><br><br><br>
<?php require_once 'footer.php';?>