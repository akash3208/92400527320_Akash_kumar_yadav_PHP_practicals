// 1.1 Write a PHP program for print Previous semester Result using variables & constants in PHP.

<?php
// Constant
define("UNIVERSITY", "Marwadi University");

// Variables
$name = "Akash";
$semester = "Semester 4";
$percentage = 78.50;
$result = "Pass";

// Output
echo "<h2>Previous Semester Result</h2>";
echo "University: " . UNIVERSITY . "<br>";
echo "Student Name: " . $name . "<br>";
echo "Semester: " . $semester . "<br>";
echo "Percentage: " . $percentage . "%<br>";
echo "Result: " . $result;
?>