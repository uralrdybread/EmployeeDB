<?php

$dsn = "mysql:host=localhost;dbname=mydatabase";
$dbusername = "root";
$dbpassword = "";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "SELECT * FROM employees";
    $result = $pdo->query($query);

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
