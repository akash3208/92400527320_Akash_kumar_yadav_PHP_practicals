#5. Write a PHP program to print 5 to 10 using For and ForEach.
<?php
echo "For Loop:<br>";

for ($i = 5; $i <= 10; $i++) {
    echo $i . " ";
}

echo "<br>Foreach:<br>";

$arr = range(5, 10);

foreach ($arr as $num) {
    echo $num . " ";
}
?>
