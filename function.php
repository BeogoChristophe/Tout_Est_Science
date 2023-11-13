<?php
    function generateToken($length){
        $alphaNum = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
            
            return substr(str_shuffle(str_repeat($alphaNum,$length)),0,$length);
           
    }

    function generateTokenForum($length){
        $alphaNum = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
            
            return substr(str_shuffle(str_repeat($alphaNum,$length)),0,$length);
           
    }

function is_connect(){
    if( session_status() == PHP_SESSION_NONE){
        session_start();
    }
    if(!isset($_SESSION["auth"])){
        $_SESSION["flash"]["danger"] = "Vous ne pouvez pas accéder à cette page, veuillez vous connecter!";
        header("location: se_connecter.php");
        exit();
    }
}
function is_connectForum(){
    if( session_status() == PHP_SESSION_NONE){
        session_start();
    }
    if(!isset($_SESSION["auth"])){
        $_SESSION["flash"]["danger"] = "Vous ne pouvez pas accéder à cette page";
        header("location: se_connecter.php");
        exit();
    }
}



function reconnect_auto(){
    if( session_status() == PHP_SESSION_NONE){
        session_start();
    }
    if(isset($_COOKIE["rememeber"]) && !isset($SESION["auth"])){
        require_once ('./includes/bd.php');
        if(!isset($pdo)){
            global $pdo;
        }
        $remember_token = $_COOKIE["remember"];
        $parts = explode("::",$remember_token);
        $userID = $parts[0];
        $req = $pdo->prepare("SELECT * FROM users WHERE id = ?");
        $req->execute([$userId]);
        $user = $req->fetch();

        if($user){
            $expected= $userId. "::". $user->rmember_token .$remeber_token. sha1($user->id ."BEOGOCHRISTOPHE");
            if($expected == $_COOKIE['remember']){
                $_SESSION["auth"] = $user;
                $_SESSION["flash"]["success"] = "Connexion effectuée avec succès";

                setcookie("remember",$remember_token,time()+ 60* 60* 24 *7);


            
            }else{
                setcookie("remember", "",-1); 
            }
        }else{
            setcookie("remember", "",-1); 
        }
    }
    }

    function reconnect_auto_forum(){
        if( session_status() == PHP_SESSION_NONE){
            session_start();
        }
        if(isset($_COOKIE["rememeber"]) && !isset($SESION["auth"])){
            require_once ('./includes/bd.php');
            if(!isset($pdo)){
                global $pdo;
            }
            $remember_tokenForum = $_COOKIE["remember"];
            $parts = explode("::",$remember_tokenForum);
            $userID = $parts[0];
            $req = $pdo->prepare("SELECT * FROM utlisateurs WHERE idForum = ?");
            $req->execute([$userIdForum]);
            $user = $req->fetch();
    
            if($user){
                $expected= $userId. "::". $user->rmember_tokenForum .$remeber_tokenForum. sha1($user->idForum ."BEOGOCHRISTOPHE");
                if($expected == $_COOKIE['remember']){
                    $_SESSION["auth"] = $user;
                    $_SESSION["flash"]["success"] = "Connexion effectuée avec succès";
    
                    setcookie("remember",$remember_tokenForum,time()+ 60* 60* 24 *7);
    
    
                
                }else{
                    setcookie("remember", "",-1); 
                }
            }else{
                setcookie("remember", "",-1); 
            }
        }
        }
        
       
        
      
      // Fonction pour traiter la requête de recherche
    

     
      function redirect($url) {
        // Rediriger l'utilisateur vers l'URL spécifiée
        header('Location: ' . $url);
        exit();
    }
    
    
    
          
        
   
    
?>