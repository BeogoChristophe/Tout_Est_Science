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
<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbar-fixed/">
<link href="bootstrap.min.css" rel="stylesheet">
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

        <div class="nav1 ">
            <ul>
                <li><a href="#introduction">Introduction</a></li>
                <li><a href="#struct">Structures de données</a></li>
                <li><a href="#algorithme">Algorithmes</a></li>
                <li><a href="#Exo">Exercices</a></li>
            </ul>
        </div>
        <h1>Cours d'algorithme</h1>
</div><br><br><br><br><br><br><br><br><br>

<main>


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

    </div>
    </div>

    
    <main>
    <br><br><br>
        <section class="contenuAlgo">
            <h2  id="introduction">Introduction</h2><br><br>
            <p>
                Un algorithme est une séquence d'instructions qui permet de résoudre un problème.
            </p>
            <p>
                Les algorithmes sont utilisés dans de nombreux domaines, notamment la programmation, l'ingénierie et les mathématiques.
                Un algorithme est une séquence d'instructions qui permet de résoudre un problème. Il s'agit d'une méthode systématique pour résoudre un problème donné.
            </p>
            <h3><br><br>Importance des algorithmes. <br><br>Les algorithmes sont importants pour de nombreuses raisons, notamment : <br><br></h3>
            <ul>
              <li>Ils permettent de résoudre des problèmes de manière efficace.</li>
              <li>Ils sont utilisés dans de nombreux domaines, notamment l'informatique, l'ingénierie, les mathématiques et les sciences.</li>
              <li>Ils sont une base fondamentale de la programmation.</li>
            </ul>
            <br><br>
            <ul>
                <li><a href="#introduction" style="color:blue;">Strucrtures de données</a></li>
            </ul>
        </section>
        <section class="contenu">
            <h2 id="struct">Structures de données</h2><br><br>
            <p>
                Une structure de données est un moyen de stocker et de manipuler des données.
            </p>
            <p>
                Les structures de données sont utilisées pour rendre les algorithmes plus efficaces.
            </p><br><br>
            <ul>
                <li><a href="#introduction" style="color:blue;">Algorithmes</a></li>
            </ul>
        </section>
        <section class="contenu">
            <h2 id="algorithme">Algorithmes</h2><br><br>
            <p>
                Il existe de nombreux types d'algorithmes, chacun avec ses propres avantages et inconvénients.
            </p>
            <p>
                Certains algorithmes sont plus efficaces que d'autres, tandis que certains sont plus faciles à comprendre.
            </p><br>
            <h3>Quelques fichiers pdf pour vous!</h3><br>
            <h2 style="color:blue;">Introduction à l'algorithme</h2><br>
            <embed src="introduction-to-algorithms_compress.pdf" width="100%" height="500px" />
            <br>
            <h2 style="color:blue;">Un autre à votre portez!</h2><br>
            <embed src="0310-cours-algorithmique.pdf" width="100%" height="500px" />
            <br><br>
            <ul>
                <li><a href="#algorithme" style="color:blue;">Exercices</a></li>
            </ul>
        </section>
        <section class="contenu">
            <h2 id="Exo">Exercices</h2><br><br>
            <p>
                Les exercices sont un excellent moyen d'apprendre et de pratiquer les algorithmes.
            </p>
            <p>
                Il existe de nombreux exercices disponibles en ligne et dans des livres.
            </p><br>
            <h2 style="color:blue;">Exercez vous!</h2><br>
            <embed src="exercices corrigés algorithme.pdf" width="100%" height="500px" />
            <br><br>
            <h1>
              N'hésitez pas de consulter la partie des exercices.
              <ul>
                <li><a href="index3.php" style="color:blue;">Exercices</a></li>
            </ul>
            </h1>
        </section>
    </main>


       <?php require_once 'footer.php';?>

</body>
<script src="cours.js"></script>
</html>
