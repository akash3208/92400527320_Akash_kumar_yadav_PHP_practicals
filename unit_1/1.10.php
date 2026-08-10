<?php
// 1.10 Write a PHP Program to merge two arrays.
?>

<!DOCTYPE html>
<html>
<head>
    <title>Merge Two Arrays</title>
</head>
<body>

<form method="post">
    Enter First Array (comma separated):<br><br>
    <input type="text" name="arr1" placeholder="10,20,30" required>
    <br><br>

    Enter Second Array (comma separated):<br><br>
    <input type="text" name="arr2" placeholder="40,50,60" required>
    <br><br>

    <input type="submit" name="submit" value="Merge Arrays">
</form>

<?php
if (isset($_POST['submit']))
{
    $array1 = explode(",", $_POST['arr1']);
    $array2 = explode(",", $_POST['arr2']);

    $merged = array_merge($array1, $array2);

    echo "<h3>Merged Array:</h3>";

    foreach ($merged as $value)
    {
        echo $value . "<br>";
    }
}
?>

</body>
</html>