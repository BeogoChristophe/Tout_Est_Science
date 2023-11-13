<?php
    require_once ('./includes/bd.php');

    require_once ('function.php');
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <script src="color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<title>Tout_Est_Science</title>
<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbar-fixed/">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
<link href="bootstrap.min.css" rel="stylesheet">
    <style> 
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-blue-bg);
        --bs-btn-border-color: var(--bd-blue-bg);
        --bs-btn-hover-color: var(--bs-blue);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-blue-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
        background-color: blue;
       
      }
      
      .btn-bd-primary:hover{
        color:blue;
        background-color: blue;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
      main {
  width: 100%;
  margin: 0 auto;
  top: 50px;
}

.rubrique a {
  cursor: pointer;
  text-decoration: underline;
}

.rubrique a:active {
  text-decoration: none;
}


section {
  padding: 20px;
  top: 50%;
}

 /* Styles pour le footer */
 footer {
            background-color: #333;
            color: white;
            padding: 20px;
        }

        /* Styles pour la première ligne du footer */
        .footer-line-1 {
            text-align: center;
        }

        /* Styles pour la deuxième ligne du footer (avec deux colonnes) */
        .footer-line-2 {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Styles pour chaque colonne */
        .column {
            flex: 1;
            padding: 10px;
        }

        /* Styles pour la première colonne de la deuxième ligne */
        .column-1 {
            background-color: #555;
        }

        /* Styles pour la deuxième colonne de la deuxième ligne */
        .column-2 {
            background-color: #777;
        }

            /* Styles pour la liste non ordonnée */
        ul {
            list-style-type: none; /* Supprime les puces de la liste */
            padding: 0; /* Supprime la marge intérieure par défaut de la liste */
            margin: 0; /* Supprime la marge extérieure par défaut de la liste */
        }

        /* Styles pour les éléments de la liste */
        li {
            display: inline; /* Affiche les éléments en ligne (horizontalement) */
            margin-right: 10px; /* Espace entre les éléments */
            color:#fff;
            text-decoration: none;
        }

 

footer {
  width: 100%;
  padding: 0;
  position: relative;
  right: 0%;
  left: 0%;
  /* margin-right: -10%; */
  /* margin-left: -10%; */
  background-color: #333; /* Couleur de fond du footer */
  color: white; /* Couleur du texte du footer */
}

.contact{
    height: 20lvh;
    width: 10%;
}
   
footer a {
  width: 150%;
  height: 50lvh;
}

footer {
width: 100%;
padding: 0;
position: relative;
right: 0%;
left: 0%;
/* margin-right: -10%; */
/* margin-left: -10%; */
background-color: blue; /* Couleur de fond du footer */
color: white; /* Couleur du texte du footer */
}

  .social-icons {
    display: flex;
    gap: 20px;
}

.social-icons a {
    font-size: 30px;
    color: #fff;
    text-decoration: none;
    transition: color 0.3s ease;
}

.contact{
    display: grid;
    grid-template-columns: repeat(3, minmax(37%, 1fr));
    width: 30%;
  }

.contact-icons a {
  font-size: 30px;
  color: #fff;
  text-decoration: none;
  transition: color 0.3s ease;
}

.contact-icons a:hover {
  color: #4005e0;/* Couleur bleue de Google */
}
@media (max-width: 768px) {
  header {
    flex-direction: column;
  }

  nav {
    flex-direction: column;
    width: 100%;

  }

  main {
    width: 100%;
    padding: 0;
    top:50px;
  }

  section {
    width: 100%;
  }

  .img{
    display: grid;
    grid-template-columns: repeat(2, minmax(10%, 1fr));
    gap: 30px;
    margin-top: 30px;
    width: 100%;
  }
}

.bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
        background-color: blue;
      }
      .btn-bd-primary:hover{
        color:none;
        background-color: blue;
      }
      

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
      .dropdown-menu a:hover{
                background-color: blue;
                color: #fff;
              }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="AcceuillStyle.css" rel="stylesheet">
  </head>
  <body>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
              id="bd-theme"
              type="button"
              aria-expanded="false"
              data-bs-toggle="dropdown"
              aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center"  data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>
    <?php

// Vérifiez si le formulaire a été soumis.
if (isset($_POST['submit'])) {

    // Récupérez les données du formulaire.
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    // Validez les données du formulaire.
    if (empty($username)) {
        echo "Le nom d'utilisateur est obligatoire.";
    } else if (empty($email)) {
        echo "L'email est obligatoire.";
    } else if (empty($password)) {
        echo "Le mot de passe est obligatoire.";
    } else if ($password != $password_confirm) {
        echo "Les mots de passe ne correspondent pas.";
    } else {

        // Enregistrez les données du formulaire dans la base de données.
        // TODO: Implémenter la fonction pour enregistrer les données dans la base de données.
        save_profile_and_settings($username, $email, $password);

        // Redirigez l'utilisateur vers la page de profil.
        header('Location: header1.php');
    }
}

// Fonction pour enregistrer les données du formulaire dans la base de données.
function save_profile_and_settings($username, $email, $password) {

    // TODO: Implémenter la fonction pour enregistrer les données dans la base de données.
    // Par exemple:

    $db = new PDO('mysql:host=localhost;dbname=beogo_christoph', 'root', '');

    $stmt = $db->prepare('INSERT INTO users (username, email, password) VALUES (?, ?, ?)');
    $stmt->execute([$username, $email, $password]);

    $db = null;
}

?>

    
<nav class="navbar navbar-dark fixed-top " style="background-color: blue;" aria-label="Dark offcanvas navbar">
    <div class="container-fluid ">
    <a style="font-size:30px; color:#fff; text-decoration:none;" href="index.php" ><img src="T_E_S.png" alt="logo"  width="8%" height="8%" style="border-radius:80px; top:20px; float: left;">Tout_Est_Science</a></a>
    <a class="nav-link " style="font-size:20px; margin-left:-37%; color:#fff;" href="index.php"> Acceuil</a>
    <a class="nav-link" style="font-size:20px; margin-left:-5%; color:#fff;" href="indexcours.php" >Cours</a></a>
    <a class="nav-link" style="font-size:20px; margin-left:-5%; color:#fff;" href="exercice.php" >Exercice</a></a>
    <a class="nav-link" style="font-size:20px; margin-left:-5%; color:#fff;" href="service.php">Sevices</a></a>
    <a class="nav-link" style="font-size:20px; margin-left:-5%; color:#fff;" href="F_index.php">Forum</a></a>
    <?php if(isset($_SESSION["auth"])):?>
    <a class="navbar-brand btn btn-primary" style="color:#fff; z-index: 2; font-size:24px; margin-right:-4%; margin-left:-5%;" href="se_deconnecter.php">Déconnecter</a>
    <?php else: ?>
    <a class="navbar-brand btn btn-primary" style="color:#fff; z-index: 2; font-size:24px; margin-right:-4%; margin-left:-5%; " href="se_connecter.php">Se connecter</a>
    <?php endif ?>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarDark" aria-controls="offcanvasNavbarDark" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end text-bg" style="background-color: blue;" tabindex="-1" id="offcanvasNavbarDark" aria-labelledby="offcanvasNavbarDarkLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarDarkLabel" style="color:#fff;" >Tout_Est_Science</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
              </a>
              <ul class="dropdown-menu" style="background-color:blue;" >
            <li>
                <!-- <a class="dropdown-item" style="color: #fff;" href="profile.php">Profile</a> -->
                
      <nav>
        <div class="nav nav-pills" id="nav-tab" style="padding:2%;" role="tablist">
          <a class="nav-link nav-item dropdown-item" role="tab" style="color: #fff; font-size:15px;" data-bs-toggle="tab" href="#profile">Profile</a>
          <a class="nav-link nav-item dropdown-item" role="tab" style="color: #fff; font-size:15px; " data-bs-toggle="tab" href="#parametre">Paramètre</a>
        
            <li>
                  <hr class="dropdown-divider">
            </li>
            <?php if(isset($_SESSION["auth"])):?>
            <li><a class="dropdown-item" style="color: #fff; font-size:15px; margin-left:-10%;" href="se_deconnecter.php">Sign out</a></li>
            <?php else: ?>
            <li><a class="dropdown-item " style="color: #fff; font-size:15px; margin-left:-10%;" href="s_enregister.php">Sign up</a></li>
            <li><a class="dropdown-item " style="color: #fff; font-size:15px; margin-left:-10%;" href="se_connecter.php" >Sign in</a></li>
            <?php endif ?>
            </div>
      </nav>
      <div class="tab-content">
        <div class="tab-pane fade" id="profile" role="tabpanel">
          <fieldset>
             <div class="form-group">
              <label for="speudo">Nom d'utilisateur</label>
              <input type="text" id="speudo" class="form-control" name="username">
             </div><br>
             <div class="form-group">
              <label for="email">Email</label>
              <input type="email" id="email" class="form-control" name="email">
             </div><br>
          </fieldset>
        </div>
        <div class="tab-pane fade" id="parametre" role="tabpanel">
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
               <input type="password" id="password_confirm" class="form-control" name="password_confirm">
            </div><br>
            <input type="submit" style="background-color:blue;" class="btn btn-primary" value="Sauvegarder les modifications">
          </fieldset>
        </div>
</div>
      </div>
     </ul>
    </li>
  </li>
</ul>
            <li>

            <!-- pour search -->
            

             <form action="search.php" method="post" style="height: 100%;">
                <input type="text" name="query" placeholder="Rechercher">
                <input class="btn btn-primary" style="background-color: #777; color: black; height: 33px;" type="submit" value="Rechercher">
             </form></a>
           </li>
        </div>
      </div>
    </div>
  </nav>
<script src="bootstrap.bundle.min.js"></script>
  <head><script src="offcanvas-navbar.js"></script>


