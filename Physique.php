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
        <li><a href="#mecanique">Mécanique</a></li>
        <li><a href="#electromagnétique">Électromagnétisme</a></li>
        <li><a href="#thermo">Thermodynamique</a></li>
      </ul>
</div>

<h1>Cours de Physique Générale</h1>
</div><br><br><br><br><br><br><br><br><br>

<main>
  

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
     </div>

    </div>
    </div>
    <main>
    <section class="contenu" >
      <h2 id="mecanique" >Mécanique</h2>
      <p>La mécanique est la branche de la physique qui étudie le mouvement des corps. Elle se divise en deux grandes parties : la cinématique, qui étudie le mouvement en lui-même, et la dynamique, qui étudie les causes du mouvement.</p><br><br>
      <div class="imgrid">
          <img src="pngegg (1007).png" alt="Image 1" width="150%" height="80%">
          <img src="pngegg (1050).png" alt="Image 1" width="150%" height="80%">
      </div>
          <ul>
        <li><a href="#">Cinématique</a></li>
        <li><a href="#">Dynamique</a></li>
      </ul>
    </section>

    <section class="contenu">
      <h2 id="electromagnite">Électromagnétisme</h2>
      <p>L'électromagnétisme est la branche de la physique qui étudie les interactions entre les charges électriques et les champs magnétiques. Il comprend l'électricité, le magnétisme et l'optique.</p>
      <ul>
        <li><a href="#">Électricité</a></li>
        <li><a href="#">Magnétisme</a></li>
        <li><a href="#">Optique</a></li>
      </ul>
    </section>

    <section class="contenu">
      <h2 id="themo" >Thermodynamique</h2>
      <p>La thermodynamique est la branche de la physique qui étudie les relations entre la chaleur, l'énergie et le travail. Elle décrit le comportement des systèmes physiques en fonction de leur température, de leur pression et de leur volume.</p>
      <br><br>
      <div class="imgrid">
          <img src="pngegg (1115).png" alt="Image 1" width="150%" height="80%">
          <img src="pngegg (125).png" alt="Image 1" width="150%" height="80%">
      </div>
      <ul>
        <li><a href="#">Thermodynamique classique</a></li>
        <li><a href="#">Thermodynamique quantique</a></li>
      </ul>

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