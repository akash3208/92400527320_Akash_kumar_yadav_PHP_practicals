<?php
// 3.9 Create a PHP script, which will help the user to remember
// his/her username and password on the login form.

$username = "";
$password = "";

if (isset($_COOKIE["username"]))
    $username = $_COOKIE["username"];

if (isset($_COOKIE["password"]))
    $password = $_COOKIE["password"];

if (isset($_POST["login"]))
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (isset($_POST["remember"]))
    {
        // Store cookies for 1 day
        setcookie("username", $username, time() + 86400);
        setcookie("password", $password, time() + 86400);
    }

    echo "Login Successful!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Remember Me</title>
</head>
<body>

<h2>Login Form</h2>

<form method="post">
    Username:
    <input type="text" name="username" value="<?php echo $username; ?>" required>
    <br><br>

    Password:
    <input type="password" name="password" value="<?php echo $password; ?>" required>
    <br><br>

    <input type="checkbox" name="remember"> Remember Me
    <br><br>

    <input type="submit" name="login" value="Login">
</form>

</body>
</html>