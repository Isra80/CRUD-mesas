<?php
$host = "localhost";
$dbname = "mesas";
$username = "root";
$password = "Mahdi6jafet";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error al conectarse a la base de datos: " . $e->getMessage();
}
?>
