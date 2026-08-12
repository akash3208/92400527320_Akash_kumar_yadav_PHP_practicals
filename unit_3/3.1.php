<?php
// 3.1 Write a PHP script to create cookie in a form.

if(isset($_POST['submit']))
{
    $name = $_POST['name'];

    // Create Cookie (Valid for 1 hour)
    setcookie("username", $name, time() + 3600);

    echo "Cookie Created Successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Cookie</title>
</head>
<body>

<h2>Create Cookie</h2>

<form method="post">
    Enter Name:
    <input type="text" name="name" required><br><br>

    <input type="submit" name="submit" value="Create Cookie">
</form>

</body>
</html>