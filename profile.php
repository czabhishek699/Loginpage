<?php
session_start(); // Start a session (if not already started)

// Check if the user is logged in
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile Page</title>
</head>
<body>
    <h2>Welcome to Your Profile</h2>
    <!-- Add content for the user's profile page here -->
    <p>This is your protected profile page.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
