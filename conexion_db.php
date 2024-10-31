<?php
$host = 'localhost';
$db = 'libreria_kisomi'; 
$user = 'root'; 
$password = '46840711'; 

try {
    // Crear una nueva conexión PDO
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage()); 
}

?>
