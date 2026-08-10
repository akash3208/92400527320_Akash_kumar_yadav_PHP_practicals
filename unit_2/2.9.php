//2.9 Write a PHP code to use mysql date and time functions as given bellow:
//1) HOUR()
//2) MINUTE()
//3) SECOND()
//4) DATE_FORMAT()
//5) DATE_SUB()

<?php
// PHP Program to demonstrate MySQL Date and Time Functions

$servername = "localhost";
$username = "root";
$password = "";
$database = "test";   // Change database name if required

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

echo "<h2>MySQL Date and Time Functions</h2>";

// Query
$sql = "SELECT
HOUR(NOW()) AS hr,
MINUTE(NOW()) AS min,
SECOND(NOW()) AS sec,
DATE_FORMAT(NOW(), '%d-%m-%Y %H:%i:%s') AS formatted_date,
DATE_SUB(CURDATE(), INTERVAL 10 DAY) AS sub_date";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

echo "<b>1. HOUR():</b> " . $row['hr'] . "<br><br>";
echo "<b>2. MINUTE():</b> " . $row['min'] . "<br><br>";
echo "<b>3. SECOND():</b> " . $row['sec'] . "<br><br>";
echo "<b>4. DATE_FORMAT():</b> " . $row['formatted_date'] . "<br><br>";
echo "<b>5. DATE_SUB():</b> " . $row['sub_date'] . "<br>";

mysqli_close($conn);
?>