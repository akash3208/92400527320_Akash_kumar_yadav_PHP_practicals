<?php
// 3.6 Write a PHP script to destroy a session.

session_start();

// Destroy the session
session_destroy();

echo "Session Destroyed Successfully!";
?>