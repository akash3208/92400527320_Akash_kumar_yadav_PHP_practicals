//2.6 Write a PHP code for user define function for calculator, take input from
user by creating simple html form.

<!DOCTYPE html>
<html>
<head>
    <title>Calculator using User Defined Function</title>
</head>
<body>

<h2>Simple Calculator</h2>

<form method="post">
    Enter First Number:
    <input type="number" name="num1" required><br><br>

    Enter Second Number:
    <input type="number" name="num2" required><br><br>

    Select Operation:
    <select name="operation">
        <option value="add">Addition</option>
        <option value="sub">Subtraction</option>
        <option value="mul">Multiplication</option>
        <option value="div">Division</option>
    </select><br><br>

    <input type="submit" name="calculate" value="Calculate">
</form>

<?php
// User Defined Function
function calculator($a, $b, $op)
{
    switch ($op)
    {
        case "add":
            return $a + $b;
        case "sub":
            return $a - $b;
        case "mul":
            return $a * $b;
        case "div":
            if ($b != 0)
                return $a / $b;
            else
                return "Cannot divide by zero";
    }
}

if (isset($_POST['calculate']))
{
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    $result = calculator($num1, $num2, $operation);

    echo "<h3>Result: $result</h3>";
}
?>

</body>
</html>