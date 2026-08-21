<?php
// 4.3 Write a PHP program that Insert Data Into MySQL Using MySQLi and PDO

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (username, password, email)
        VALUES ('akash', '12345', 'akash@gmail.com')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted using MySQLi<br>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO users (username, password, email)
            VALUES ('rahul', '12345', 'rahul@gmail.com')";

    $pdo->exec($sql);

    echo "Data inserted using PDO";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>