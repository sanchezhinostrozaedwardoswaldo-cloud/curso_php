<?php
$host="localhost";//o la IP del servidor de base de datos
$usuario="root";// o el usuario de la base de datos
$password=""; //o la contraseña del ususario
$baseDeDatos="gestion_empleados"; // o el nombre de la base de datos

//Crear la conexión
$conexion = new mysqli($host, $usuario, $password, $baseDeDatos);

//Verificar conexion
if ($conexion->connect_error) {
    die("Error de conexión gestion_empleados: " . $conexion->connect_error);
}
echo "<h3>Conexión exitosa a la base de datos gestion_empleados!.....</h3><br>";
echo "<p>Usando MySQLi</p>";
echo "<p>Bienvenidos</p><br>";
?>