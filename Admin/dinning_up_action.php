<?php
include 'config.php';

$errors = [];
$id = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $furnitureName = $_POST['furnitureName'];
    $furnitureCode = $_POST['furnitureCode'];
    $furnitureType = $_POST['furnitureType'];
    $price = $_POST['price'];
    $materials = $_POST['materials'];
    $size = $_POST['size'];
    $information = $_POST['information'];

    $updateImages = !empty($_FILES['images']['name'][0]); // Check if new images are uploaded

    if ($updateImages) {
        // Handle image update logic similar to the previous code you provided
        $images = $_FILES['images'];
        $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
        $uploadPath = '../image/';

        $uploadedImagePaths = [];

        foreach ($images['name'] as $key => $image) {
            $imageFileType = strtolower(pathinfo($image, PATHINFO_EXTENSION));
            if (!in_array($imageFileType, $allowedTypes)) {
                $errors[] = "Invalid file type for image: {$image}";
            } elseif ($images['size'][$key] > 5000000) { // Adjust the size limit as needed
                $errors[] = "File size exceeds limit for image: {$image}";
            } else {
                $tempPath = $images['tmp_name'][$key];
                $targetPath = $uploadPath . uniqid() . '.' . $imageFileType; // Generate unique filename
                if (move_uploaded_file($tempPath, $targetPath)) {
                    $uploadedImagePaths[] = $targetPath; // Store the path for database insertion
                } else {
                    $errors[] = "Error uploading image: {$image}";
                }
            }
        }
    }

    if (empty($errors)) {
        mysqli_begin_transaction($conn);

        try {
            $updatedinningQuery = "UPDATE dinning SET name=?, code=?, type=?, price=?, material=?, size=?, information=? WHERE id=?";
            $stmtdinning = mysqli_prepare($conn, $updatedinningQuery);
            mysqli_stmt_bind_param($stmtdinning, "sssssssi", $furnitureName, $furnitureCode, $furnitureType, $price, $materials, $size, $information, $id);
            mysqli_stmt_execute($stmtdinning);

            if ($updateImages) {
                // If images are updated, handle insertion and deletion logic as before
                $deleteImagesQuery = "DELETE FROM dinning_images WHERE furniture_id = ?";
                $stmtDeleteImages = mysqli_prepare($conn, $deleteImagesQuery);
                mysqli_stmt_bind_param($stmtDeleteImages, "i", $id);
                mysqli_stmt_execute($stmtDeleteImages);

                $insertImageQuery = "INSERT INTO dinning_images (furniture_id, image_path) VALUES (?, ?)";
                $stmtInsertImage = mysqli_prepare($conn, $insertImageQuery);
                mysqli_stmt_bind_param($stmtInsertImage, "is", $id, $imagePath);

                foreach ($uploadedImagePaths as $imagePath) {
                    mysqli_stmt_execute($stmtInsertImage);
                }
            }

            mysqli_commit($conn);
            header("Location: dinning_view.php");
            exit();
        } catch (Exception $e) {
            mysqli_rollback($conn);
            $errors[] = "Error updating data: " . $e->getMessage();
        }
    }

    $_SESSION['errors'] = $errors;
    $_SESSION['old_input'] = $_POST;
    header("Location: dinning_update.php?id=$id");
    exit();
}
?>