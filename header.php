<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Ma Bibliothèque</title>


    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css"> <!-- bon lien -->
    <!-- FontAwesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-us=er-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Personnalisation de template -->
    <link href="jumbotron.css" rel="stylesheet">
  </head>
  <body>
    
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" style="padding-top: 0.5rem; padding-bottom: 0.5rem;">
  <a class="navbar-brand" href="#" style="font-size: 1.1rem;">Ma Bibliothèque</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-book"></i> Gestion des genres</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Liste des genres</a>
          <a class="dropdown-item" href="#">Ajouter un genre</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-pen"></i> Gestion des auteurs</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Liste des auteurs</a>
          <a class="dropdown-item" href="#">Ajouter un auteur</a>
          <a class="dropdown-item" href="#">Rechercher un auteur</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-flag"></i> Gestion des nationalités</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="listNationalites.php">Liste des nationalités</a>
          <a class="dropdown-item" href="formNationalite.php">Ajouter une nationalité</a>
        </div>
      </li>
    </ul>
  </div>
</nav>