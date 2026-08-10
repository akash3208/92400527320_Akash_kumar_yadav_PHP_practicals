//2.3 Write a program to perform following array functions:
//1) array_change_key_case($var, CASE_LOWER/CASE_UPPER).
//2) array_chunk($var,size) //array of months
//3) array_count_values()
//4) array_pop()
//5) array_push()
//6) array_unshift()
//7) array_shift()

<?php
// Original Arrays
$arr1 = array("Name" => "Akash", "City" => "Surat", "Course" => "BCA");
$months = array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
$fruits = array("Apple","Banana","Apple","Mango","Banana","Apple");
$colors = array("Red","Green","Blue");
$courses = array("BCA","BBA","BCom");

// 1. array_change_key_case()
echo "<h3>1. array_change_key_case()</h3>";
echo "<b>Lower Case Keys:</b><br>";
print_r(array_change_key_case($arr1, CASE_LOWER));

echo "<br><b>Upper Case Keys:</b><br>";
print_r(array_change_key_case($arr1, CASE_UPPER));

echo "<hr>";

// 2. array_chunk()
echo "<h3>2. array_chunk()</h3>";
$result = array_chunk($months, 3);
print_r($result);

echo "<hr>";

// 3. array_count_values()
echo "<h3>3. array_count_values()</h3>";
$result = array_count_values($fruits);
print_r($result);

echo "<hr>";

// 4. array_pop()
echo "<h3>4. array_pop()</h3>";
echo "Before:<br>";
print_r($colors);

array_pop($colors);

echo "<br>After array_pop():<br>";
print_r($colors);

echo "<hr>";

// 5. array_push()
echo "<h3>5. array_push()</h3>";
array_push($colors, "Yellow", "Black");

print_r($colors);

echo "<hr>";

// 6. array_unshift()
echo "<h3>6. array_unshift()</h3>";
array_unshift($courses, "BSc");

print_r($courses);

echo "<hr>";

// 7. array_shift()
echo "<h3>7. array_shift()</h3>";
array_shift($courses);

print_r($courses);

?>