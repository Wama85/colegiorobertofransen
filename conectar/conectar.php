<?php
$servername = "localhost";
$username = "root";
$password = "5951561010";
$dbname = "bd_colfransen";

try {
    // Crear conexión
    $conexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Establecer el modo de error PDO a excepción
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>

