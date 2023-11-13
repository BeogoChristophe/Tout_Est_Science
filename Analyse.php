

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbar-fixed/">
<link href="bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="index.css">
<title>Tout_Est_Science</title>
</head>
<body>
<?php

    require_once ('./includes/bd.php');
    session_start();
    require_once ('function.php');
    
    reconnect_auto();
    is_connect();
    require_once('header1.php')

?>




<head>

<link href="bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="index.css">
<title>Tout_Est_Science</title>
</head>
<body>
<?php



?>
<div class="head1" >
    <div class="nav1">
      <ul>
        <li><a href="#introduction">Introduction</a></li>
        <li><a href="#suite">Suites numériques</a></li>
        <li><a href="#fonction">Fonctions continues</a></li>
        <li><a href="#derive">Dérivées</a></li>
        <li><a href="#integral">Intégration</a></li>
      </ul>
</div>

<h1>Cours d'analyse</h1>
</div><br><br><br><br><br><br><br><br><br>

<main>
  

<div class="accueil-container">
<br><br><br><br><br><br><br><br><br>
<div class="accueil-container">
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
     </div><br><br>

    
  <main>
    <section class="contenuAlgo">
      <h2 id="introduction">Introduction</h2>
      <p>
        L'analyse est une branche des mathématiques qui étudie les fonctions et leurs propriétés. Elle est essentielle à de nombreux domaines de la science et de l'ingénierie.
      </p>
      <p>
        Ce cours d'analyse couvrira les concepts fondamentaux de l'analyse, y compris les suites numériques, les fonctions continues, les dérivées et l'intégration.
      </p>
      <div class="imgrid">
          <img src="pngegg (1&7).png" alt="Image 1" width="100%" height="50%">
          <img src="pngegg (1&8).png" alt="Image 1" width="100%" height="50%">
      </div>
    </section>
    <section class="contenu">
      <h2 id="suite">Suites numériques</h2><br><br>
      <p>
        Une suite numérique est une liste d'éléments ordonnée. Les suites numériques sont utilisées pour représenter des phénomènes qui évoluent au fil du temps.
      </p>
      <p>
        Dans ce chapitre, nous étudierons les différents types de suites numériques, ainsi que leurs propriétés.
      </p><br><br>
      <h2 style="color:blue;">Suite numérique</h2><br>
            <embed src="COURS SUITES.pdf" width="100%" height="500px" />
            <br>
    </section >
    <section class="contenu">
      <h2 id="fonction" >Fonctions continues</h2><br><br>
      <p>
        Une fonction continue est une fonction qui peut être tracée sans lever le crayon du papier. Les fonctions continues sont utilisées pour modéliser des phénomènes qui évoluent de manière régulière.
      </p>
      <p>
        Dans ce chapitre, nous étudierons la continuité des fonctions, ainsi que leurs propriétés.
      </p><br><br>
      <h2 style="color:blue;">Fonction continue</h2><br>
            <embed src="fonctionContinue.pdf" width="100%" height="500px" />
            <br>
    </section>
    <section class="contenu">
      <h2 id="derive" >Dérivées</h2><br><br>
      <p>
        La dérivée d'une fonction est une mesure de sa variation. Les dérivées sont utilisées pour étudier le comportement des fonctions, ainsi que pour résoudre des problèmes d'optimisation.
      </p>
      <p>
        Dans ce chapitre, nous étudierons les dérivées des fonctions, ainsi que leurs applications.
      </p><br><br>
      <h2 style="color:blue;">Dérivabilités</h2><br>
            <embed src="Derivabilite.pdf" width="100%" height="500px" />
            <br>
    </section>
    <section class="contenu">
      <h2 id="integral" >Intégration</h2><br><br>
      <p>
        L'intégration est l'opération inverse de la dérivation. L'intégration est utilisée pour calculer des surfaces, des volumes et des longueurs.
      </p>
      <p>
        Dans ce chapitre, nous étudierons l'intégration des fonctions, ainsi que leurs applications.
      </p><br><br><br>
      <h2 style="color:blue;">Calcul intégral</h2><br>
            <embed src="Feuilletage.pdf" width="100%" height="500px" />
            <br><br>
      <h2 style="color:blue;"></h2><br>
            <embed src="2019MA202N_TD02_integration_corrige_exos-1-7.pdf" width="100%" height="500px" />
            <br>
      <h2 style="color:blue;"></h2><br>
            <embed src="exos-calcul-integral.pdf" width="100%" height="500px" />
            <br>

            <h1>
              N'hésitez pas de consulter la partie des exercices.
              <ul>
                <li><a href="index.php#exercices" style="color:blue;">Exercices</a></li>
            </ul>
            </h1>
    </section>
  </main>
       </main>



       <?php require_once 'footer.php';?>
  
</body>
<script src="cours.js"></script>
</html>