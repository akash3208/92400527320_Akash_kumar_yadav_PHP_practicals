<?php
// 1.9 Write a PHP Program to reverse an array values entered by user.
?>

<!DOCTYPE html>
<html>
<head>
    <title>Reverse Array</title>
</head>
<body>

<form method="post">
    Enter array values (comma separated):<br><br>
    <input type="text" name="arr" placeholder="10,20,30,40" required>
    <br><br>
    <input type="submit" name="submit" value="Reverse Array">
</form>

<?php
if (isset($_POST['submit']))
{
    $array = explode(",", $_POST['arr']);

    $reverse = array_reverse($array);

    echo "<h3>Reversed Array:</h3>";

    foreach ($reverse as $value)
    {
        echo $value . "<br>";
    }
}
?>

</body>
</html>