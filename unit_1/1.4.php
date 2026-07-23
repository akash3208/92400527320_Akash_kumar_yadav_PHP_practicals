<?php
// 1.4 Write a PHP program to print current month using if..else & switch case.

$month = date("F");   // Current Month Name

echo "<h2>Current Month</h2>";
echo "Current Month: " . $month . "<br><br>";

// Using if...else
echo "<b>Using if...else:</b><br>";

if ($month == "January")
    echo "This is January";
elseif ($month == "February")
    echo "This is February";
elseif ($month == "March")
    echo "This is March";
elseif ($month == "April")
    echo "This is April";
elseif ($month == "May")
    echo "This is May";
elseif ($month == "June")
    echo "This is June";
elseif ($month == "July")
    echo "This is July";
elseif ($month == "August")
    echo "This is August";
elseif ($month == "September")
    echo "This is September";
elseif ($month == "October")
    echo "This is October";
elseif ($month == "November")
    echo "This is November";
else
    echo "This is December";

echo "<br><br>";

// Using switch case
echo "<b>Using switch case:</b><br>";

switch ($month)
{
    case "January":
        echo "This is January";
        break;
    case "February":
        echo "This is February";
        break;
    case "March":
        echo "This is March";
        break;
    case "April":
        echo "This is April";
        break;
    case "May":
        echo "This is May";
        break;
    case "June":
        echo "This is June";
        break;
    case "July":
        echo "This is July";
        break;
    case "August":
        echo "This is August";
        break;
    case "September":
        echo "This is September";
        break;
    case "October":
        echo "This is October";
        break;
    case "November":
        echo "This is November";
        break;
    case "December":
        echo "This is December";
        break;
}
?>