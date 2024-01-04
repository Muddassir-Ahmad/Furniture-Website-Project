<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST["name"]);
    $number = htmlspecialchars($_POST["number"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Validate and process the form data
    if (!empty($name) && !empty($message)) {
        // Database connection details (assuming they're included in config.php)
        // $servername, $username, $password, and $dbname should be defined in config.php

        // Create a database connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Validate mobile number using regular expression
        $mobilePattern = "/(\+88-|\+88)?01[3-9]\d{8}/";
        if (!preg_match($mobilePattern, $number)) {
            echo "<script>alert('Invalid mobile number!'); window.location.href = 'contact.php';</script>";
        } else {
            // Prepare and execute the SQL statement to insert data into the 'contact' table
            $sql = "INSERT INTO contact (name, number, email, message) VALUES (?, ?, ?, ?)";
            
            // Use prepared statements to prevent SQL injection
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssss", $name, $number, $email, $message);
            if ($stmt->execute()) {
                // Close the statement and database connection
                $stmt->close();
                $conn->close();

                // Show a success message and redirect after the user clicks OK
                echo "<script>alert('Submitted successfully!'); window.location.href = 'contact.php';</script>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    } else {
        // Handle form validation errors
        echo "Please fill out name and message fields.";
    }
}
?>
