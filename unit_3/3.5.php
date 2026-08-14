<?php
// 3.5 Write a PHP script to create a session.

session_start();

// Create Session
$_SESSION["username"] = "Akash";
$_SESSION["course"] = "BCA";

echo "<h2>Session Created Successfully</h2>";
echo "Username: " . $_SESSION["username"] . "<br>";
echo "Course: " . $_SESSION["course"];
?>