<?php
// 4.4 Write a program that Demonstrate PHP MySQL Prepared Statements

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO users (username, password, email) VALUES (?, ?, ?)");

$user = "john";
$pass = "12345";
$email = "john@gmail.com";

$stmt->bind_param("sss", $user, $pass, $email);

if ($stmt->execute()) {
    echo "Data inserted successfully using prepared statement";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>