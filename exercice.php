<?php

    require_once ('./includes/bd.php');
    session_start();
    require_once ('function.php');
    
    reconnect_auto();
    is_connect();

?>

<?php require_once 'header1.php';?>
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
    </style>

    
    <!-- Custom styles for this template -->
    <link href="AcceuillStyle.css" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
  </head>
  <body>

  <main  >
   
     <!-- Contenu de la plateforme ici -->
 <section id="accueil" style="background-color: none;"><br><br>
 <div class="seach">
      <div class="col1">

      </div>
      <div class="col2">
      <form action="search.php" method="post" style="width:100%;">
        <input type="text" style=" height: 34px; border: 2px solid blue; border-radius: 5px;" name="query" placeholder="Rechercher">
        <input class="btn btn-primary" style="margin-right:10%; top: -5px; "  type="submit" value="Rechercher">
    </form></a>
      </div>
    <!-- Contenu de la section Accueil -->
    <div class="accueil-container" style="background-color: none;">
     <h1 style="color:black;" ><?= $_SESSION["auth"]->username?> Welcom to Tout_Est_Science  </h1>
      
     <div  class="carousel-container">
        <div  class="carousel" id="myCarousel">
        <div class="carousel-slide">
            <img src="00.png" alt="Image 1" width="80%" height="60%">
            <div class="carousel-&caption">
                <h2 style="font-size: 30px; color:blue;">Perfectionnee vous.</h2>
                <p  style="font-size: 30px; color:black;">Découvrez notre plateforme d'apprentissage révolutionnaire !</p>
            </div>
        </div>
        <div class="carousel-slide">
            <img src="pngegg (1&5).png" alt="Image 2" width="80%" height="60%">
            <div class="carousel-&caption">
                <h2  style="font-size: 30px; color:blue;">Ayez la passion d'apprendre.</h2>
                <p  style="font-size: 30px; color:black;">Apprenez de nouvelles compétences pour progresser dans votre carrière!</p>
            </div>
        </div>
        <div class="carousel-slide">
            <img src="pngegg (1&7).png" alt="Image 3" width="80%" height="60%">
            <div class="carousel-&caption">
                <h2  style="font-size: 30px; color:blue;">Aisement!</h2>
                <p  style="font-size: 30px; color:black;">Apprenez plus facilement avec des vidéos!</p>
            </div>
        </div>
        </div>
     </div>
  </section>  
      
  <section id="exercices" style="background-color: none;">

    <!-- Contenu de la section Exercices -->
    <div class="exercices-container" style="background-color: none;">
        <h2>Exercices Pratiques</h2>
        <div class="exercices-list">
          <div class="exercice-item">
            <h3>Exercice de Programmation</h3>
            <p><b> ésolvez ce problème de programmation pour mettre en pratique vos compétences.</b></p>
            <a href="#exoProgrammation" class="en-savoir-plus">Commencer</a>
          </div>
          <div class="exercice-item">
            <h3>Problème de Mathématiques</h3>
            <p><b>Testez vos compétences mathématiques en résolvant ce problème complexe.</b></p>
            <a href="http://localhost:80/exos-calcul-integral.pdf" class="en-savoir-plus">Commencer</a>
          </div>
          <div class="exercice-item">
            <h3>Exercice de <br> Physique</h3>
            <p><b>Perfectionnez vous en vous exerçant avec nos Exercices. Nous vous les avons reserver.</b></p>
            <a href="#exoPhysique" class="en-savoir-plus">Commencer</a>
          </div>
          <div class="exercice-item">
            <h3>Exercice de <br> Chimie</h3>
            <p><b>Apprendre à résoudre des problème en Chimie. Regardez quelques exercices.</b></p>
            <a href="#exoChimie" class="en-savoir-plus">Commencer</a>
          </div>
          <div class="exercice-item">
            <h3>Exercice de Programmation</h3>
            <p><b> ésolvez ce problème de programmation pour mettre en pratique vos compétences.</b></p>
            <a href="#exoProgrammation" class="en-savoir-plus">Commencer</a>
          </div>
          <div class="exercice-item">
            <h3>Problème de Mathématiques</h3>
            <p><b>Testez vos compétences mathématiques en résolvant ce problème complexe.</b></p>
            <a href="#exoMath" class="en-savoir-plus">Commencer</a>
          </div>
          <div class="exercice-item">
            <h3>Exercice de <br> Physique</h3>
            <p><b>Perfectionnez vous en vous exerçant avec nos Exercices. Nous vous les avons reserver.</b></p>
            <a href="#exoPhysique" class="en-savoir-plus">Commencer</a>
          </div>
          <div class="exercice-item">
            <h3>Exercice de <br> Chimie</h3>
            <p><b>Apprendre à résoudre des problème en Chimie. Regardez quelques exercices.</b></p>
            <a href="#exoChimie" class="en-savoir-plus">Commencer</a>
          </div>
          <!-- Ajoutez d'autres exercices ici -->
        </div>
      </div>
    </section>
</main>
</body>
<?php require_once 'footer.php';?>
<!-- <script src="bootstrap.bundle.min.js"></script> -->
<script src="color-modes.js"></script>
<script src="cours.js"></script>

   
</html>
