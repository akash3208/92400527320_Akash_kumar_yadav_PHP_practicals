<!DOCTYPE html>
<html>
<body>

<form method="post">
    Enter Array Elements (comma separated):
    <input type="text" name="arr" required>
    <input type="submit" value="Print">
</form>

<?php
if(isset($_POST['arr']))
{
    $arr = explode(",", $_POST['arr']);

    echo "<h3>Array Values:</h3>";
    foreach($arr as $value)
    {
        echo $value . " ";
    }
}
?>

</body>
</html>