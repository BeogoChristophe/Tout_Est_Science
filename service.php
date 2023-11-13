<?php
require_once('header1.php')
?>
<style>
    h2, p {
        color:black;
    }
    h1{
        text-align: center;
        border: 2px solid blue;
        border-radius: 10px;
        top: -10px;
        width: 30%;
    }
    h2{
        text-align: center;
        text-decoration:underline blue;
    }
    body1{
        margin:20%;
        border:2px solid blue;
    }
</style>
<link rel="stylesheet" href="index.css"><br><br><br><br><br>
<?php
$titre = "Nos services";
?><br><br>
<?php

// Définissez les variables

$services = array(
  array(
    "titre" => "Cours en ligne",
    "description" => "Nous proposons une variété de cours en ligne sur tous les aspects de la science, de la physique à la biologie en passant par la chimie. Nos cours sont conçus pour être interactifs et engageants, et ils sont enseignés par des experts de la science.",
  ),
  array(
    "titre" => "Ressources pédagogiques",
    "description" => "Nous proposons également une variété de ressources pédagogiques, telles que des articles, des vidéos et des quiz. Ces ressources sont conçues pour aider les étudiants à apprendre la science de manière autonome.",
  ),
  array(
    "titre" => "Communauté",
    "description" => "Nous offrons également une communauté en ligne où les étudiants peuvent se connecter avec d'autres passionnés de science. La communauté est un excellent endroit pour poser des questions, partager des idées et trouver du soutien.",
  ),
);
$body;

// Générez le contenu HTML
$html = "";
$html .= "<h1>$titre</h1>";
$html .= "<ul>";
foreach ($services as $service) {
  $html .= "<li>";
  $html .= "<h2>$service[titre]</h2>";
  $html .= "<p>$service[description]</p>";
  $html .= "</li>";
}
$html .= "</ul>";

// Affichez le contenu HTML
echo $html;

?><br><br>

<?php
require_once('footer.php')
?>