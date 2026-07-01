<!DOCTYPE html>
<html>
<body>

<form method="post">
    Enter Array 1:
    <input type="text" name="arr1" required><br><br>

    Enter Array 2:
    <input type="text" name="arr2" required><br><br>

    <input type="submit" value="Merge">
</form>

<?php
if(isset($_POST['arr1']) && isset($_POST['arr2']))
{
    $arr1 = explode(",", $_POST['arr1']);
    $arr2 = explode(",", $_POST['arr2']);

    $merged = array_merge($arr1, $arr2);

    echo "<h3>Merged Array:</h3>";
    foreach($merged as $value)
    {
        echo $value . " ";
    }
}
?>

</body>
</html>