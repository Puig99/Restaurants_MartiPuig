<?php
require_once "connection.php";
$data=[];
function getRestaurants(){
    global $id;
    global $db;
    global $data;
    $sql= "SELECT restaurant.description, restaurant.id, restaurant.locality,
     restaurant.name, restaurant.phoneNumber, image.filePath from restaurant 
    inner JOIN image WHERE image.restaurantId=restaurant.id AND restaurant.id=$id";
    $result= mysqli_query($db,$sql);

while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}
mysqli_free_result($result);
mysqli_close($db);
return $data;
}

?>
<form  method= "request" class="form-inline my-2 my-lg-0">
      <input class="form-control mx-sm-2" type="number" name="id" placeholder="ID" aria-label="ID">
      <input class="btn" type="submit" value="Send">
</form>

<?php
if (!empty('id')){
    $id=$_REQUEST['id'];
    if($id>5){
        echo "No s'ha trobat";
    }

}
$data = test();

foreach ($data as $key=> $value){
    ?> <div class="row">
    <div class="col-md-7">
      <a href="#">
        <img class="img-fluid rounded mb-3 mb-md-0" src="<?= $value["filePath"] ?>" alt="imatge restaurant">
      </a>
    </div>
    <div class="col-md-5">
    <ul class="list-group list-group-flush">
      <!-- Nom restaurant -->
      <li class="list-group-item">  <h3><?= $value["id"] ?></h3>  </li>
      <li class="list-group-item">  <h5><?= $value["name"] ?> </h5> </li>
      <li class="list-group-item">  <h5> <?= $value["description"] ?></h5> </li>
      <li class="list-group-item">  <h5> <?= $value["phoneNumber"] ?> </h5> </li>
      <li class="list-group-item">  <h5> <?= $value["locality"] ?> </h5> </li>
      </ul>
    </div>
  </div>
  <br>
  <br>
<?php
}
?>