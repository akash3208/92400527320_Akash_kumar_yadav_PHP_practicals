<?php
// 3.4 Write a PHP script to delete a cookie.

// Delete the cookie by setting its expiry time in the past
setcookie("username", "", time() - 3600);

echo "Cookie Deleted Successfully!";
?>