<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $desarrolla = "Nombre Apellido";?>
    <?php $titulo = "Lineamientos y recomendaciones";?>    
    <meta name="author" content="<?php print $titulo;?>">
    <title><?php print $titulo;?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">    
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
        <div class="container">
        <a class="navbar-brand" href="index.php"><?php print $titulo;?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto">
            <?php if((basename($_SERVER['PHP_SELF']))=='index.php'){?>
            <li class="nav-item active">
            <?php } else { ?>
            <li class="nav-item">
            <?php };?>
              <a class="nav-link" href="index.php">Portada</a>
            </li>
          </ul>
        </div>
      </div>
      </nav>
    </header>
