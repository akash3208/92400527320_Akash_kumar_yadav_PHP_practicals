//2.10 Write a PHP code to use mysql date and time functions as given bellow:
//1) CURDATE()/CURRENT_DATE,
//2) CURTIME()/CURRENT_TIME(),
//3) UNIX_TIMESTAMP(),
//4) FROM_UNIXTIME()

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
CURDATE() AS current_date,
CURTIME() AS current_time,
UNIX_TIMESTAMP() AS unix_time,
FROM_UNIXTIME(UNIX_TIMESTAMP()) AS normal_time";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

echo "<b>1. CURDATE():</b> " . $row['current_date'] . "<br><br>";
echo "<b>2. CURTIME():</b> " . $row['current_time'] . "<br><br>";
echo "<b>3. UNIX_TIMESTAMP():</b> " . $row['unix_time'] . "<br><br>";
echo "<b>4. FROM_UNIXTIME():</b> " . $row['normal_time'] . "<br>";

mysqli_close($conn);
?>