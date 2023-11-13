<?php

    require_once ('./includes/bd.php');
    session_start();
    require_once ('function.php');
    
    reconnect_auto();
    is_connect();

?>




<!DOCTYPE html>
<html lang="en">
<head>


<link rel="stylesheet" href="index.css">
<title>Tout_Est_Science</title>
</head>
<body>
<?php

if( session_status() == PHP_SESSION_NONE){
    session_start();
}
require_once('header1.php')
?>
<div class="head1">
    <div class="nav1">
      <ul>
      <li><a href="#introduction">Introduction</a></li>
        <li><a href="#ensemble">Ensembles</a></li>
        <li><a href="#operation">Opérations sur les ensembles</a></li>
        <li><a href="#ralation">Relations</a></li>
        <li><a href="#fonction">Fonctions</a></li>
      </ul>
</div>

<h1 >Cours d'Agèbre</h1>
</div>

<main>
  <br><br><br>

<div class="accueil-container">
          
<div class="accueil-container" >
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

    <main>
    <section class="contenu" >
      <h2 id="introduction" >Introduction</h2>
      <p>
        L'algèbre est une branche des mathématiques qui étudie les opérations sur les nombres et les expressions algébriques. Elle est essentielle à de nombreux domaines de la science et de l'ingénierie.
      </p>
      <p>
        Ce cours d'algèbre couvrira les concepts fondamentaux de l'algèbre, y compris les ensembles, les opérations sur les ensembles, les relations et les fonctions.
      </p>
      <div class="imgrid">
          <img src="pngegg (1&6).png" alt="Image 1" width="150%" height="80%">
          <img src="pngegg (1&5).png" alt="Image 1" width="150%" height="80%">
      </div>
    </section>
    <section class="contenu" >
      <h2 id="ensemble" >Ensembles</h2>
      <p>
        Un ensemble est une collection d'objets. Les ensembles sont utilisés pour représenter des collections de données ou de concepts.
      </p>
      <p>
        Dans ce chapitre, nous étudierons les différents types d'ensembles, ainsi que leurs opérations.
      </p>
      <h2 style="color:blue;"> Les Ensembles</h2><br>
            <embed src="ensemble.pdf" width="100%" height="500px" />
            <br>
    </section>
    <section class="contenu" >
      <h2 id="operation" >Opérations sur les ensembles</h2>
      <p>
        Les opérations sur les ensembles permettent de combiner, diviser et comparer des ensembles.
      </p>
      <p>
        Dans ce chapitre, nous étudierons les différentes opérations sur les ensembles, ainsi que leurs propriétés.
      </p>
      <h2 style="color:blue;">Raisonne et logique</h2><br>
            <embed src="raisonnement et logique.pdf" width="100%" height="500px" />
            <br>
    </section>
    <section class="contenu" >
      <h2 id="ralation" >Relations</h2>
      <p>
        Une relation est une association entre deux ensembles. Les relations sont utilisées pour représenter des relations entre des objets ou des concepts.
      </p>
      <p>
        Dans ce chapitre, nous étudierons les différents types de relations, ainsi que leurs propriétés.
      </p>
      <h2 style="color:blue;">Relation</h2><br>
            <embed src="relation_binaire.pdf" width="100%" height="500px" />
            <br>
      
            <h2 style="color:blue;">Cours en général</h2><br>
            <embed src="CoursAlg.pdf" width="100%" height="500px" />
            <br>
    </section>
    <section class="contenu" >
      <h2 id="fonction" >Fonctions</h2>
      <p>
        Une fonction est une relation entre deux ensembles qui associe à chaque élément d'un ensemble un élément unique d'un autre ensemble.
      </p>
      <p>
        Dans ce chapitre, nous étudierons les différents types de fonctions, ainsi que leurs propriétés.
      </p>
      <h2 style="color:blue;">Fonction</h2><br>
            <embed src="Cours et exercices avec solutions.pdf" width="100%" height="500px" />
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



      
  
</body>
<script src="cours.js"></script>
<?php require_once 'footer.php';?>