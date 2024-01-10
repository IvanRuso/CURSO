<?php
$host_db = "localhost:3306";
$user_db = "root";
$pass_db = "ivansoto6";
$db_name = "curso";
$tbl_name = "user";
$connection = new mysqli($host_db, $user_db, $pass_db, $db_name); 

if ($connection->connect_error) {
 die("La conexion con la base de datos falló: " . $connection->connect_error);
}
?>