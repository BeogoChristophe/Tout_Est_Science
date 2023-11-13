

<?php


    require_once ('./includes/bd.php');
    require_once ('function.php');
     if(!empty($_POST)) {

        $_errors = [];
        //pseudo
        if (empty($_POST['username'])|| !preg_match("#^[a-zA-Z0-9_]+$#", $_POST['username'])) {
            $erros['$username'] = "Votre speudo n'est pas valide!";
            var_dump($erros['$username']);
        }else{
            // select * from users where username = post
            $query = "SELECT * FROM users WHERE users=?";
            $req = $pdo->prepare($query);
            $req->execute([$_POST['username']]);
            if($req->fetch()) {
                $erros['username'] = "Ce speudo n'est plus disponibe";
            }
        }
        // email
        if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $erros['email'] = "Votre email n'est pas valide";
            var_dump($erros['email']);
        }else {
            // select * from users where email = post
            $query = "SELECT * FROM users WHERE email=?";
            $req = $pdo->prepare($query);
            $req->execute([$_POST['email']]);
            if($req->fetch()) {
                $erros['email'] = "Ce email est déjà pris!";
            }
        }

        // password
        if (empty($_POST['password']) || $_POST['password'] !== $_POST['password_confirm']){
            $erros['$password'] = "Vous devez rentrez un mot de passe valide et confirmé";
            
        } 

        if(empty($erros)) {
            $qery = "INSERT INTO users(username,email,password,confirmation_token) VALUES(?,?,?,?)";
            $req = $pdo->prepare($query);
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

           
        


            $token = generateToken(100);
            
            $req->execute([$_POST['username'], $_POST['email'], $password,$token]);
            $userId = $pdo->lastInsertId();
            var_dump($userId);
            die();


        }
    }


    require_once 'header.php';
?>



<div class="col-md-8 col-md-offset-2">
<h1 style="color:#fff">S'inscrire</h1>
<form action="" method="post">
    <fieldset>
        <div class="form-group">
            <label for="speudo">Nom d'utilisateur</label>
            <input type="text" id="speudo" class="form-control" name="username">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" id="password" class="form-control" name="password">
        </div>
        <div class="form-group">
            <label for="password">Confirmation de Mot de passe</label>
            <input type="password" id="passsword" class="form-control" name="password_confirm">
        </div>
        <input type="submit" class="btn btn-primary" value="S'inscrire" >
    </fieldset>

</form>
</div>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php  
  require_once 'footer.php'; 
?>