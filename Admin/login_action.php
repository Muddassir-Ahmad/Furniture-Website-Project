<?php
session_start();

// Simulated hashed password (replace this with a secure hash)
$hashedPassword = password_hash('Admin@@2024', PASSWORD_DEFAULT);

// Simulated username and hashed password (replace these with your secure credentials)
$validUsername = 'ITTADI';
$validPassword = $hashedPassword;

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and sanitize inputs
    $enteredUsername = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $enteredPassword = $_POST['password'];

    // Verify entered password against hashed password
    if ($enteredUsername && $enteredPassword &&
        $enteredUsername === $validUsername && password_verify($enteredPassword, $validPassword)) {

        // Set session variables
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $enteredUsername;

        // Regenerate session ID to prevent session fixation
        session_regenerate_id(true);

        // Redirect to dashboard.php on successful login
        header('Location: dashboard.php');
        exit;
    } else {
        // Redirect back to login page with generic error message
        $_SESSION['error'] = "Invalid username or password. Please try again.";
    header('Location: Admin_Login.php');
        exit;
    }
} else {
    // Redirect back to login page if accessed directly without POST request
    header('Location: Admin_Login.php');
    exit;
}
?>
