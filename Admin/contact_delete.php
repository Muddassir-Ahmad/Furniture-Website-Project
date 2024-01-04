<?php
// Include your database connection file
include '../config.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    // Get the ID of the contact to be deleted
    $contact_id = $_GET['id'];

    // SQL query to delete the contact from the database
    $sql = "DELETE FROM `contact` WHERE id = $contact_id";

    if (mysqli_query($conn, $sql)) {
        // If deletion is successful, redirect to the main contact list page
        header("Location: viewContact.php");
        exit();
    } else {
        // If an error occurs during deletion, handle it accordingly (you can display an error message)
        echo "Error deleting contact: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>
