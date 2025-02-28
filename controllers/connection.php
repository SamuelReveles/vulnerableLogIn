<?php
// controllers/connection.php

$host = "localhost"; // Servidor de la base de datos
$dbname = "login";   // Nombre de la base de datos
$username = "root";  // Usuario de MySQL (por defecto en XAMPP es "root")
$password = "";      // Contraseña de MySQL (por defecto en XAMPP está vacía)

try {
    // Crear una conexión PDO
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Configurar el modo de error para lanzar excepciones
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     echo "Conexión exitosa"; // Opcional: para verificar la conexión
} catch (PDOException $e) {
    // En caso de error, mostrar el mensaje
    die("Error de conexión: " . $e->getMessage());
}
?>