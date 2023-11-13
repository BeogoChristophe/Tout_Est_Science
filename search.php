

<?php 

require_once ('./includes/bd.php');
session_start();
require_once ('function.php');

reconnect_auto();
is_connect();
require_once 'header1.php';



?>
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
    <!-- <link rel="stylesheet" href="index.css"> -->
<link href="bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
  
  <main class="container" style=" top: 30px;" >
    <section>
    </section>
    <section>
    </section>
    <section>
    <?php

require_once ('./includes/bd.php');

function get_data($query) {
    // Connexion à la base de données
    $db = new PDO("mysql:host=localhost;dbname=courses", "root", "");

    // Exécution de la requête
    $statement = $db->prepare($query);
    $statement->execute();

    // Récupération des résultats
    $results = $statement->fetchAll();

    // Retour des résultats
    return $results;
}

function generate_results($results) {
    // Initialisation des variables
    $output = "";

    // Parcours des résultats
    foreach ($results as $result) {
        // Génération de l'élément de résultat
        $output .= "<div class='result'>";
        $output .= "<h2>" . $result['titre'] . "</h2>";
        $output .= "<p>" . $result['url'] . "</p>";
        $output .= "</div>";
    }

    // Retour des résultats
    return $output;
}

// Connexion à la base de données
$pdo = new PDO('mysql:host=localhost;dbname=courses;Charset=utf8', 'root', '',[
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_OBJ
]);

// Récupération des données de la base de données
$query = "SELECT * FROM analyse";

// Utilisation d'une fonction if pour affecter l'attribut de la requête
if (!empty($_POST['query'])) {
  $query = "SELECT * FROM analyse
  WHERE titre LIKE '%" . $_POST['query'] . "%'";
}
$results = get_data($query);

// Affichage des résultats
$output = generate_results($results);

// Affichage de la page

echo $output;

if (!empty($_POST['query'])) {
  $query = "SELECT * FROM algebre
  WHERE titre LIKE '%" . $_POST['query'] . "%'";
}
$results = get_data($query);

// Affichage des résultats
$output = generate_results($results);

// Affichage de la page

echo $output;

if (!empty($_POST['query'])) {
  $query = "SELECT * FROM algorithme
  WHERE titre LIKE '%" . $_POST['query'] . "%'";
}
$results = get_data($query);

// Affichage des résultats
$output = generate_results($results);

// Affichage de la page

echo $output;


if (!empty($_POST['query'])) {
  $query = "SELECT * FROM chimie
  WHERE titre LIKE '%" . $_POST['query'] . "%'";
}
$results = get_data($query);

// Affichage des résultats
$output = generate_results($results);

// Affichage de la page

echo $output;

if (!empty($_POST['query'])) {
  $query = "SELECT * FROM electricite
  WHERE titre LIKE '%" . $_POST['query'] . "%'";
}
$results = get_data($query);

// Affichage des résultats
$output = generate_results($results);

// Affichage de la page

echo $output;

if (!empty($_POST['query'])) {
  $query = "SELECT * FROM mecaniquedupoint
  WHERE titre LIKE '%" . $_POST['query'] . "%'";
}
$results = get_data($query);

// Affichage des résultats
$output = generate_results($results);

// Affichage de la page

echo $output;

if (!empty($_POST['query'])) {
  $query = "SELECT * FROM physique
  WHERE titre LIKE '%" . $_POST['query'] . "%'";
}
$results = get_data($query);

// Affichage des résultats
$output = generate_results($results);

// Affichage de la page

echo $output;

if (!empty($_POST['query'])) {
  $query = "SELECT * FROM programmation
  WHERE titre LIKE '%" . $_POST['query'] . "%'";
}
$results = get_data($query);

// Affichage des résultats
$output = generate_results($results);

// Affichage de la page

echo $output;

?>

<form action="search.php" method="post">
    <input style="height: 37px;" type="text" name="query" id="query" placeholder="Rechercher">
    <input class="btn btn-primary" style=" color: #fff;" type="submit" value="Rechercher">
</form>

    
    

</main>
</body>



<!-- <script src="bootstrap.bundle.min.js"></script> -->

   
</html>
<?php require_once 'footer.php';?>

<style>
  .result {
    border: 1px solid black;
    margin: 10px;
    padding: 10px;
}

.titre {
    font-size: 20px;
    color: red;
}

.contenu {
    font-size: 16px;
    color: blue;
}

</style>
