<?php
require_once "connection.php";

function test(){
    global $db;
    $data=[];
    $sql= "SELECT * from restaurant";
    $result= mysqli_query($db, $sql);

while ($row = mysqli_fetch_array($result)) {
    $data[] = $row;
}
mysqli_free_result($result);
mysqli_close($db);
return $data;
}

test();
?>