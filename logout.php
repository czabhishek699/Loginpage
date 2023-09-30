<?php
session_start(); // Start a session (if not already started)

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect the user to the login page
header("Location: login.html");
exit();
?>
