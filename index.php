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
  <!-- PHP -->
  <!-- ARRAYS -->
<?php
  $restaurants=array(
                      array(
                      "name"=>"Milo cocina mestiza",
                      "locality"=>"Palma de Mallorca",
                      "street"=>"Calle Caro nº30",
                      "postal"=>"07013",
                      "phone"=>"8710040413",
                      "image"=>"http://img2.rtve.es/i/?w=1600&i=1429107523835.jpg",
                      "commtitle"=>"El peor restaurante de la HISTORIA",
                      "comment"=>"Tras muchos años de probar restaurantes, buenos y malos, pensaba que lo peor ya lo habría visto, que nada me podía sorprender, pero me equivocaba, este es sin duda el PEOR RESTAURANTE EN EL QUE HE ESTADO EN TODA MI VIDA"
                        ),
                      array(
                      "name"=>"La nueva Burguesa",
                      "locality"=>"Palma de Mallorca",
                      "street"=>"Calle Sant Magi nº76",
                      "postal"=>"07013",
                      "phone"=>"871509530",
                      "image"=>"https://www.formulatv.com/images/noticias/73600/73635/7_30b37638d4.jpg",
                      "commtitle"=>"Es un ascooo",
                      "comment"=>"Estaba comiendo de lo mas rico. Hasta que me hechi una pisca de picante y ne sale una mosca dentro del aceite que ascoooooo encontrarne con ese bichoooo" 
                        ),
                      array(
                        "name"=>"Norice Palma",
                        "locality"=>"Palma de Mallorca",
                        "street"=>"Plaça de Sant Antoni nº17",
                        "postal"=>"07002",
                        "phone"=>"871115308",
                        "image"=>"https://www.lavanguardia.com/r/GODO/LV/p4/WebSite/2017/03/31/Recortada/img_randres_20170331-092323_imagenes_lv_terceros_pie_rte_raco_de_la_paella_valencia-kdsH-U421335208134WWD-992x558@LaVanguardia-Web.jpg",
                        "commtitle"=>"La paella más mala y cara que me he comido jamás",
                        "comment"=>"Es una vergüenza que aún queden restaurantes que timan a sus clientes con platos como paellas hechas con producto congelado e insulso hervido en agua disgustada dando como resultado un paella sin sabor e indecentemente cara. Vaya jeta." 
                         ),
                      array(
                        "name"=>"Daikiya",
                        "locality"=>"Palma de Mallorca",
                        "street"=>"Carrer de Jaume Balmes nº63",
                        "postal"=>"07004",
                        "phone"=>"871708557",
                        "image"=>"https://eltertulianoblog.files.wordpress.com/2017/06/cuy-chactado.jpg?w=800&h=450&crop=1",
                        "commtitle"=>"El peor restaurante de Mallorca",
                        "comment"=>"Creo que este restaurante sólo lo define esa palabra 'pésimo'  fui a una comunión, pedí solomillo y hubiera preferido comerme la suela de mi zapato, los camareros borrachos una vergüenza. Si odias a alguien recomiendale este restaurante" 
                      ),
                      array(
                        "name"=>"Mas39",
                        "locality"=>"Palma de Mallorca",
                        "street"=>"Calle de La Fabrica nº13",
                        "postal"=>"07013",
                        "phone"=>"871044623",
                        "image"=>"http://cadenaser00.epimg.net/emisora/imagenes/2017/10/19/ser_cuenca/1508422914_684312_1508423109_noticia_normal.jpg",
                        "commtitle"=>"Decepcionante , tardaré en volver",
                        "comment"=>"He sido cliente regular de la barra de pinchos, nada que objetar sobre la comida . 
                        Pero tengo que decir que el último día tuve muy mala suerte. Ninguneo y falta de profesionalidad por parte del personal como pocas veces y en pocos sitios he vivido , ya no hablemos de amabilidad ni de empatía que brillaron por su ausencia.
                        Una pena." 
                      ));
  function getRestaurants(){
    global $restaurants;
    foreach($restaurants as $key =>$value){
      ?>
       <!-- Card on es mostra la informació dels arrays -->
       <div class="col-md-7">
        <a href="#">
          <img class="img-fluid rounded mb-3 mb-md-0" src="<?= $value["image"] ?>" alt="imatge restaurant">
        </a>
      </div>
      <div class="col-md-5">
      <ul class="list-group list-group-flush">
        <!-- Nom restaurant -->
        <li class="list-group-item">  <h3><?= $value["name"] ?></h3>  </li>
        <!-- Localitat -->
        <li class="list-group-item">  <h5><?= $value["locality"] ?> </h5> </li>
        <li class="list-group-item">  <h5> <?= $value["street"] ?></h5> </li>
        <li class="list-group-item">  <h5> <?= $value["postal"] ?> </h5> </li>
        <li class="list-group-item">  <h5> <?= $value["phone"] ?> </h5> </li>
        <li class="list-group-item">  <h5> <?= $value["commtitle"] ?> </h5>
              <p> <?= $value["comment"] ?> </p>  </li>
        </ul>
      </div>
      <br>
      <br>
    <?php
    }
  }
                      ?>
 
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

<div class="container">
<div class="row">
<?php  getRestaurants(); ?>
</div>
</div>
<hr>
<p> dame dinero skere </p>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="57C4CEJYFDXMJ">
<input type="image" src="https://www.paypalobjects.com/es_ES/ES/i/btn/btn_donateCC_LG.gif" border="0"  width="150px" height="75px" name="submit" alt="PayPal, la forma rápida y segura de pagar en Internet.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
</form>
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