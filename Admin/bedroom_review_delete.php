<?php
include '../config.php';
$id = $_GET['id'];

// Delete from the child table first
$delete_images_query = "DELETE FROM bedroom_review_images WHERE review_id='$id'";
mysqli_query($conn, $delete_images_query);

// Then delete from the parent table
$delete_query = "DELETE FROM bedroom_reviews WHERE id='$id'";
mysqli_query($conn, $delete_query);

// Redirect to the index page
header("location:bedroom_review.php");

?>