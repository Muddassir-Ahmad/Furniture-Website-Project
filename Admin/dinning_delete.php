<?php
include 'config.php';

// Check if an ID is passed via GET parameter
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $product_id = $_GET['id'];

    // Connect to your database here (you'll need your database connection logic)

    // Delete data from dinning_review_images table associated with dinning_reviews table
    $delete_review_images_query = "DELETE ri FROM dinning_review_images ri
        INNER JOIN dinning_reviews r ON ri.review_id = r.id
        WHERE r.product_id = $product_id";
    mysqli_query($conn, $delete_review_images_query);

    // Delete data from dinning_reviews table associated with the product ID
    $delete_reviews_query = "DELETE FROM dinning_reviews WHERE product_id = $product_id";
    mysqli_query($conn, $delete_reviews_query);

    // Delete data from dinning_images table associated with the product ID
    $delete_images_query = "DELETE FROM dinning_images WHERE furniture_id = $product_id";
    mysqli_query($conn, $delete_images_query);

    // Delete data from dinning table for the product ID
    $delete_dinning_query = "DELETE FROM dinning WHERE id = $product_id";
    mysqli_query($conn, $delete_dinning_query);

    // Close the database connection
    mysqli_close($conn);

    // Redirect back to the admin panel or any other page after deletion
    header("Location: dinning_view.php");
    exit();
} else {
    // Redirect to an error page or handle the case where no ID is provided
    header("Location: error_page.php");
    exit();
}
?>