<?php
// 1.5 Write a PHP program to print 5 to 10 using For and ForEach.

// Using For Loop
echo "<h2>Using For Loop</h2>";
for ($i = 5; $i <= 10; $i++)
{
    echo $i . "<br>";
}

echo "<br>";

// Using ForEach Loop
echo "<h2>Using ForEach Loop</h2>";

$numbers = array(5, 6, 7, 8, 9, 10);

foreach ($numbers as $num)
{
    echo $num . "<br>";
}
?>