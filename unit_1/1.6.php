<?php
// 1.6 Write a PHP program to print 15 to 20 using While and Do While.

// Using While Loop
echo "<h2>Using While Loop</h2>";

$i = 15;
while ($i <= 20)
{
    echo $i . "<br>";
    $i++;
}

echo "<br>";

// Using Do While Loop
echo "<h2>Using Do While Loop</h2>";

$j = 15;
do
{
    echo $j . "<br>";
    $j++;
} while ($j <= 20);
?>