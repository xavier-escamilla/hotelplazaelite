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
    <link rel="icon" type="image/png" href="img/favicon/favicon-196x196.png" sizes="196x196">
    <link rel="icon" type="image/png" href="img/favicon/favicon-128x128.png" sizes="128x128">
    <link rel="icon" type="image/png" href="img/favicon/favicon-96x96.png" sizes="96x96">

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
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/slides/slide1.png" class="d-block w-100" alt="PrimerSlide">
    </div>
    <div class="carousel-item">
      <img src="img/slides/slide2.png" class="d-block w-100" alt="SegundoSlide">
    </div>
    <div class="carousel-item">
      <img src="img/slides/slide3.png" class="d-block w-100" alt="TercerSlide">
    </div>
  </div>
</div>
    <!-- Fin Slider -->

    <!-- Primer Contenedor -->
    <section id="primerseccion">
      <div class="container">
        <div class="row text-center py-5">
          <div class="col-md-12">
            <h3>PROTOCOLOS DE SANIDAD</h3>
              <p>
                <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Conoce las medidas preventivas que llevamos a cabo.
                <br>
                <img src="img/icono-limpieza.png" alt="icono-limpieza">
                </a>
              </p>
            <div class="collapse" id="collapseExample">
              <div class="card card-body">
                <h5>Protocolos de seguridad e higiene</h5>
                En Hotel Plaza Élite tú seguridad es nuestra prioridad, por lo cual a tu llegada, nuestro equipo te invitará a pasar por nuestro tapete de desinfección. Nuestro personal evitara cualquier tipo de contacto físico y las llaves que entregamos han pasado por un proceso de desinfección. 
                En nuestro restaurante y areas comunes tomamos en cuenta la sana distancia y nuestra capacidad se encuentra limitada, todo esto con el fin de cumplir con los protocolos de sanidad y garantizar la seguridad de todos.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Fin Primer Contenedor -->

    <!-- Parallax -->
    <section id="parallax">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <h1>Contamos con las mejores habitaciones.</h1>
            <p>Disfrute de nuestra distinguida hospitalidad, donde encontrará espacios especialmente diseñados para su descanso, elegantes habitaciones llenas de detalles, enmarcadas por una perfecta armonía arquitectónica.</p>
            <br>
            <a href="#" class="btn">RESERVAR</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Fin Parallax -->

    <!-- Tercer Contenedor -->
    <section class="py-1" id="segundaseccion">
      <div class="container-fluid">
        <div class="row text-center py-5">
          <div class="col-xs-12 col-sm-6 col-md-3">
            <figure class="snip0015">
          	<img src="img/instalaciones/instalaciones.png" alt="sample38"/>
          	<figcaption>
          		<h3>INSTALACIONES</h3>
          		<a href="habitaciones.php"></a>
          	</figcaption>			
            </figure>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
          <figure class="snip0015">
          	<img src="img/restaurante/restaurante.png" alt="sample38"/>
          	<figcaption>
          		<h3>RESTAURANTE</h3>
          		<a href="restaurante.php"></a>
          	</figcaption>			
            </figure>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
          <figure class="snip0015">
          	<img src="img/instalaciones/tienda.png" alt="sample38"/>
          	<figcaption>
          		<h3>TIENDA</h3>
          		<a href="tienda.php"></a>
          	</figcaption>			
            </figure>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
          <figure class="snip0015">
          	<img src="img/instalaciones/tours.png" alt="sample38"/>
          	<figcaption>
          		<h3>TOURS</h3>
          		<a href="actividades.php"></a>
          	</figcaption>			
            </figure>
          </div>
        </div>
      </div>
    </section>
    <!-- Fin Tercer Contenedor -->

    <!-- Google Maps -->
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 google-maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6466.411415722529!2d-99.01145673976936!3d21.9843337518341!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe9781da9585207ca!2sHotel%20Elite!5e0!3m2!1ses-419!2smx!4v1613291351513!5m2!1ses-419!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
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
