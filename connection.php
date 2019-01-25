<?php
define("DB_HOST", "localhost");
define("DB_USER", "mpuig");
define("DB_PASS", "martids55");
define("DB_NAME", "mpuig");
$db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($db,"utf8");
?>
