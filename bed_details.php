<?php
include 'config.php';

// Check if the product ID is provided in the URL
if (isset($_GET['id'])) {
    $productId = $_GET['id'];

    // Fetch the product details from the database based on the provided ID
    $productData = mysqli_query($conn, "SELECT * FROM `bedroom` WHERE id = $productId");

    // Check if the product exists
    if ($productData && mysqli_num_rows($productData) > 0) {
        $product = mysqli_fetch_assoc($productData);
    } else {
        // Product not found, you can redirect or display an error message
        echo "Product not found!";
    }

    // Fetch the main image from bedroom_images table (first image)
    $imageData = mysqli_query($conn, "SELECT * FROM `bedroom_images` WHERE furniture_id = $productId ORDER BY id ASC LIMIT 1");

    // Check if the query executed successfully and if an image exists
    if ($imageData && mysqli_num_rows($imageData) > 0) {
        $mainImage = mysqli_fetch_assoc($imageData);
    } else {
        echo "Main image not found!";
    }
} else {
    // No product ID provided in the URL, handle this case
    echo "No product ID found!";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bed Details - IIttadi Furniture</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Your custom styles -->
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="..."> <!-- This link might change, refer to Font Awesome documentation -->
    <style>
        /* Add your custom styles for the details page here */

        /* Ensure images fit within the container */
        .bed-image {
            max-width: 100%;
            height: auto;
        }

        /* Style for the thumbnail images */
        .thumbnail-img {
            width: 100px;
            /* Adjust the width of thumbnails as needed */
            height: auto;

            cursor: pointer;
        }
        .thumbnail-container {
            text-align: center;
            margin-top: 20px; /* Adjust the top margin */
        }

        /* Style for the selected thumbnail */
        .selected-thumbnail {
            border: 2px solid red;
            /* Highlight the selected thumbnail */
        }
    </style>
</head>

<body>

    <header>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">
                    <img src="img/logo.jpg" alt="Furniture Store Logo" width="30" height="30"
                        class="d-inline-block align-top" loading="lazy">
                    IIttadi Furniture
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
    </header>

    <main class="container mt-4">
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="position-relative">
                    <?php
                    // Display main large image
                    if (isset($mainImage)) {
                        ?>
                        <img src="<?php echo $mainImage['image_path']; ?>" class="d-block w-100 bed-image"
                            alt="<?php echo $product['name']; ?>" id="mainImage"
                            onclick="showFullScreen('<?php echo $mainImage['image_path']; ?>')">
                        <?php
                    } else {
                        echo "Main image not found!";
                    }
                    ?>
                </div>

                <!-- Display thumbnail images -->
                <div class="mt-4">
                    <?php
                    // Fetch all images associated with the product ID
                    $imagesData = mysqli_query($conn, "SELECT * FROM `bedroom_images` WHERE furniture_id = $productId");

                    if ($imagesData && mysqli_num_rows($imagesData) > 0) {
                        while ($image = mysqli_fetch_assoc($imagesData)) {
                            ?>
                            <img src="<?php echo $image['image_path']; ?>" class="thumbnail-img mt-2" alt="Product Image"
                                onclick="setAsMainImage(this)">
                            <?php
                        }
                    } else {
                        echo "No images found for this product!";
                    }
                    ?>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <!-- Display product details -->
                <h2>
                    <?php echo $product['name']; ?>
                </h2>
                <p>Code:
                    <?php echo $product['code']; ?>
                </p>
                <p>Price: $
                    <?php echo $product['price']; ?>
                </p>
                <p>Materials:
                    <?php echo $product['material']; ?>
                </p>
                <p>Size:
                    <?php echo $product['size']; ?>
                </p>
                <p>
                    <?php echo $product['information']; ?>
                </p>
            </div>
        </div>
    </main>

    <footer class="mt-5 bg-dark text-light py-4">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/p/Ittadi-Furniture-Moulvibazar-100073004300366/"
                                target="_blank" class="text-light">
                                <i class="fab fa-facebook-f fa-lg mr-3"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.youtube.com/@moulvibazarittadifurniture1482" target="_blank"
                                class="text-light">
                                <i class="fab fa-youtube fa-lg mr-3"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.instagram.com/yourInstagramPage" target="_blank" class="text-light">
                                <i class="fab fa-instagram fa-lg mr-3"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-12">
                    <!-- Replace 'yourQRCodeImage.jpg' with your actual QR code image -->
                    <img src="img/qr.png" alt="QR Code" width="70" height="70">
                </div>
                <div class="col-md-12 mt-3">
                    <p>&copy; 2024 IIttadi Furniture. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Full-Screen Modal -->
    <div class="modal fade" id="fullScreenModal" tabindex="-1" role="dialog" aria-labelledby="fullScreenModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <img src="" class="img-fluid" id="fullScreenImage" onclick="closeFullScreen()">
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap and custom scripts -->

    <script>
        function setAsMainImage(thumbnail) {
            const mainImage = document.getElementById('mainImage');
            mainImage.src = thumbnail.src;
            mainImage.setAttribute('onclick', `showFullScreen('${thumbnail.src}')`);
        }

        function showFullScreen(imagePath) {
            const modalImage = document.getElementById('fullScreenImage');
            modalImage.src = imagePath;
            $('#fullScreenModal').modal('show');
        }

        function closeFullScreen() {
            $('#fullScreenModal').modal('hide');
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>