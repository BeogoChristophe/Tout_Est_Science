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
          <li><a href="#atom"> Atomes et Molécules</a></li>
          <li><a href="#liaison"> Liaison Chimique</a></li>
      </ul>
    </div>
    <h1>Cours de chimie</h1>
         
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
     </div><br><br>
      
    <h2 style="color:blue;">Fonction continue</h2><br>
            <embed src="UJKZ_MPCI_L1S1_1CHM1100_StructMatiere_Cours2020-2021.pdf" width="100%" height="500px" />
            <br>
    </section>
   
  </main>

    <section class="contenu">
      <h2 id="liaison" >Liaisons chimiques</h2>
      <p>Les atomes sont liés entre eux par des liaisons chimiques.</p>
      <ul>
        <li>Les principaux types de liaisons chimiques sont les liaisons covalentes, les liaisons ioniques et les liaisons métalliques.</li>
      </ul>
      <h2 style="color:blue;">Fonction continue</h2><br>
            <embed src="Cours liaisons chimiques-1.pdf" width="100%" height="500px" />
            <br>
     <h2 style="color:blue;">Fonction continue</h2><br>
            <embed src="livre_ammi-chimie_S1.pdf" width="100%" height="500px" />
            <br>
    </section>
    

  </main>
       </main>



       <?php require_once 'footer.php';?>

</body>
<script src="cours.js"></script>
</html>
