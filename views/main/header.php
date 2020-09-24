<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/style.css">

</head>
<body>
  <div class="container contenedor" id="header">
    
        <!-- <ul>
            <li><img src="public/img/cabezote.png" width="360" height="60"></li>
            <li aling="right"><a href="main">Inicio</a></li>
            <li><a href="nuevo">Nuevo</a></li>
            <li><a href="consulta">Consulta</a></li>
            <li><a href="ayuda">Ayuda</a></li>
            
        </ul> -->

    <div class="fixed-top barra-nav ">
      <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4" style="display: flex;">
            <a class="navbar-brand" href="main">Inicio</a>
            <a class="navbar-brand" href="conozcanos">Conózcanos</a>
            <a class="navbar-brand" href="servicios">Servicios</a>
            <a class="navbar-brand" href="cubrimiento">Cubrimiento</a>
            <a class="navbar-brand" href="vinculacion">Vinculaión</a>
            <a class="navbar-brand" href="clasificado">Clasificados</a>
            <a class="navbar-brand" href="noticias">Noticias</a>
            <a class="navbar-brand" href="contacto">Contacto</a>
            <!-- <a class="navbar-brand" href="requiem">Requiem</a> -->
            <form class="form-inline my-2 my-lg-0 ml-5">
                  <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                  <button class="btn btn-outline-secondary my-2 my-sm-0" style="color: white;" type="submit">Buscar</button>
                </form>
        </div>
      </div>
      <!-- <nav class="navbar navbar-dark bg-dark"> -->
        <?php 
        $url = $_GET['url'];
        if($url === 'requiem' || $url === 'condolencias'){
          echo '<nav class="navbar navbar-dark bg-dark">';
          echo '<img src="public/img/rv-2-negro.jpg"width="350" height="60" alt="" loading="lazy">';
          }else {
            echo '<nav class="navbar navbar-dark bg-dark">';        
            echo '<img src="public/img/cabezote.png"width="350" height="60" alt="" loading="lazy">';
          }
        ?>
          <!-- <img src="public/img/cabezote.png"width="350" height="60" alt="" loading="lazy"> -->
           
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>
      </div>

  </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>