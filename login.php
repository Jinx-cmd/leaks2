<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if username and password are provided
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        // Retrieve username and password from the form
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Validate username and password (this is just a simple example)
        if ($username === "admin" && $password === "password") {
            // Start a session
            session_start();
            
            // Store username in session variable
            $_SESSION["username"] = $username;

            // Redirect to dashboard or any other authenticated page
            header("Location: dashboard.php");
            exit;
        } else {
            // Invalid username or password, redirect back to login page with an error message
            header("Location: login.html?error=invalid");
            exit;
        }
    } else {
        // Username or password not provided, redirect back to login page with an error message
        header("Location: login.html?error=empty");
        exit;
    }
} else {
    // Redirect back to login page if accessed directly without submitting the form
    header("Location: login.html");
    exit;
}

