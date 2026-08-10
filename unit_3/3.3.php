<?php
// 3.3 Write a PHP script to use cookie with header.

// Create Cookie (valid for 1 hour)
setcookie("username", "Akash", time() + 3600);

// Redirect to another page using header()
header("Location: home.php");

exit();
?>

//home.php?


<?php
if (isset($_COOKIE["username"]))
{
    echo "<h2>Welcome " . $_COOKIE["username"] . "</h2>";
}
else
{
    echo "Cookie not found.";
}
?>
