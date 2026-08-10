//2.2 Write a PHP code for sorting an array entered by user.

<!DOCTYPE html>
<html>
<head>
    <title>Sort Array in PHP</title>
</head>
<body>

<form method="post">
    Enter numbers (comma separated): <br>
    <input type="text" name="numbers" placeholder="10,5,8,2,15" required>
    <br><br>
    <input type="submit" name="sort" value="Sort Array">
</form>

<?php
if (isset($_POST['sort'])) {

    // Get user input
    $input = $_POST['numbers'];

    // Convert string to array
    $array = explode(",", $input);

    // Sort array in ascending order
    sort($array);

    echo "<h3>Sorted Array:</h3>";
    foreach ($array as $value) {
        echo $value . " ";
    }
}
?>

</body>
</html>