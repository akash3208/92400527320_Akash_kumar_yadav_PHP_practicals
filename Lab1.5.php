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