<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Ittadi Furniture<</title>
    <link rel="shortcut icon" href="img/logo.jpg" type="image/x-icon">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
        /* Adjust alignment for the search button */
        @media (max-width: 575.98px) {
            .input-group {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
            }

            .input-group-append {
                margin-left: 0;
                /* Set margin-left to zero */
            }

            .btn {
                margin-top: 0.25rem;
                margin-left: 10px;
                /* Adjust this value as needed */
            }
        }
    </style>
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

    <!-- Contact Content -->
    <div class="container mt-4 mb-5">
        <!-- <h1>Contact Us</h1> -->
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-center">Get in Touch</h2>
                <p>Feel free to reach out to us using the form below or via the contact information provided.</p>
                <!-- Contact Form -->
                <form action="contactAction.php" method="post">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="number">Phone Number</label>
                        <input type="number" class="form-control" id="number" name="number" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-6 text-center mt-4">
                <h2>Our Address</h2>
                <p>
                    <i class="fas fa-map-marker-alt"></i>Dhaka - Moulvibazar Hwy, Moulvibazar, Sylhet<br>
                    <i class="far fa-envelope"></i> ittadifurniturestore@gmail.com<br>
                    <i class="fas fa-phone"></i> +8801720086890
                </p>
                <!-- Random Map Placeholder (just for illustration) -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d116177.57165476507!2d91.7193097!3d24.5010747!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375173336168a6ef%3A0xaab529aca3a42ab8!2sIttadi%20Furniture!5e0!3m2!1sen!2sbd!4v1700165843637!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
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