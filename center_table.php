<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Center Table Collections - Ittadi Furniture</title>
    <link rel="shortcut icon" href="img/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/style.css">

</head>


<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand text-light" href="index.php">
                <img src="img/logo.jpg" alt="Furniture Store Logo" width="30" height="30"
                    class="d-inline-block align-top" loading="lazy">
                Ittadi Furniture
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link text-light" href="index.php">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDarkDropdownMenuLink"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Product
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="icon_bed.php">Bed</a></li>
                            <li><a class="dropdown-item" href="icon_sofa.php">Sofa</a></li>
                            <li><a class="dropdown-item" href="icon_chair.php">Chair</a></li>
                            <li><a class="dropdown-item" href="cabinet.php">Cabinet</a></li>
                            <li><a class="dropdown-item" href="wardrobe.php">Wardrobe</a></li>
                            <li><a class="dropdown-item" href="almirah.php">Almirah</a></li>
                            <li><a class="dropdown-item " href="alna_hanger.php">Alna & Hanger</a></li>
                            <li><a class="dropdown-item" href="dressing_table.php">Dressing Table</a></li>
                            <li><a class="dropdown-item" href="officialtable.php">Official Table</a></li>
                            <li><a class="dropdown-item" href="reading_table.php">Reading Table</a></li>
                            <li><a class="dropdown-item" href="dining_table.php">Dining Table</a></li>
                            <li><a class="dropdown-item" href="computer_table.php">Computer Table</a></li>
                            <li><a class="dropdown-item" href="teatable.php">Tea Table</a></li>
                            <li><a class="dropdown-item " href="bedside_table.php">Bedside Table</a></li>
                            <li><a class="dropdown-item" href="divan.php">Divan</a></li>
                            <li><a class="dropdown-item" href="rack.php">Rack</a></li>
                            <li><a class="dropdown-item" href="sidebox.php">Side Box</a></li>
                            <li><a class="dropdown-item" href="mattress.php">Mattress</a></li>
                            <li><a class="dropdown-item" href="homedecor.php">Home Decor</a></li>
                            <li><a class="dropdown-item" href="officeset.php">Office Set</a></li>
                            <li><a class="dropdown-item" href="weddingset.php">Weeding Set</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-light" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>



        </nav>
        <!-- Inside the <nav> element in the header -->
        <form class="form-inline my-0 my-lg-0 justify-content-end " method="post" action="search.php">
            <div class="input-group mt-2 mx-1">
                <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search Furniture"
                    aria-label="Search" required>
                <div class="input-group-append">
                    <button class="btn btn-outline my-2 my-sm-0 align-middle" type="submit">Search</button>
                </div>
            </div>
        </form>

    </header>


    <main class="container mt-0">

        <h3 class="mb-4 text-center">Center Table Collections</h3>
        <div class="row">
            <?php
            $allData = mysqli_query($conn, "SELECT living.*, living_images.image_path
                                            FROM living
                                            LEFT JOIN living_images ON living.id = living_images.furniture_id
                                            WHERE living.type='Center Table'");

            $products = array(); // Array to store product details

            while ($row = mysqli_fetch_assoc($allData)) {
                $productId = $row['id'];

                // If the product is not yet added to the array, add it
                if (!isset($products[$productId])) {
                    $products[$productId] = [
                        'id' => $row['id'],
                        'name' => $row['name'],
                        'code' => $row['code'],
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

                        <a href="product_details.php?type=living&id=<?php echo $product['id']; ?>">

                            <?php if (!empty($product['images'])) { ?>
                                <img src="<?php echo $product['images'][0]; ?>" class="card-img-top" alt="Product Image">
                            <?php } else { ?>
                                <img src="placeholder.jpg" class="card-img-top" alt="Placeholder Image">
                            <?php } ?>
                        </a>

                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $product['code']; ?>
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

    <footer class="text-light">
        <div class="container mb-0 mt-5">
            <div class="row flex-md-row flex-column">
                <!-- Left Side: Address -->
                <div class="col-md-6 text-center text-sm-left">
                    <h4>Address</h4>
                    <p>Dhaka - Moulvibazar Hwy, Moulvibazar, Sylhet</p>
                    <!-- Social Icons -->
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/profile.php?id=100043447351691&mibextid=JRoKGi"
                                target="Facebook" class="text-light">
                                <i class="fab fa-facebook-f fa-lg mr-3"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.youtube.com/your-furniture-store" target="Youtube" class="text-light">
                                <i class="fab fa-youtube fa-lg mr-3"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/messages/t/100043447351691" target="Messenger"
                                class="text-light ">
                                <i class="fab fa-facebook-messenger fa-lg mr-3"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://wa.me/+8801720086890" target="Whatsapp" class="text-light">
                                <i class="fab fa-whatsapp fa-lg mr-3"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Right Side: Quick Links -->
                <div class="col-md-6 text-center text-sm-left">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Quick Links</h4>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-angle-double-right"></i> <a href="index.php"
                                        class="text-light">Home</a></li>
                                <li><i class="fas fa-angle-double-right"></i> <a href="about.php"
                                        class="text-light">About</a></li>
                                <li><i class="fas fa-angle-double-right"></i> <a href="contact.php"
                                        class="text-light">Contact Us</a>
                                </li>

                            </ul>
                        </div>
                        <div class="col-md-6 text-center text-sm-left">
                            <h4 class="text-sm-center">Ittadi Furniture Store</h4>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-angle-double-right"></i> <a
                                        href="https://maps.app.goo.gl/iTeg4wfsEEYF9rXZ8" class="text-light">Moulvibazar
                                        Branch</a></li>
                                <li><i class="fas fa-angle-double-right"></i> <a href="contact.php"
                                        class="text-light">Sreemangal
                                        Branch</a></li>

                            </ul>
                        </div>
                    </div>

                </div>


            </div>

            <!-- Horizontal Line -->
            <hr class="my-4 bg-light">

            <!-- Copyright -->

            <div class="row flex-column">
                <div class="col-md-12 text-center text-sm-left">
                    <p>&copy; 2024 Ittadi Furniture. All Rights Reserved.</p>
                </div>
            </div>

        </div>

    </footer>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>