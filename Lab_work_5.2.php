<!DOCTYPE html>
<html>
<body>

<form method="post">
    Enter Array Elements (comma separated):
    <input type="text" name="arr" required>
    <input type="submit" value="Reverse">
</form>

<?php
if(isset($_POST['arr']))
{
    $arr = explode(",", $_POST['arr']);
    $reverse = array_reverse($arr);

    echo "<h3>Reversed Array:</h3>";
    foreach($reverse as $value)
    {
        echo $value . " ";
    }
}
?>

</body>
</html>