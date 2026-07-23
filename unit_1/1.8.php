<?php
// 1.8 Write a PHP Program to print the values of array entered by user.
?>

<!DOCTYPE html>
<html>
<head>
    <title>Print Array Values</title>
</head>
<body>

<form method="post">
    Enter array values (comma separated):<br><br>
    <input type="text" name="arr" placeholder="10,20,30,40" required>
    <br><br>
    <input type="submit" name="submit" value="Print Array">
</form>

<?php
if (isset($_POST['submit']))
{
    $array = explode(",", $_POST['arr']);

    echo "<h3>Array Values:</h3>";

    foreach ($array as $value)
    {
        echo $value . "<br>";
    }
}
?>

</body>
</html>