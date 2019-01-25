<?php
require_once "connection.php";

$data=[];
function getRestaurants(){
    global $filtre;
    global $db;
    global $data;
    $sql= "SELECT restaurant.description, restaurant.id, restaurant.locality,
     restaurant.name, restaurant.phoneNumber, image.filePath from restaurant 
    inner JOIN image WHERE image.restaurantId=restaurant.id" ;
    $result= mysqli_query($db,$sql);

while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}
mysqli_free_result($result);
mysqli_close($db);
return $data;
}

$restaurant=[];
function getRestaurant($id_rest){
    global $db;
    global $restaurant;
    $sql="SELECT restaurant.description, restaurant.id, restaurant.locality,
    restaurant.name, restaurant.phoneNumber, image.filePath from restaurant 
   inner JOIN image WHERE image.restaurantId=restaurant.id AND restaurant.id=$id_rest" ;
   $result= mysqli_query($db,$sql);

while ($row= mysqli_fetch_assoc($result)){
    $restaurant[] = $row;
}
mysqli_free_result($result);
mysqli_close($db);
return $restaurant;
}
?>