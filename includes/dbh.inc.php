<?php

$hostname = 'localhost';
$dbName = 'test_conessione';
$dbUser = 'Oksana';
$password = '8Ph26qZ5';

try {

    $pdo = new PDO("mysql:host=$hostname;dbname=$dbName", $dbUser, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
