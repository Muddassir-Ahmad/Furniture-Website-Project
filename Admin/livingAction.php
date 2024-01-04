<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input data
    $f_name = $_POST['furnitureName'];
    $f_code = $_POST['furnitureCode'];
    $f_type = $_POST['furnitureType'];
    $f_price = $_POST['price'];
    $r_materials = $_POST['materials'];
    $f_size = $_POST['size'];
    $f_info = $_POST['information'];
    $images = $_FILES['images'];

    // Prepare the INSERT query for furniture details
    $insert_furniture_query = "INSERT INTO `living`(`name`, `code`, `price`, `type`, `material`, `size`, `information`) VALUES (?, ?, ?, ?, ?, ?, ?)";
    
    // Initialize the prepared statement for furniture details
    $stmt_furniture = $conn->prepare($insert_furniture_query);
    
    if ($stmt_furniture) {
        // Bind parameters to the prepared statement for furniture details
        $stmt_furniture->bind_param("sssssss", $f_name, $f_code, $f_price, $f_type, $r_materials, $f_size, $f_info);

        // Execute the prepared statement for furniture details
        if ($stmt_furniture->execute()) {
            // Retrieve the last inserted furniture ID
            $furniture_id = $conn->insert_id;

            // Prepare the INSERT query for furniture images
            $insert_image_query = "INSERT INTO `living_images`(`furniture_id`, `image_path`) VALUES (?, ?)";
            $stmt_image = $conn->prepare($insert_image_query);

            // Loop through each uploaded image and insert its path into the database
            foreach ($images['tmp_name'] as $key => $tmp_name) {
                $imageName = $images['name'][$key];
                $image_des = "../image/" . $imageName;

                if (move_uploaded_file($tmp_name, $image_des)) {
                    // Bind parameters to the prepared statement for furniture images
                    $stmt_image->bind_param("is", $furniture_id, $image_des);
                    // Execute the prepared statement for furniture images
                    $stmt_image->execute();
                } else {
                    echo "File upload failed for one or more images!";
                }
            }

            echo "<script>alert('Furniture Uploaded!')</script>";
            echo "<script>location.href='living_upload.php'</script>";
        } else {
            die("Furniture Upload Failed!");
        }

        // Close the statements
        $stmt_furniture->close();
        $stmt_image->close();
    } else {
        echo "Prepared statement error: " . $conn->error;
    }
}
?>
