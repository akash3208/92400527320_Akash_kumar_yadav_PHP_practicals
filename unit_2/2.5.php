//2.5 Write a PHP code for Type casting with settype, gettype function

<?php
// PHP Program for Type Casting using settype() and gettype()

$value = "123";   // String

echo "<h2>Type Casting Example</h2>";

// Before Type Casting
echo "Original Value: " . $value . "<br>";
echo "Original Data Type: " . gettype($value) . "<br><br>";

// Convert String to Integer
settype($value, "integer");
echo "After settype() to Integer:<br>";
echo "Value: " . $value . "<br>";
echo "Data Type: " . gettype($value) . "<br><br>";

// Convert Integer to Float
settype($value, "float");
echo "After settype() to Float:<br>";
echo "Value: " . $value . "<br>";
echo "Data Type: " . gettype($value) . "<br><br>";

// Convert Float to Boolean
settype($value, "boolean");
echo "After settype() to Boolean:<br>";
echo "Value: " . $value . "<br>";
echo "Data Type: " . gettype($value);
?>