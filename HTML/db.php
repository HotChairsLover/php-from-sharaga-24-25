<?php
$db_host = "localhost";
$db_database = "mydb";
$db_user = "root";
$db_password = "";

$db_server = mysqli_connect($db_host, $db_user, $db_password, $db_database)
or die (mysqli_connect_error());
mysqli_set_charset($db_server, "utf8");
?>