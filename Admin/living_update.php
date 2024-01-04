<?php
session_start(); // Start the session

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  // If the session variable is not set or is not true (user is not logged in)
  $_SESSION['error'] = 'You are not allowed to access this page. Please log in as admin.';
  echo '<script>alert("You are not allowed to access this page. Please log in as admin.");';
  echo 'window.location.href = "Admin_Login.php";</script>';
  exit();
}





include 'config.php';

$errors = [];
$id = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate inputs
    $furnitureName = htmlspecialchars(trim($_POST['furnitureName']));
    $furnitureCode = htmlspecialchars(trim($_POST['furnitureCode']));
    $furnitureType = htmlspecialchars(trim($_POST['furnitureType']));
    $price = floatval($_POST['price']);
    $materials = htmlspecialchars(trim($_POST['materials']));
    $size = htmlspecialchars(trim($_POST['size']));
    $information = htmlspecialchars(trim($_POST['information']));

    // Validate uploaded images
    if (!empty($_FILES['images']['name'][0])) {
        $images = $_FILES['images'];
        $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
        $uploadPath = 'uploads/'; // Define your upload directory

        foreach ($images['name'] as $key => $image) {
            $imageFileType = strtolower(pathinfo($image, PATHINFO_EXTENSION));
            if (!in_array($imageFileType, $allowedTypes)) {
                $errors[] = "Invalid file type for image: {$image}";
            } elseif ($images['size'][$key] > 5000000) { // Adjust the size limit as needed
                $errors[] = "File size exceeds limit for image: {$image}";
            } else {
                move_uploaded_file($images['tmp_name'][$key], $uploadPath . $image);
            }
        }
    }

    if (empty($errors)) {
        // Update database with sanitized data
        $updateQuery = "UPDATE living SET name=?, code=?, type=?, price=?, material=?, size=?, information=? WHERE id=?";
        $stmt = mysqli_prepare($conn, $updateQuery);
        mysqli_stmt_bind_param($stmt, "sssdsssi", $furnitureName, $furnitureCode, $furnitureType, $price, $materials, $size, $information, $id);

        if (mysqli_stmt_execute($stmt)) {
            // Redirect to success page or handle success
            header("Location: success.php");
            exit();
        } else {
            $errors[] = "Error updating data: " . mysqli_error($conn);
        }
    }
}

