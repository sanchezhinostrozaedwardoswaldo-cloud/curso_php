<?php
$host="localhost";//o la IP del servidor de base de datos
$usuario="root";// o el usuario de la base de datos
$password=""; //o la contraseña del ususario
$baseDeDatos="gestion_empleados"; // o el nombre de la base de datos

try {
    //Crear la conexión
    $conexion = new PDO("mysql:host=$host;dbname=$baseDeDatos", $usuario, $password);
    //Configurar el modo de error de PDO a excepción
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<h3>Conexión exitosa a la base de datos gestion_empleados!.....</h3><br>";
    echo "<p>Usando PDO</p>";
    echo "<p>Bienvenidos</p><br>";
} catch (PDOException $e) {
    echo "Error de conexión gestion_empleados: " . $e->getMessage();
}

?>