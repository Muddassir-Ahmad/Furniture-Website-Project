<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $productId = $_POST['product_id'];
    $userName = $_POST['user_name'];
    $reviewText = $_POST['review_text'];
    $rating = $_POST['rating'];
    $imageCount = count($_FILES['review_images']['name']);
    $type = $_POST['product_type']; // Added line to get the product type

    // Validate form data (perform additional validation as needed)
    if (empty($userName) || empty($reviewText) || empty($rating) || empty($type)) {
        echo "Please fill in all the required fields.";
        exit();
    }

    // Define the review and image tables based on the product type
    $reviewTable = $type . '_reviews'; // Construct review table name dynamically
    $imageTable = $type . '_review_images'; // Construct image table name dynamically

    // Insert review into the database
    $insertReviewQuery = "INSERT INTO `$reviewTable` (product_id, user_name, review_text, rating) VALUES (?, ?, ?, ?)";
    $insertReviewStmt = mysqli_prepare($conn, $insertReviewQuery);
    mysqli_stmt_bind_param($insertReviewStmt, "isss", $productId, $userName, $reviewText, $rating);
    mysqli_stmt_execute($insertReviewStmt);
    $reviewId = mysqli_insert_id($conn); // Get the ID of the inserted review

    // Upload images associated with the review
    $targetDirectory = "review_images/"; // Directory where images will be stored
    for ($i = 0; $i < $imageCount; $i++) {
        $targetFile = $targetDirectory . basename($_FILES["review_images"]["name"][$i]);
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Check if the file is an actual image
        if (isset($_FILES["review_images"]["tmp_name"][$i]) && is_uploaded_file($_FILES["review_images"]["tmp_name"][$i])) {
            $check = getimagesize($_FILES["review_images"]["tmp_name"][$i]);
            if ($check !== false) {
                // Allow only certain file formats (adjust as needed)
                if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "gif") {
                    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    exit();
                }

                // Upload the image file
                if (move_uploaded_file($_FILES["review_images"]["tmp_name"][$i], $targetFile)) {
                    // Insert image path into the database with the review ID as a foreign key
                    // Insert image path into the respective image table with the review ID as a foreign key
                    $insertImageQuery = "INSERT INTO `$imageTable` (review_id, image_path) VALUES (?, ?)";
                    $insertImageStmt = mysqli_prepare($conn, $insertImageQuery);
                    mysqli_stmt_bind_param($insertImageStmt, "is", $reviewId, $targetFile);
                    mysqli_stmt_execute($insertImageStmt);
                } else {
                    echo "Sorry, there was an error uploading your file.";
                    exit();
                }
            } else {
                echo "File is not an image.";
                exit();
            }
        } else {
            echo "Error uploading file.";
            exit();
        }
    }

    // echo "FReview Submitted!";
    echo "<script>alert('Furniture Updated!')</script>";

    // Redirect to the product details page after successful submission
    header("Location: product_details.php?type=" . $type . "&id=" . $productId);
    exit();

} else {
    echo "Invalid request.";
}
?>