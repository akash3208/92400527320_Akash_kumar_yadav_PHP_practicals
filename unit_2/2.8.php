//2.8 Write a PHP code to use mysql date and time functions as given bellow:
//1) DAYOFWEEK()
//2) WEEKDAY()
//3) DAYOFMONTH()
//4) DAYOFYEAR()
//5) DAYNAME()

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

// Query using current date
$sql = "SELECT
DAYOFWEEK(CURDATE()) AS dayofweek,
WEEKDAY(CURDATE()) AS weekday,
DAYOFMONTH(CURDATE()) AS dayofmonth,
DAYOFYEAR(CURDATE()) AS dayofyear,
DAYNAME(CURDATE()) AS dayname";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

echo "<b>1. DAYOFWEEK():</b> " . $row['dayofweek'] . "<br><br>";
echo "<b>2. WEEKDAY():</b> " . $row['weekday'] . "<br><br>";
echo "<b>3. DAYOFMONTH():</b> " . $row['dayofmonth'] . "<br><br>";
echo "<b>4. DAYOFYEAR():</b> " . $row['dayofyear'] . "<br><br>";
echo "<b>5. DAYNAME():</b> " . $row['dayname'] . "<br>";

mysqli_close($conn);
?>