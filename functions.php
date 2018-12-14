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
  function getRestaurants($query, $ordre){
    global $restaurants;
    if (!empty($query)){
        ?>
      <h3><b>Cercar <?= $query ?> </b></h3>
      <?php
      $trobat = [];
      foreach($restaurants as $restaurant){
          
                if(strpos(strtoupper($restaurant["name"]),strtoupper($query))!==FALSE){
                    $trobat[] = $restaurant;
                
                }
              
              
            
        }


        if($ordre == "ascending"){
            sort($trobat);
        }
        elseif($ordre == "descending"){
            rsort($trobat);
        }
        else{
            shuffle($trobat);
        }
        
        return $trobat;
    }
            else{ ?>
                <h3><b>No s'ha cercat cap valor</b></h3>
            <?php    sort($restaurants);
                return $restaurants;
            }
        }
?>