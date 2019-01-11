<?php
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "mpuig");
$db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
else{ 
    echo "HA ANAT DE PUTA MARE";
}
?>
