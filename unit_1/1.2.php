<?php
// 1.2 Write a PHP program to find out maximum and minimum number.

$num1 = 25;
$num2 = 50;
$num3 = 15;

// Maximum Number
$max = max($num1, $num2, $num3);

// Minimum Number
$min = min($num1, $num2, $num3);

// Output
echo "Numbers: $num1, $num2, $num3 <br>";
echo "Maximum Number: " . $max . "<br>";
echo "Minimum Number: " . $min;
?>