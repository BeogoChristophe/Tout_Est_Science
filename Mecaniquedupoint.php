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
        <li><a href="#loi">Lois de Newton</a></li>
        <li><a href="#application">Application</a></li>
      </ul>
</div>

<h1>Cours de Mécanique du Point</h1>
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
    </section>

    <section  class="contenu">
      <h2 id="loi" >Lois de Newton</h2>
      <p>Les lois de Newton sont les lois fondamentales de la mécanique.</p>
      <ul>
        <li>La première loi de Newton, ou loi d'inertie, stipule qu'un corps reste en mouvement rectiligne uniforme ou au repos tant que la somme des forces qui lui sont appliquées est nulle.</li>
        <li>La deuxième loi de Newton, ou loi de la dynamique, stipule que la variation de la quantité de mouvement d'un corps est proportionnelle à la force qui lui est appliquée et qu'elle a lieu dans la direction de cette force.</li>
        <li>La troisième loi de Newton, ou loi d'action et de réaction, stipule que si un corps exerce une force sur un autre corps, ce dernier exerce une force égale et opposée sur le premier corps.</li>
      </ul>
      <h2 style="color:blue;">Chapitre 1 </h2><br>
            <embed src="Chapitre 1 mécanique du point.pdf" width="100%" height="500px" />
            <br>
     <h2 style="color:blue;">Chapitre 2</h2><br>
            <embed src="Chapitre 3 mécanique du point.pdf" width="100%" height="500px" />
            <br>
    <h2 style="color:blue;">Chapitre 3</h2><br>
            <embed src="Chapitre 4 mécanique du point.pdf" width="100%" height="500px" />
            <br>
            <h2 style="color:blue;">mecanique 4</h2><br>
            <embed src="mecanique5.pdf" width="100%" height="500px" />
            <br>
     <h2 style="color:blue;">mecanique 5</h2><br>
            <embed src="mecanique6.pdf" width="100%" height="500px" />
            <br>
    </section>

    <section  class="contenu">
      <h2 id="application" >Applications</h2>
      <p>La mécanique du point trouve de nombreuses applications dans la vie courante, notamment dans les domaines de la physique, de l'ingénierie et de l'astronomie.</p>
      <ul>
        <li>La mécanique du point est utilisée pour étudier le mouvement des projectiles, des voitures, des avions et des satellites.</li>
        <li>Elle est également utilisée pour calculer la trajectoire des corps célestes.</li>
      </ul>
    </section>

  </main>

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