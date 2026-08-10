//2.7 Write a PHP code to use mysql string manipulation functions as given
//bellow:
//1) Length()
//2) concat()
//3) concat_ws()
//4) trim(),rtrim(),ltrim()
//5) lpad(),rpad(),locate()

<?php
// MySQL String Manipulation Functions in PHP

$servername = "localhost";
$username = "root";
$password = "";
$database = "test";   // Change database name if needed

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

echo "<h2>MySQL String Functions</h2>";

// 1. LENGTH()
$result = mysqli_query($conn, "SELECT LENGTH('Hello PHP') AS len");
$row = mysqli_fetch_assoc($result);
echo "<b>1. LENGTH():</b> " . $row['len'] . "<br><br>";

// 2. CONCAT()
$result = mysqli_query($conn, "SELECT CONCAT('Hello',' ','World') AS text");
$row = mysqli_fetch_assoc($result);
echo "<b>2. CONCAT():</b> " . $row['text'] . "<br><br>";

// 3. CONCAT_WS()
$result = mysqli_query($conn, "SELECT CONCAT_WS('-', '2026','07','23') AS text");
$row = mysqli_fetch_assoc($result);
echo "<b>3. CONCAT_WS():</b> " . $row['text'] . "<br><br>";

// 4. TRIM(), LTRIM(), RTRIM()
$result = mysqli_query($conn, "SELECT 
TRIM('   PHP   ') AS t,
LTRIM('   PHP') AS lt,
RTRIM('PHP   ') AS rt");
$row = mysqli_fetch_assoc($result);

echo "<b>4. TRIM():</b> '" . $row['t'] . "'<br>";
echo "<b>LTRIM():</b> '" . $row['lt'] . "'<br>";
echo "<b>RTRIM():</b> '" . $row['rt'] . "'<br><br>";

// 5. LPAD(), RPAD(), LOCATE()
$result = mysqli_query($conn, "SELECT
LPAD('PHP',8,'*') AS lp,
RPAD('PHP',8,'*') AS rp,
LOCATE('PHP','Welcome to PHP') AS pos");

$row = mysqli_fetch_assoc($result);

echo "<b>5. LPAD():</b> " . $row['lp'] . "<br>";
echo "<b>RPAD():</b> " . $row['rp'] . "<br>";
echo "<b>LOCATE():</b> " . $row['pos'] . "<br>";

mysqli_close($conn);
?>