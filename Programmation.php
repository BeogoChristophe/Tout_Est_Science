<?php

    require_once ('./includes/bd.php');
    session_start();
    require_once ('function.php');
    
    reconnect_auto();
    is_connect();

?>







<link rel="stylesheet" href="index.css">
<title>Tout_Est_Science</title>

<body>
<?php

if( session_status() == PHP_SESSION_NONE){
    session_start();
}
require_once('header1.php')
?><br><br><br><br><br><br><br><br><br>

<main>




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

    <h1>Cours de SCILAB</h1>

    <img src="pngegg (141).png" alt="SCILAB" width="100%" height="80%">


    <h3>commencer à programmer en débutant avec Scentific Laboritory; communement appelé SCILAB</h3>
    <div class="video-container">
        <video controls>
            <source src="scilab partie1.mp4" type="video/mp4">
            Votre navigateur ne supporte pas la lecture de vidéos.
        </video>
    </div>
    <div class="video-container">
        <video controls>
            <source src="scilab partie2.mp4" type="video/mp4">
            Votre navigateur ne supporte pas la lecture de vidéos.
        </video>
    </div><br><br>
    <h1>Cours de PYTHON</h1>
    <img src="pngegg (15é).png" alt="SCILAB" width="80%" height="50%">
    <h1>Accédez au cours </13>

    <section class="contenu">
        <h2>Introduction au langage Python</h2>
        <!-- <p>Formateur : T_E_S</p> -->

        <h5>Description du Cours : <br><br></h5>
        <p>Ce cours d'introduction au langage Python couvre les concepts fondamentaux de la programmation en Python. <br> Vous apprendrez les bases de l'algorithmique, la syntaxe de ce langage de programmation et comment résoudre des problèmes informatiques de manière efficace. <br> Aucune expérience préalable en programmation n'est requise.</p>

        <h3>Objectifs du Cours :</h3><br>
        <ul>
            <li>Comprendre les concepts de base de la programmation.</li>
            <li>Apprendre à écrire et à déboguer du code.</li>
            <li>Développer des compétences en résolution de problèmes.</li>
            <li>Préparer le terrain pour des études plus avancées en informatique.</li>
        </ul>

        <h3>Prérequis :</h3>
        <p>Aucun prérequis technique n'est nécessaire. Ce cours est ouvert à tous ceux qui souhaitent apprendre le langage PYTHON.</p><br>
        <h1>Document PDF Intégré</h1><br>
            <h2 style="color:blue;">Chapitre1</h2>
            <embed src="chapitre1 python.pdf" type="application/pdf" width="100%" height="500px" />
            <h2 style="color:blue;">Chapitre2</h2>
            <embed src="chapitre 2 python_0a89bbc7673295c02680f835b4ce99b0.pdf" type="application/pdf" width="100%" height="500px" />
            <h2 style="color:blue;">Chapitre3</h2>
            <embed src="chapitre3 python_ea0ec9ad58f02cbcd5a4e368c0994c2e.pdf" width="100%" height="500px" />
            <h2 style="color:blue;">Chapitre4</h2>
            <embed src="chapitre4 python.pdf" width="100%" height="500px" />
    </section>
    <section class="contenu">
        <h2>Introduction au Langage C</h2><br>
        <img src="pngegg (1005).png" alt="Langage C" width="80%" height="60%">
        <h3>Description du Cours :</h3><br>
    <p>Le langage C est un langage de programmation compilé de haut niveau qui est souvent utilisé<br> pour le développement de systèmes d'exploitation, de logiciels embarqués et de logiciels de productivité. <br> Il est un langage puissant et flexible qui offre un contrôle direct sur l'ordinateur.</p>
    <h2>Objectifs du Cours :</h2><br>
    <h3>À la fin de ce cours, vous serez en mesure de :</h3>
    <ul>
      <li>Comprendre les concepts de base du langage C</li>
      <li>Écrire des programmes C simples</li>
      <li>Résoudre des problèmes de programmation en utilisant le C.</li>
      <li>Utiliser les fonctionnalités avancées du langage C</li>
    </ul>
    <h2>Contenu</h2>

    <h2>Ce cours couvre les sujets suivants :</h2>
    <ol>
        <il>Introduction au langage C</li>
        <il>Types de données</li>
        <il>Opérateurs</li>
        <il>Instructions de contrôle</li>
        <il>Fonctions</li>
        <il>Structures de données</li>
        <il>Pointeurs</li>
        <il>Mémoire dynamique</li>
        <il>Fichiers</li>
        <il>Tests unitaires</li>
        <il>Portabilité</li>
        
    </ol>
    <h2>Matériel requis</h2>
    <p>Pour suivre ce cours, vous aurez besoin d'un ordinateur avec un compilateur C installé. Vous pouvez trouver des compilateurs C pour la plupart des systèmes d'exploitation.</p>
    <h2>Ressources</h2>
    <ul>
      <li>Documentation officielle du langage C</li>
      <li>Tutoriels et exercices en ligne</li>
      <li>Forums et communautés C</li>
    </ul>

    <h1>commencer maintenant!</h1>
     <h2 style="color:blue;">Intiation à la Programmation</h2><br>
    <embed src="Programmation.pdf" width="100%" height="500px" /><br>
    <h2 style="color:blue;">Un autre cours à votre disposition</h2><br>
    <embed src="Programmer en langage C  Cours et exercices corrigés - 5ème Edition-1.pdf" width="100%" height="500px" /><br><br>
    <h2 style="color:blue;">La particularité de ce cours est du fait qu'il vous propose des exercices!</h2><br><br>
    <embed src="Initiation à la programmation avec Python et C++ ( PDFDrive ).pdf" width="100%" height="500px" /><br><br>
    <h2 style="color:blue;">Il en est de même pour ce cours!</h2><br>
    <embed src="Initiation à l'algorithmique et à la programmation en C _ cours avec 129 exercices corrigés ( PDFDrive ).pdf" width="100%" height="500px" /><br>

    <h1>
              N'hésitez pas de consulter la partie des exercices.
              <ul>
                <li><a href="index.php#exercices" style="color:blue;">Exercices</a></li>
            </ul>
            </h1>
 </section>

       </main>




       <?php require_once 'footer.php';?>

</body>
<script src="cours.js"></script>
</html>
