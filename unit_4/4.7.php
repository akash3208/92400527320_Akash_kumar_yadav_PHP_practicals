<?php
// 4.7 Write a program that Update Data In a MySQL Table Using MySQLi and PDO

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE users SET email = 'newemail@gmail.com' WHERE id = 1";

if ($conn->query($sql) === TRUE) {
    echo "Data updated using MySQLi<br>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE users SET email = 'updated@gmail.com' WHERE id = 2";
    $pdo->exec($sql);

    echo "Data updated using PDO";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>