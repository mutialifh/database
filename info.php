<?php
function getConnection(): PDO
{
    $host = "localhost";
    $port = 3306;
    $database = "database_php";
    $username = "root";
    $password = "";

try {
    $connection = new PDO("mysql:host=$host;port=$port;dbname=$database", $username, $password);
    echo "Sukses terkoneksi ke database" . PHP_EOL;

    // menutup koneksi
    $connection = null;
} catch (PDOException $exception) {
    echo "Error terkoneksi ke database : " . $exception->getMessage() . PHP_EOL;
}
}
getConnection();