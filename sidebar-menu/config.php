<?php
$servername = "localhost"; // Change if using a different host
$username = "root"; // Change if using a different username
$password = ""; // Change if using a different password
$dbname = "movaflex"; // Change to your database name

$conn = new mysqli($servername, $username, $password, $dbname);

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
