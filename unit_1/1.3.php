<?php
// 1.3 Write a PHP program for operators in PHP.

$a = 20;
$b = 10;

echo "<h2>Operators in PHP</h2>";

// Arithmetic Operators
echo "<b>Arithmetic Operators:</b><br>";
echo "Addition: " . ($a + $b) . "<br>";
echo "Subtraction: " . ($a - $b) . "<br>";
echo "Multiplication: " . ($a * $b) . "<br>";
echo "Division: " . ($a / $b) . "<br>";
echo "Modulus: " . ($a % $b) . "<br><br>";

// Comparison Operators
echo "<b>Comparison Operators:</b><br>";
echo "a == b : ";
var_dump($a == $b);
echo "<br>";

echo "a > b : ";
var_dump($a > $b);
echo "<br>";

echo "a < b : ";
var_dump($a < $b);
echo "<br><br>";

// Logical Operators
echo "<b>Logical Operators:</b><br>";
echo "(\$a > 10 && \$b > 5) : ";
var_dump($a > 10 && $b > 5);
echo "<br>";

echo "(\$a > 30 || \$b > 5) : ";
var_dump($a > 30 || $b > 5);
?>