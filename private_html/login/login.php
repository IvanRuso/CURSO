<?php
session_start();
include "connection.php";
$user = $_POST['username'];
$password = $_POST['password'];
//Usamos BINARY para que la consulta solo obtenga el valor exactamente como esta almacenado en la DB
$query = "SELECT nombre FROM user WHERE BINARY username = '$user' AND BINARY password = '$password'";
$result = mysqli_query($connection, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['nombre'] = $row['nombre'];
    header("location: ../../public_html/PHP/resultado.php");
} else {
    echo "<script>alert('Usuario o contraseña incorrectas. Por favor, inténtalo de nuevo.'); window.location = '../../public_html/PHP/index.html';</script>";
}
?>