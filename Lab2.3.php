#3. Create a function named calculatePercentage() that: Accepts marks of 5 subjects. Calculates total marks. Returns percentage.

<?php
function calculatePercentage($m1, $m2, $m3, $m4, $m5)
{
    $total = $m1 + $m2 + $m3 + $m4 + $m5;
    $percentage = ($total / 500) * 100;

    echo "Total Marks: $total\n";
    return $percentage;
}

$result = calculatePercentage(80, 75, 90, 85, 70);

echo "Percentage: $result%";
?>