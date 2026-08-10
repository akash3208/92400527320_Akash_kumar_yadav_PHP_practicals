<?php
// 3.2 Write a PHP script to read the cookie of a form.

if (isset($_COOKIE['username']))
{
    echo "<h2>Cookie Value</h2>";
    echo "Welcome, " . $_COOKIE['username'];
}
else
{
    echo "Cookie is not available.";
}
?>