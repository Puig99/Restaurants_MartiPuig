<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  

  <!-- Barra de navegació -->
  <nav class="navbar  navbar-expand-lg navbar-dark bg-dark">
  <!-- botó expansió navbar versió móbil -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
  <!--Div del navbar -->
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
   <!--Link i nom de la pàgina -->
    <a class="navbar-brand" href="#">TrapAdivisor</a>
   <!--Llista amb elements del navbar -->
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
   <!--Primer element de la llista -->
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
   <!--Segon element de la llista -->
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
   <!--Tercer element de la llista -->   
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    
    <!-- Formulari del quadre de cerca 
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
        -->
  </div>
</nav>  
<!-- Titol -->
    <div class="text-center bg-faded">
    <h1> TrapAdvisor </h1>
    <h2 class="text-muted"> The best page to find places you SHOULDN'T go!! </h2>
    </div>
    <hr class="bg-dark">

<!-- ARRAYS -->
<?php
$restaurants=array(
                  array(
                        "name"=>"Milo cocina mestiza",
                        "locality"=>"Palma de Mallorca",
                        "street"=>"Calle Caro nº30",
                        "postal"=>"07013",
                        "phone"=>"8710040413",
                        "image"=>"Foto"
                      ),
                  array(
                        "namw"=>"La nueva Burguesa",
                        "locality"=>"Palma de Mallorca",
                        "street"=>"Calle Sant Magi nº76",
                        "postal"=>"07013",
                        "phone"=>"871509530",
                        "image"=>"foto"
                      ),
                  array(
                        "name"=>"Norice Palma",
                        "locality"=>"Palma de Mallorca",
                        "street"=>"Plaça de Sant Antoni nº17",
                        "postal"=>"07002",
                        "phone"=>"871115308",
                        "image"=>"foto"
                      ),
                  array(
                        "name"=>"Daikiya",
                        "locality"=>"Palma de Mallorca",
                        "street"=>"Carrer de Jaume Balmes nº63",
                        "postal"=>"07004",
                        "phone"=>"871708557",
                        "image"=>"foto"
                      ),
                  array(
                    "name"=>"Mas39",
                    "locality"=>"Palma de Mallorca",
                    "street"=>"Calle de La Fabrica nº13",
                    "postal"=>"07013",
                    "phone"=>"871044623",
                    "image"=>"foto"
                  ));
                  ?>
<div class="container">
<div class="row">
        <div class="col-md-7">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="imatge restaurant">
          </a>
        </div>
        <div class="col-md-5">
        <ul>
          <!-- Nom restaurant -->
          <li>  <h3>Nom</h3>  </li>
          <!-- Localitat -->
          <li>  <h5>Localitat</h5> </li>
          <li>  <h5> descripcio </h5> </li>
          <li>  <h5> Direcció </h5> </li>
          <li>  <h5> Codi postal </h5> </li>
          <li>  <h5> Telefon </h5>  </li>
          </ul>
        </div>
      </div>
    </div> 
<!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2018 Copyright:
    <p> Esto lo he robado que flipas, pero diremos que lo ha hecho Marti Puig</p>
    <a href="https://github.com/Puig99"> Mi github </a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</body>
</html>