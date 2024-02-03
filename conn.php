<?php

session_start();

$user = "root";
$password = "";
$database = "login";
$host = "localhost";

global $pdo;

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

//Sempre nessa ordem
// $mysqli = new mysqli($host, $user, $password, $database);

// if($mysqli->error)
// {
//     die("Failed to connect to MySQL:" . $mysqli->error);
// }

try {
    //Usando PDO
    $pdo = new PDO("mysql:dbname=" . $database . "; host=" . $host, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "ERRO: " . $e->getMessage();
    exit;
}
