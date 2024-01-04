<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $f_name = $_POST['furnitureName'];
    $f_code = $_POST['furnitureCode'];
    $f_type = $_POST['furnitureType'];
    $f_price = $_POST['price'];
    $r_materials = $_POST['materials'];
    $f_size = $_POST['size'];
    $f_info = $_POST['information'];
    $images = $_FILES['images'];

    // Check if the furniture code already exists in the database
    $check_existing_query = "SELECT COUNT(*) AS count FROM `bedroom` WHERE `code` = ?";
    $stmt_check = $conn->prepare($check_existing_query);
    $stmt_check->bind_param("s", $f_code);
    $stmt_check->execute();
    $result = $stmt_check->get_result();
    $row = $result->fetch_assoc();
    $existing_count = $row['count'];

    if ($existing_count > 0) {
        // Furniture with the same code already exists
        echo "<script>alert('A product with the same code already exists.');</script>";
        echo "<script>location.href='bedroom_upload.php';</script>";
    } else {
        // Prepare the INSERT query for furniture details
        $insert_furniture_query = "INSERT INTO `bedroom`(`name`, `code`, `price`, `type`, `material`, `size`, `information`) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt_furniture = $conn->prepare($insert_furniture_query);

        if ($stmt_furniture) {
            // Bind parameters to the prepared statement for furniture details
            $stmt_furniture->bind_param("sssssss", $f_name, $f_code, $f_price, $f_type, $r_materials, $f_size, $f_info);

            // Execute the prepared statement for furniture details
            if ($stmt_furniture->execute()) {
                $furniture_id = $conn->insert_id;

                // Prepare the INSERT query for furniture images
                $insert_image_query = "INSERT INTO `bedroom_images` (`furniture_id`, `image_path`) VALUES (?, ?)";
                $stmt_image = $conn->prepare($insert_image_query);

                foreach ($images['tmp_name'] as $key => $tmp_name) {
                    $imageName = $images['name'][$key];
                    $image_des = "../image/" . $imageName;

                    if (move_uploaded_file($tmp_name, $image_des)) {
                        $stmt_image->bind_param("is", $furniture_id, $image_des);
                        $stmt_image->execute();
                    } else {
                        echo "<script>alert('File upload failed for one or more images!');</script>";
                    }
                }

                echo "<script>alert('Furniture Uploaded!');</script>";
                echo "<script>location.href='bedroom_upload.php';</script>";
            } else {
                echo "<script>alert('Furniture Upload Failed!');</script>";
            }

            $stmt_furniture->close();
            $stmt_image->close();
        } else {
            echo "<script>alert('Prepared statement error: " . $conn->error . "');</script>";
        }
    }

    $stmt_check->close();
}
?>