// Fetch existing data
$dataFetchQuery = "SELECT * FROM living WHERE id=?";
$stmt = mysqli_prepare($conn, $dataFetchQuery);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$record = mysqli_stmt_get_result($stmt);
$data = mysqli_fetch_array($record);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Furniture Upload</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Additional style for image preview */
        body {
            background-color: #f4f4f4;
            /* Updated body background color */
            font-family: Arial, sans-serif;
            margin: 0;
            /* Reset margin for the body */
            padding: 0;
            /* Reset padding for the body */
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
            margin-bottom: 30px;
        }

        label {
            font-weight: bold;
        }

        .form-control {
            border-radius: 5px;
        }

        textarea.form-control {
            resize: vertical;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        #imagePreview {
            margin-top: 20px;
        }

        #imagePreview img {
            max-width: 150px;
            max-height: 150px;
            margin-right: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            padding: 3px;
        }

        /* Background color for the "Upload Furniture" section header */
        .upload-section h2 {
            background-color: #0056b3;
            color: #fff;
            padding: 10px 20px;
            border-radius: 8px 8px 0 0;
            margin-top: 0;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container mt-4">
        <div class="upload-section">
            <h2>Update Living Furniture</h2>
            <?php if (!empty($errors)): ?>
                <div class="alert alert-danger" role="alert">
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li>
                                <?php echo $error; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
            <form action="living_up_action.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="furnitureName">Furniture Name:</label>
                    <input type="text" class="form-control" id="furnitureName" name="furnitureName"
                        value="<?php echo $data['name'] ?>" required>
                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                </div>
                <div class="form-group">
                    <label for="furnitureCode">Furniture Code:</label>
                    <input type="text" class="form-control" id="furnitureCode" name="furnitureCode"
                        value="<?php echo $data['code'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="furnitureType">Furniture Type:</label>
                    <select class="form-control" id="furnitureType" name="furnitureType" required>
                        <option value="Sofa" <?php if ($data['type'] === 'Sofa')
                            echo 'selected'; ?>>Sofa</option>
                        <option value="Sofa cum Bed" <?php if ($data['type'] === 'Sofa cum Bed')
                            echo 'selected'; ?>>
                            Sofa cum Bed</option>
                        <option value="Center Table" <?php if ($data['type'] === 'Center Table')
                            echo 'selected'; ?>>
                            Center Table</option>
                        <option value="Divan" <?php if ($data['type'] === 'Divan')
                            echo 'selected'; ?>>
                            Divan</option>
                        <option value="Cabinet" <?php if ($data['type'] === 'Cabinet')
                            echo 'selected'; ?>>
                           Cabinet</option>
                        <option value="Showcase" <?php if ($data['type'] === 'Showcase')
                            echo 'selected'; ?>>
                            Showcase</option>
                        <option value="Easy Chair" <?php if ($data['type'] === 'Easy Chair')
                            echo 'selected'; ?>>
                            Easy Chair</option>
                        <option value="Rocking Chair" <?php if ($data['type'] === 'Rocking Chair')
                            echo 'selected'; ?>>
                            Rocking Chair</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="price">Price:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">&#2547;</span>
                        </div>
                        <input type="text" class="form-control" id="price" name="price"
                            value="<?php echo $data['price'] ?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="materials">Materials:</label>
                    <input type="text" class="form-control" id="materials" name="materials"
                        value="<?php echo $data['material'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="size">Size:</label>
                    <input type="text" class="form-control" id="size" name="size" value="<?php echo $data['size'] ?>"
                        required>
                </div>
                <div class="form-group">
                    <label for="information">Information:</label>
                    <textarea class="form-control" id="information" name="information"
                        required><?php echo htmlspecialchars($data['information'] ?? ''); ?></textarea>
                </div>
                <!-- Display Existing Images -->
                <div class="form-group">
                    <label>Existing Images:</label>
                    <div id="existingImages">
                        <?php
                        // Fetch existing images associated with the living furniture ID
                        $fetchImagesQuery = "SELECT image_path FROM living_images WHERE furniture_id = ?";
                        $stmtImages = mysqli_prepare($conn, $fetchImagesQuery);
                        mysqli_stmt_bind_param($stmtImages, "i", $id);
                        mysqli_stmt_execute($stmtImages);
                        $resultImages = mysqli_stmt_get_result($stmtImages);

                        while ($image = mysqli_fetch_assoc($resultImages)) {
                            echo '<img src="' . $image['image_path'] . '" alt="Existing Image" style="max-width: 150px; max-height: 150px; margin-right: 10px; margin-bottom: 10px; border-radius: 5px; border: 1px solid #ccc; padding: 3px;">';
                        }
                        ?>
                    </div>
                </div>

                <!-- Upload Images Input -->
                <div class="form-group">
                    <label for="furnitureImages">Upload Images:</label>
                    <input type="file" class="form-control-file" id="furnitureImages" name="images[]" multiple>
                    <small class="form-text text-muted">Select multiple images (hold Ctrl or Cmd) for upload.</small>
                </div>

                <!-- Display Selected Images Preview -->
                <div id="imagePreview" class="mt-3">
                    <p><strong>Selected Images Preview:</strong></p>
                    <div id="selectedImagesPreview"></div>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Update</button>
            </form>
        </div>

        <!-- <script>
            // JavaScript for image preview
            document.getElementById('furnitureImages').addEventListener('change', function (event) {
                const imagePreview = document.getElementById('imagePreview');
                imagePreview.innerHTML = '';
                for (let i = 0; i < event.target.files.length; i++) {
                    const img = document.createElement('img');
                    img.src = URL.createObjectURL(event.target.files[i]);
                    img.classList.add('preview-image');
                    imagePreview.appendChild(img);
                }
            });
        </script> -->
        <script>
            // JavaScript for image preview
            document.getElementById('furnitureImages').addEventListener('change', function (event) {
                const imagePreview = document.getElementById('selectedImagesPreview');
                imagePreview.innerHTML = '';
                for (let i = 0; i < event.target.files.length; i++) {
                    const img = document.createElement('img');
                    img.src = URL.createObjectURL(event.target.files[i]);
                    img.classList.add('preview-image');
                    img.style.maxWidth = '150px';
                    img.style.maxHeight = '150px';
                    img.style.marginRight = '10px';
                    img.style.marginBottom = '10px';
                    img.style.borderRadius = '5px';
                    img.style.border = '1px solid #ccc';
                    img.style.padding = '3px';
                    imagePreview.appendChild(img);
                }
            });
        </script>
</body>

</html>