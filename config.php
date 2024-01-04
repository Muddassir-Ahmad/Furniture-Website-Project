
<?php
$servername = "localhost";
$username = "u994017749_root";
$password = "Ittadi1124@";
$dbname = "u994017749_ittadi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
