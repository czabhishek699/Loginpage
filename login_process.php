<?php
session_start(); // Start a session (if not already started)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate username and password (You should replace this with your own validation logic)
    if ($username === "your_username" && $password === "your_password") {
        // Authentication successful, set a session variable to track the user's login status
        $_SESSION["loggedin"] = true;

        // Redirect the user to a protected page (e.g., their profile)
        header("Location: profile.php");
        exit();
    } else {
        // Invalid credentials, show an error message
        echo "Invalid username or password.";
    }
}
?>
