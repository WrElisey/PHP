<?php
require("constants.php");
//DataBase connection
$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
if ($mysqli->connect_errno) {
    echo "Извините, возникла проблема на сайте. Мы уже пытаемся её решить:)";
    exit;
}
?>
