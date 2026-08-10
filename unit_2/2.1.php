//Write a PHP code to create numeric array for Monday to Saturday,
//associative array for month with total days of month such as
//January=>30,February=>28 upto December and multidimensional array
//for laptop along with company name inside that model and price(any
//two companies).

<?php
// 1. Numeric Array (Monday to Saturday)
$days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

echo "<h3>Numeric Array (Days)</h3>";
print_r($days);

echo "<br><br>";

// 2. Associative Array (Months with Total Days)
$months = array(
    "January" => 31,
    "February" => 28,
    "March" => 31,
    "April" => 30,
    "May" => 31,
    "June" => 30,
    "July" => 31,
    "August" => 31,
    "September" => 30,
    "October" => 31,
    "November" => 30,
    "December" => 31
);

echo "<h3>Associative Array (Months and Days)</h3>";
foreach ($months as $month => $daysCount) {
    echo $month . " => " . $daysCount . "<br>";
}

echo "<br>";

// 3. Multidimensional Array (Laptop Details)
$laptops = array(
    "Dell" => array(
        "Model" => "Inspiron 15",
        "Price" => 55000
    ),
    "HP" => array(
        "Model" => "Pavilion 14",
        "Price" => 60000
    )
);

echo "<h3>Multidimensional Array (Laptop Details)</h3>";
foreach ($laptops as $company => $details) {
    echo "Company: " . $company . "<br>";
    echo "Model: " . $details["Model"] . "<br>";
    echo "Price: ₹" . $details["Price"] . "<br><br>";
}
?>