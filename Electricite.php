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
          <li><a href="#introdution"> Introduction</a></li>
          <li><a href="#circuit"> Circuits électriques</a></li>
          <li><a href="#loi"> Lois de l'électricité</a></li>
      </ul>
    </div>
    <h1>Cours d'électricité</h1>
         
</div><br><br><br><br><br><br><br><br><br>

<main>

    <div class="accueil-container">
        <h1>Bienvenue sur T_E_S</h1><br><br>
    <h1>
      <p>Ce cours présente les bases de l'électricité, qui est la science qui étudie les interactions entre les charges électriques.</p>
    </h1>
        <<br><br>
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
      <p>L'électricité est une forme d'énergie qui est produite par le mouvement des charges électriques. Les charges électriques peuvent être positives ou négatives.</p>
      <br>
      <div class="imgrid">
          <img src="pngegg (1&&7).png" alt="Image 1" width="150%" height="80%">
          <img src="pngegg (1&&5).png" alt="Image 1" width="150%" height="80%">
      </div>
      <ul>
        <li>Les charges électriques de même signe se repoussent.</li>
        <li>Les charges électriques de signe opposé s'attirent.</li>
      </ul>
    </section>

    <section class="contenu">
      <h2 id="circuit" >Circuits électriques</h2>
      <p>Un circuit électrique est un chemin qui permet aux charges électriques de circuler.</p>
      <ul>
        <li>Les composants d'un circuit électrique sont les éléments qui permettent aux charges électriques de circuler.</li>
        <li>Les éléments les plus courants sont les sources de tension, les résistances, les condensateurs et les interrupteurs.</li>
      </ul>
      <div class="imgrid">
          <img src="pngegg (16).png" alt="Image 1" width="150%" height="80%">
          <img src="pngegg (&15).png" alt="Image 1" width="150%" height="80%">
      </div>
    </section>

    <section class="contenu">
      <h2 id="loi" >Lois de l'électricité</h2>
      <p>Il existe trois lois fondamentales de l'électricité : la loi d'Ohm, la loi de Kirchhoff et la loi de Faraday.</p>
      <ul>
        <li>La loi d'Ohm stipule que la tension entre les bornes d'un conducteur est proportionnelle à l'intensité du courant qui le traverse.</li>
        <li>La loi de Kirchhoff stipule que la somme des tensions dans un circuit est nulle.</li>
        <li>La loi de Faraday stipule que la tension induite dans un circuit est proportionnelle à la vitesse de variation du flux magnétique.</li>
      </ul><br><br>
     <h2 style="color:blue;">Cours électrostatique - magnétostatique</h2><br>
            <embed src="fonctionContinue.pdf" width="100%" height="500px" />
            <br>
    <h2 style="color:blue;">TD Electrostatique - Magnétostatique</h2><br>
            <embed src="TD Electrostatique - Magnétostatique.pdf" width="100%" height="500px" />
            <br>
    <h2 style="color:blue;">Cours_Electrocinétique</h2><br>
            <embed src="Cours_Electrocinétique.pdf" width="100%" height="500px" />
            <br>
      <h2 style="color:blue;">TD Electrocinétique</h2><br>
            <embed src="TD Electrocinétique.pdf" width="100%" height="500px" />
            <br>
      <h2 style="color:blue;">Chapitre Completif</h2><br>
            <embed src="Chapitre 4.pdf" width="100%" height="500px" />
            <br>
    </section>

  </main>

       </main>

       <?php require_once 'footer.php';?>
  
</body>
<script src="cours.js"></script>
</html>