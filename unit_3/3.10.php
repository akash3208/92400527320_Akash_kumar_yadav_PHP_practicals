<?php
// 3.10 Write a PHP script to store the details of a registration form
// into the users table of a database.

$servername = "localhost";
$username = "root";
$password = "";
$database = "test";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn)
{
    die("Connection Failed: " . mysqli_connect_error());
}

if (isset($_POST['register']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $sql = "INSERT INTO users(name, email, password)
            VALUES('$name', '$email', '$pass')";

    if (mysqli_query($conn, $sql))
    {
        echo "Registration Successful!";
    }
    else
    {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>

<h2>User Registration Form</h2>

<form method="post">
    Name:
    <input type="text" name="name" required><br><br>

    Email:
    <input type="email" name="email" required><br><br>

    Password:
    <input type="password" name="password" required><br><br>

    <input type="submit" name="register" value="Register">
</form>

</body>
</html>

//Run this SQL first in phpMyAdmin:

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    password VARCHAR(100)
);