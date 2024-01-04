<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bed Collection - IIttadi Furniture</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="styles.css"> <!-- Your custom styles -->
    <style>
        .card {
            transition: transform 0.3s, box-shadow 0.3s;
            height: 100%;
            border: none;
            /* Add this line to remove card borders */
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card:hover .card-body {
            background-color: #f9f9f9;
        }

        .card-img-top {
            cursor: pointer;
            height: 250px;
            /* You can adjust this height if needed */
            object-fit: contain;
            /* Maintain aspect ratio without cropping */
            width: 100%;
        }

        .card-body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
            text-align: center;
        }

        .card-body a {
            margin-top: 10px;
            width: 100%;
        }

        .card-body a:hover,
        .card-body h5:hover,
        .card-body p:hover {

            text-decoration: none;
        }
    </style>
</head>


<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo.jpg" alt="Furniture Store Logo" width="30" height="30" class="d-inline-block align-top"
                    loading="lazy">
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
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact2.php">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>


    <main class="container mt-4">

        <h1 class="mb-4 text-center">Bed Collections</h1>
        <div class="row">
            <?php
            $allData = mysqli_query($conn, "SELECT bedroom.*, bedroom_images.image_path
                                            FROM bedroom
                                            LEFT JOIN bedroom_images ON bedroom.id = bedroom_images.furniture_id
                                            WHERE bedroom.type='Bedside table'");

            $products = array(); // Array to store product details
            
            while ($row = mysqli_fetch_assoc($allData)) {
                $productId = $row['id'];

                // If the product is not yet added to the array, add it
                if (!isset($products[$productId])) {
                    $products[$productId] = [
                        'id' => $row['id'],
                        'name' => $row['name'],
                        'price' => $row['price'],
                        'images' => array() // Array to store images
                    ];
                }

                // Add image paths to the product's image array
                if ($row['image_path']) {
                    $products[$productId]['images'][] = $row['image_path'];
                }
            }

            // Iterate through each product to display the first image
            foreach ($products as $product) {
                ?>
                <!-- Sample Bed Item -->
                <div class="col-6 col-md-3 mb-4">
                    <div class="card">
                        <a href="bed_details.php?id=<?php echo $product['id']; ?>">
                            <?php if (!empty($product['images'])) { ?>
                                <img src="<?php echo $product['images'][0]; ?>" class="card-img-top" alt="Product Image">
                            <?php } else { ?>
                                <img src="placeholder.jpg" class="card-img-top" alt="Placeholder Image">
                            <?php } ?>
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $product['name']; ?>
                            </h5>
                            <h5 class="card-text">৳
                                <?php echo $product['price']; ?>
                            </h5>
                        </div>
                    </div>
                </div>
            <?php } ?>
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
                    <img src="qr.png" alt="QR Code" width="70" height="70">
                </div>
                <div class="col-md-12 mt-3">
                    <p>&copy; 2024 IIttadi Furniture. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>