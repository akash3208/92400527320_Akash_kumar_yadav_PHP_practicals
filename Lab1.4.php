<?php
$month = date("n");

if ($month == 1) {
    echo "January<br>";
} elseif ($month == 2) {
    echo "February<br>";
} elseif ($month == 3) {
    echo "March<br>";
} else {
    echo "Other Month<br>";
}

switch ($month) {
    case 1:
        echo "January";
        break;
    case 2:
        echo "February";
        break;
    case 3:
        echo "March";
        break;
    default:
        echo "Other Month";
}
?>