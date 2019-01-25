<!doctype html>
<html lang="en">
  <head>
    <title>Restaurant</title>
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
  </body>
</html>

<!-- Barra de navegació -->
  <nav class="navbar  navbar-expand-lg navbar-dark bg-dark">
  <!-- botó expansió navbar versió móbil -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
  <!--Div del navbar -->
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
   <!--Link i nom de la pàgina -->
    <a class="navbar-brand" href="index.php">TrapAdvisor</a>
   <!--Llista amb elements del navbar -->
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
   <!--Primer element de la llista -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    
    <!-- Formulari del quadre de cerca -->
    <form  method= "request" class="form-inline my-2 my-lg-0">
      <input class="form-control mx-sm-2" type="text" name="query" placeholder="Search" aria-label="Search">
      <select class="btn mx-2 my-sm-0"  name="order">
      <option value="ascending">Ascending </option>
      <option value="descending">Descending</option>
      <option value="random">Random</option>
      </select>
      <input class="btn  mx-2 my-sm-0" type="submit" value="Send">
    </form>

  </div>
</nav>  
<!-- Titol -->
    <div class="text-center bg-faded">
    <h1> TrapAdvisor </h1>
    <h2 class="text-muted"> The best page to find places you SHOULDN'T go!! </h2>
    </div>
    <hr class="bg-dark">

<div class="container">

<!-- PHP -->
<?php

include 'restaurantsdb.php';
$restaurant=getRestaurant($_GET['id_rest']);
foreach($restaurant as $key =>$value){
      
      ?>
       <!-- Card on es mostra la informació dels arrays -->
       <div class="row">
        <div class="col-md-7">
          <a href="restaurant.php">
            <img class="img-fluid rounded mb-3 mb-md-0" src="<?= $value["filePath"] ?>" alt="imatge restaurant">
          </a>
        </div>
        <div class="col-md-5">
        <ul class="list-group list-group-flush">
          <!-- Nom restaurant -->
          <li class="list-group-item">  <h3><?= $value["name"] ?></h3>  </li>
          <!-- Localitat -->
          <li class="list-group-item">  <h5><?= $value["description"] ?> </h5> </li>
          <li class="list-group-item">  <h5> <?= $value["locality"] ?></h5> </li>
          <li class="list-group-item">  <h5> <?= $value["phoneNumber"] ?> </h5> </li>
          </ul>
        </div>
      </div>
      <br>
      <br>
    <?php
  }
                      ?>
</div>
<hr>

<!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2018 Copyright
  <br>
  <p> Esta página es una parodia y en ningún momento debe tomarse en serio su contenido!!<p>
    <a href="https://github.com/Puig99"> Mi github </a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</body>
</html>