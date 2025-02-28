<?php
// controllers/login.php

session_start(); // Iniciar la sesión

// Incluir la conexión a la base de datos
require 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validar las credenciales
    $sql = "SELECT * FROM usuarios WHERE nombre_usuario = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verificar la contraseña (asumiendo que está almacenada en texto plano)
        if ($password === $user['contraseña']) {
            // Credenciales válidas
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $user['nombre_usuario'];
            header("Location: ../public/isloggedView.html"); // Redirigir al usuario
            exit;
        } else {
            // Contraseña incorrecta
            echo "Contraseña incorrecta.";
        }
    } else {
        // Usuario no encontrado
        echo "Usuario no encontrado.";
    }
}
?>