<!DOCTYPE html>
<html>
<body>

<form method="post">
    Enter Name:
    <input type="text" name="name">
    <input type="submit" value="Submit">
</form>

<?php
if(isset($_POST['name']))
{
    echo "Name: " . $_POST['name'];
}
?>

</body>
</html>