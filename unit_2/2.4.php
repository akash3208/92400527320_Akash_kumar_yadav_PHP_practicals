//2.4 Write a that demonstrate the use of following string functions:
//1) strlen() // any string
//2) strpos() //find some specific word,letter
//3) str_word_count()
//4) strrev()
//5) strtolower()
//6) strtoupper()


<?php
// String for demonstration
$str = "Hello Welcome to PHP Programming";

// 1. strlen()
echo "<h3>1. strlen()</h3>";
echo "String: $str <br>";
echo "Length: " . strlen($str);

echo "<hr>";

// 2. strpos()
echo "<h3>2. strpos()</h3>";
echo "Position of 'PHP': " . strpos($str, "PHP");

echo "<hr>";

// 3. str_word_count()
echo "<h3>3. str_word_count()</h3>";
echo "Number of words: " . str_word_count($str);

echo "<hr>";

// 4. strrev()
echo "<h3>4. strrev()</h3>";
echo "Reversed String: " . strrev($str);

echo "<hr>";

// 5. strtolower()
echo "<h3>5. strtolower()</h3>";
echo strtolower($str);

echo "<hr>";

// 6. strtoupper()
echo "<h3>6. strtoupper()</h3>";
echo strtoupper($str);
?>