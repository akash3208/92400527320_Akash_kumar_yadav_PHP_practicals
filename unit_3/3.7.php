<?php
// 3.7 Write a PHP script to create a session when the user logs in using a form.
// Provide an option to logout. Once the user logs out then
// he/she should not be able to open the home page using the URL.

session_start();

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Simple Login
    if($username=="admin" && $password=="123")
    {
        $_SESSION["user"] = $username;
        header("Location: home.php");
        exit();
    }
    else
    {
        echo "Invalid Username or Password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login Form</h2>

<form method="post">
    Username:
    <input type="text" name="username" required><br><br>

    Password:
    <input type="password" name="password" required><br><br>

    <input type="submit" name="login" value="Login">
</form>

</body>
</html>

//home.php

<?php
session_start();

// Check Session
if(!isset($_SESSION["user"]))
{
    header("Location: login.php");
    exit();
}

echo "<h2>Welcome " . $_SESSION["user"] . "</h2>";
echo "<a href='logout.php'>Logout</a>";
?>

//logout.php

<?php
session_start();

// Check Session
if(!isset($_SESSION["user"]))
{
    header("Location: login.php");
    exit();
}

echo "<h2>Welcome " . $_SESSION["user"] . "</h2>";
echo "<a href='logout.php'>Logout</a>";
?>
