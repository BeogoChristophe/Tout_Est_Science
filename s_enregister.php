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
    // Démarre la session si elle n'existe pas
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Connecte-toi à la base de données
    require_once('./includes/bd.php');

    // Charge les fonctions utiles
    require_once('function.php');

    // Si le formulaire est soumis
    if (!empty($_POST)) {

        // Initialisation des erreurs
        $errors = [];

        // Pseudo
        if (empty($_POST['username']) || !preg_match("#^[a-zA-Z0-9_]+$#", $_POST['username'])) {
            $errors['username'] = "Votre pseudo n'est pas valide !";
        } else {
            // Vérifie si le pseudo existe déjà dans la base de données
            $query = "SELECT * FROM users WHERE username = ?";
            $req = $pdo->prepare($query);
            $req->execute([$_POST['username']]);
            if ($req->fetch()) {
                $errors['username'] = "Ce pseudo n'est plus disponible !";
            }
        }

        // Email
        if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Votre email n'est pas valide !";
        } else {
            // Vérifie si l'email existe déjà dans la base de données
            $query = "SELECT * FROM users WHERE email = ?";
            $req = $pdo->prepare($query);
            $req->execute([$_POST['email']]);
            if ($req->fetch()) {
                $errors['email'] = "Cet email est déjà pris !";
            }
        }

        // Mot de passe
        if (empty($_POST['password']) || $_POST['password'] !== $_POST['password_confirm']) {
            $errors['password'] = "Vous devez entrer un mot de passe valide et confirmé !";
        }

      
        
        // ...
        // Si aucune erreur n'est rencontrée, on enregistre l'utilisateur dans la base de données
        if (empty($errors)) {
            // ...

            // Enregistrement des champs de profile
            $query = "INSERT INTO users (username, email, password, confirmation_token) VALUES (?, ?, ?, ?)";
            $req = $pdo->prepare($query);
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $token = generateToken(100);
            $req->execute([$_POST['username'], $_POST['email'], $password, $token]);


            // Récupération de l'identifiant de l'utilisateur
            $userId = $pdo->lastInsertId();

            // Envoi d'un email de confirmation
            $mail = $_POST['email'];
            $subject = "Confirmation du compte";
            $message = "afin de confirmer votre compte, merci de cliquer sur ce lien\n\n
                http://localhost/confirm.php?id=$userId&token=$token";

            mail($mail, $subject, $message);

            // Ajout d'un message flash à la session
            $_SESSION['flash']['success'] = "Compte créé avec succès. Veillez vérifier votre boîte mail afin de confirmer la création de votre compte Tout_Est_Science !";

            // Redirection vers la page de connexion
            header("location: se_connecter.php");
            exit();
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
<form action="" method="post">
<h1 style="color:black; ">Veuillez vous inscrire!</h1><br>
    <fieldset>
        <div class="form-group">
            <label for="speudo">Nom d'utilisateur</label>
            <input type="text" id="speudo" class="form-control" name="username">
        </div><br>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" class="form-control" name="email">
        </div><br>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" id="password" class="form-control" name="password">
        </div><br>
        <div class="form-group">
            <label for="password">Confirmation de Mot de passe</label>
            <input type="password" id="passsword" class="form-control" name="password_confirm">
        </div><br>

        <input type="submit" style="background-color:blue;" class="btn btn-primary" value="S'inscrire" >
        <li><a class="btn btn-db-primary " style="color: #fff; background-color:blue;" href="se_connecter.php">Se connecter</a></li><br>
        <div class="g-recaptcha" data-sitekey="YOUR_SITE_KEY"></div>
    </fieldset>

</form>
</div>

<style>
    .form{
   background-color:blue;
    border:5px solide blue;
 }
</style>

<br><br><br><br><br><br>
<?php  
  require_once 'footer.php'; 
?>