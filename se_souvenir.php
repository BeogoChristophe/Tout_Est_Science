<style>
body {
  height: 90%;
}

form {
  max-width: 950px;
  max-height: 120lvh;
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

</style>



<?php  
    require_once ('./includes/bd.php');
    require_once ('function.php');

    if(!empty($_POST) && !empty($_POST["email"])){
        $query =" SELECT * FROM users WHERE email =? AND confirmed_at IS NOT NULL";
        $req = $pdo->prepare($query);
        $req->execute([$_POST["email"]]);

        $user = $req->fetch();

        if($user){
            session_start();
            $reset_token = generateToken(100);
            $query = "UPDATE users SET reset_token = ?, reset_at = NOW() WHERE id = ?";
            $req = $pdo->prepare($query);
            $req->execute([$reset_token, $user->id]);
           
            $mail = $_POST["email"];
            $subject = "Réinitialisation de votre mot de passe";
            $message = "Afin de réinitialiser votre mot de passe, merci de cliquer sur ce lien
                          http://localhost/reset.php?id=$user->id&token=$reset_token";
    
            mail($mail,$subject,$message);

            $_SESSION['flash']['success']="les instruction de rappel de mot de passe vous ont été envoyées par email.";
            header("location: se_connecter.php");
            exit();
        }
         else{
            $_SESSION["flash"]["danger"] = "Aucun compte ne correspond à cet Email.";
            header("location: s_enregister.php");
            exit();
        }
    }
?>

<?php
    require_once 'header1.php';
?><br><br><br><br>
<div class="col-md-8 col-md-offset-2" >
  
  <form action="" method="post">
  <h1 style="color:black">Rappel de mot de passe</h1><br>
    <fieldset>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" class="form-control" name="email">
        </div><br>
        <input type="submit" style="background-color:blue;" class="btn btn-primary" value="soumettre" >
    </fieldset>

</form>
</div>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php  
  require_once 'footer.php'; 
?>
