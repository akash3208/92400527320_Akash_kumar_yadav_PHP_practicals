<?php

$str = "Welcome to PHP Programming";

echo "Original String: " . $str . "<br><br>";

echo "1. String Length: " . strlen($str) . "<br>";

echo "2. Position of 'PHP': " . strpos($str, "PHP") . "<br>";

echo "3. Word Count: " . str_word_count($str) . "<br>";

echo "4. Reverse String: " . strrev($str) . "<br>";

echo "5. Lowercase: " . strtolower($str) . "<br>";

echo "6. Uppercase: " . strtoupper($str);

?>