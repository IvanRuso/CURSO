<?php 
session_start();
if (!isset($_SESSION['nombre'])) {
    header("Location: ../../public_html/PHP/index.html"); // Redirige a la página de inicio de sesión si no hay una sesión activa
    exit();
}
include 'head2.html';
 
//recibimos datos desde el index.php usando el metodo POST
/*
$nombre     = $_POST['nombre'];
$edad       = $_POST['edad'];
$correo     = $_POST['correo'];
$contraseña = $_POST['contraseña'];
*/
/*
echo "<p> Hola bebe como has estado: $nombre</p>";
echo "<p> Mi edad es: $edad</p>";
echo "<p> Mi correo es: $correo</p>";
echo "<p> Mi contraseña es: $contraseña</p>";
*/
//mostrando metodos recibidos
?>
<div><?php echo substr($_SESSION['nombre'], 0, 15); ?></div>
<a href = 'index.php'> Back </a> 

