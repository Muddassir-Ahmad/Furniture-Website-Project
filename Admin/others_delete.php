<?php
include 'config.php';

// Check if an ID is passed via GET parameter
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $product_id = $_GET['id'];

    // Connect to your database here (you'll need your database connection logic)

    // Delete data from others_review_images table associated with others_reviews table
    $delete_review_images_query = "DELETE ri FROM others_review_images ri
        INNER JOIN others_reviews r ON ri.review_id = r.id
        WHERE r.product_id = $product_id";
    mysqli_query($conn, $delete_review_images_query);

    // Delete data from others_reviews table associated with the product ID
    $delete_reviews_query = "DELETE FROM others_reviews WHERE product_id = $product_id";
    mysqli_query($conn, $delete_reviews_query);

    // Delete data from others_images table associated with the product ID
    $delete_images_query = "DELETE FROM others_images WHERE furniture_id = $product_id";
    mysqli_query($conn, $delete_images_query);

    // Delete data from others table for the product ID
    $delete_others_query = "DELETE FROM others WHERE id = $product_id";
    mysqli_query($conn, $delete_others_query);

    // Close the database connection
    mysqli_close($conn);

    // Redirect back to the admin panel or any other page after deletion
    header("Location: others_view.php");
    exit();
} else {
    // Redirect to an error page or handle the case where no ID is provided
    header("Location: error_page.php");
    exit();
}
?>