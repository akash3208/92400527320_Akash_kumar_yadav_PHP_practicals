<?php
// 4.6 Write a PHP code that Delete Data From a MySQL Table Using MySQLi and PDO

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM users WHERE id = 1";

if ($conn->query($sql) === TRUE) {
    echo "Data deleted using MySQLi<br>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "DELETE FROM users WHERE id = 2";
    $pdo->exec($sql);

    echo "Data deleted using PDO";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>