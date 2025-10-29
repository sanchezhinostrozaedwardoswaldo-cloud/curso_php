<?php
$host = "localhost";
$usuario = "root";
$password = "29oswaldo2006";
$baseDeDatos = "institucion_educativa";

try {
    $conn = new PDO("mysql:host=$host;dbname=$baseDeDatos;charset=utf8", $usuario, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("❌ Error de conexión: " . $e->getMessage());
}
?>
