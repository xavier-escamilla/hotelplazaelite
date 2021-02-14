<!doctype html>
<html lang="en">
    <head>
    <!-- Meta tags -->
      <meta charset="utf-8">
      <title>Hotel Plaza Elite</title>
      <meta name="description" content="Hotel Plaza Elite">
      <meta name="author" content="Xavier Escamilla">
      <meta name="keywords" content="hotel, restaurante, plaza, elite, habitaciones">  
      <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/img/favicon/favicon-196x196.png" sizes="196x196">
    <link rel="icon" type="image/png" href="assets/img/favicon/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="assets/img/favicon/favicon-128x128.png" sizes="128x128">

    <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <!-- Custom CSS -->
      <link rel="stylesheet" href="css/main.css">
    </head>

    <body>
    <!-- Barra de Navegación -->
    <?php
      include('navbar.php');
    ?>
    <!-- Fin Barra de Navegación -->

    <!-- Slider -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <ol class="carousel-indicators">
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/piscina2.png" class="d-block w-100" alt="Primer Slide">
        </div>
        <div class="carousel-item">
          <img src="img/camas-individuales.png" class="d-block w-100" alt="Segundo Slide">
        </div>
        <div class="carousel-item">
          <img src="img/barra-botellas.png" class="d-block w-100" alt="Tercer Slide">
        </div>
      </div>
    </div>
    <!-- Fin Slider -->

    <!-- Primer Contenedor -->
    <section id="primerseccion">
      <div class="row text-center py-5">
        <div class="col-md-12">
          <h3>PROTOCOLOS DE SANIDAD</h3>
          <a href="#">Conoce las medidas preventivas que llevamos a cabo.</a>
        </div>
      </div>
    </section>
    <!-- Fin Primer Contenedor -->

    <!-- Parallax -->
    <section id="parallax">
      <div class="container-fluid">
        <div class="row text-center">
          <div class="col-md-12">
            <h1>Contamos con las mejores habitaciones.</h1>
            <p>texto</p>
            <a href="#" class="btn">RESERVAR</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Fin Parallax -->

    <!-- Segundo Contenedor -->
    <section class="py-1" id="segundaseccion">
      <div class="container-fluid">
      <div class="row text-center py-5">
        <div class="col-md-6">
          <img src="" alt="hotel">
          <h3>HOTEL</h3>
        </div>
        <div class="col-md-6">
          <img src="" alt="hotel">
          <h3>RESTAURANTE</h3>
        </div>
      </div>
      <div class="row text-center py-5">
        <div class="col-md-6">
          <img src="" alt="hotel">
          <h3>TIENDA</h3>
        </div>
        <div class="col-md-6">
          <img src="" alt="hotel">
          <h3>TOURS</h3>
        </div>
      </div>
      </div>
    </section>
    <!-- Fin Segundo Contenedor -->

    <!-- Segundo Contenedor -->
    <section id="terceraseccion">
      <div class="row text-center py-5">
        <div class="col-md-6">
          <h3>HABITACIONES</h3>
          <a href="#">Conoce nuestras diferentes habitaciones.</a>
        </div>
        <div class="col-md-6">
          <h3>RESTAURANTE</h3>
          <a href="#">Conoce nuestro restaurante.</a>
        </div>
      </div>
    </section>
    <!-- Fin Segundo Contenedor -->

    <!-- Google Maps -->
    <section>
      <div class="row">
        <div class="col-md-12">
          
        </div>
      </div>
    </section>
    <!-- Fin google Maps -->      

    <!-- Pie de Página -->
    <?php
      include('footer.php');
    ?>
    <!-- Fin Pie de Página -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- Ionic Icons JS -->
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    </body>
</html>
