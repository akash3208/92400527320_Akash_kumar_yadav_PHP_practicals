<?php
// 3.8 Write a PHP script, which will store a cookie on the client's device
// to identify whether the user is a new one or a repeated one.

if (isset($_COOKIE["visitor"]))
{
    echo "<h2>Welcome Back!</h2>";
    echo "You are a repeated user.";
}
else
{
    // Create cookie for 1 day
    setcookie("visitor", "visited", time() + (86400));

    echo "<h2>Welcome!</h2>";
    echo "You are a new user.";
}
?>