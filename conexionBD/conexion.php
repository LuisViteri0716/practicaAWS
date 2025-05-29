<?php
$host = getenv('MYSQL_HOST');
$dbname = getenv('MYSQL_DATABASE');
$user = getenv('MYSQL_USER');
$password = getenv('MYSQL_PASSWORD');

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa a la base de datos!";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>