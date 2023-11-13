
<style>
       /* Réinitialisation des marges et des rembourrages */



 
 

.contact a {
    font-size: 30px;
    color: #fff;
    text-decoration: none;
    transition: color 0.3s ease;
    margin-left: -15%;
}

.contact a:hover {
    color: #4005e0; /* Couleur bleue de Facebook */
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



    </style>


<?php
    
    require_once ('function.php');
    
    require_once ('./includes/bd.php');
    is_connect();

    
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
<meta name="generator" content="Hugo 0.118.2"><meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tout_Est_Science</title>
<link rel="stylesheet" href="F_style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbar-fixed/">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="bootstrap.min.css" rel="stylesheet">

 

<body> 
     
<body> <br><br><br>
     <?php 
         require_once ('./header1.php');
     ?>
<section>
    <h2 style="color:#fff;" >Forum</h2>
<div class="container">
    <form id="discussionForm">
        <h3>Formulaire</h3>
        <input type="text" id="nameInput" placeholder="Votre nom" required>
        <textarea id="messageInput" placeholder="Votre message" required></textarea> 
        <input type="file" id="photoInput">
        <button class="btn btn-primary" type="submit" name="Choisissez une photo">Publier</button>
    </form>
    <br>
   
    <div class="discussions">
        <h3>DISCUSSIONS</h3> 
        <br>
        <div id="discussionContainer">
            <!-- Contenu de la discussion -->
        </div>
    </div>
    
</div>
    
</section>

<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@tourestscience">Mathématique</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@tourestscience">Physique-Chimie</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@tourestscience">Informatique</button> -->

<div class="modal fade" id="exampleModal nameInput" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel messageInput">Nouveau message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Votre Nom:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="button" class="btn btn-primary">Envoyer le message</button>
      </div>
    </div>
  </div>
</div>

<br><br>

<script src="color-modes.js"></script>
<script src="F_script.js"></script>
<script src="script.js"></script>
<script src="color-modes.js"></script>
<?php require_once 'footer.php';?>