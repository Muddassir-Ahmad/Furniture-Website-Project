<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Ittadi Furniture</title>
  <link rel="shortcut icon" href="img/logo.jpg" type="image/x-icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Add this line in the <head> section -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="...">
  <!-- This link might change, refer to Font Awesome documentation -->
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand text-light" href="index.php">
        <img src="img/logo.jpg" alt="Furniture Store Logo" width="30" height="30" class="d-inline-block align-top"
          loading="lazy">
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
            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDarkDropdownMenuLink" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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




  <main>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="3000">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <!-- Add more indicators for additional slides -->
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/hny2024.jpg" class="d-block" alt="Slide 1">
        </div>
        <div class="carousel-item ">
          <img src="img/1.jpg" class="d-block" alt="Slide 2">
        </div>
        <div class="carousel-item">
          <img src="img/4.jpg" class="d-block" alt="Slide 3">
        </div>
        <div class="carousel-item">
          <img src="img/3.jpg" class="d-block" alt="Slide 4">
        </div>
        <!-- Add more carousel items as needed -->
      </div>
      <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <div class="container mt-4">
      <h1 class="text-center">Welcome to IIttadi Furniture Store</h1>
      <p>Discover a world of sophisticated furniture designs that elevate your space. Explore our extensive collection
        that caters to every corner of your home or office, offering functionality, elegance, and comfort.</p>
      <!-- Your furniture listings can go here -->
    </div>



    <!-- Icon Categories -->
    <div class="full-width-background">
      <div class="container mt-4 text-center">


        <h2 class="text-dark mb-4">Furniture Categories</h2>
        <div class="row">
          <div class="col-4 col-md-2 your-div-class d-flex align-items-center justify-content-center">
            <a class="text-decoration-none d-block" href="icon_bed.php">
              <img src="icon/bed.png" alt="Bed" class="img-fluid mb-2" style="max-width: 70px;">
              <h6 class="mb-0 text-dark">Bed</h6>
            </a>
          </div>
          <div class="col-4 col-md-2 your-div-class d-flex align-items-center justify-content-center">
            <a class="text-decoration-none" href="icon_sofa.php">
              <img src="icon/sofa.png" alt="Office Furniture" class="img-fluid mb-2" style="max-width: 70px;">
              <h6 class="mb-0 text-dark">Sofa</h6>
            </a>
          </div>
          <div class="col-4 col-md-2 your-div-class d-flex align-items-center justify-content-center">
            <a class="text-decoration-none" href="icon_chair.php">
              <img src="icon/chair.png" alt="Office Furniture" class="img-fluid mb-2" style="max-width: 70px;">
              <h6 class="mb-0 text-dark">Chair</h6>
            </a>
          </div>
          <div class="col-4 col-md-2 your-div-class d-flex align-items-center justify-content-center">
            <a class="text-decoration-none" href="cabinet.php">
              <img src="icon/cabinet.png" alt="Office Furniture" class="img-fluid mb-2" style="max-width: 70px;">
              <h6 class="mb-0 text-dark">Cabinet</h6>
            </a>
          </div>
          <div class="col-4 col-md-2 your-div-class d-flex align-items-center justify-content-center">
            <a class="text-decoration-none" href="wardrobe.php">
              <img src="icon/wardrobe.png" alt="Office Furniture" class="img-fluid mb-2" style="max-width: 70px;">
              <h6 class="mb-0 text-dark">Wardrobe</h6>
            </a>
          </div>
          <div class="col-4 col-md-2 your-div-class d-flex align-items-center justify-content-center">
            <a class="text-decoration-none" href="dressing_table.php">
              <img src="icon/dressing-table.png" alt="Office Furniture" class="img-fluid mb-2"
                style="max-width: 70px;">
              <h6 class="mb-0 text-dark">Dressing Table</h6>
            </a>
          </div>
        </div>

        <div class="row mt-4">
          <div class="col-4 col-md-2 your-div-class d-flex align-items-center justify-content-center">
            <a class="text-decoration-none" href="officialtable.php">
              <img src="icon/office-set.png" alt="Office Furniture" class="img-fluid mb-2" style="max-width: 70px;">
              <h6 class="mb-0 text-dark">Official Table</h6>
            </a>
          </div>
          <div class="col-4 col-md-2 your-div-class d-flex align-items-center justify-content-center">
            <a class="text-decoration-none" href="reading_table.php">
              <img src="icon/reading-table.png" alt="Office Furniture" class="img-fluid mb-2"
                style="max-width: 70px;">
              <h6 class="mb-0 text-dark">Reading Table</h6>
            </a>
          </div>
          <div class="col-4 col-md-2 your-div-class d-flex align-items-center justify-content-center">
            <a class="text-decoration-none" href="dining_table.php">
              <img src="icon/dinning-table.png" alt="Office Furniture" class="img-fluid mb-2"
                style="max-width: 70px;">
              <h6 class="mb-0 text-dark">Dinning Table</h6>
            </a>
          </div>
          <div class="col-4 col-md-2 your-div-class d-flex align-items-center justify-content-center">
            <a class="text-decoration-none" href="computer_table.php">
              <img src="icon/computer-table.png" alt="Office Furniture" class="img-fluid mb-2"
                style="max-width: 70px;">
              <h6 class="mb-0 text-dark">Computer Table</h6>
            </a>
          </div>
          <div class="col-4 col-md-2 your-div-class d-flex align-items-center justify-content-center">
            <a class="text-decoration-none" href="teatable.php">
              <img src="icon/tea-table.png" alt="Office Furniture" class="img-fluid mb-2" style="max-width: 70px;">
              <h6 class="mb-0 text-dark">Tea Table</h6>
            </a>
          </div>
          <div class="col-4 col-md-2 your-div-class d-flex align-items-center justify-content-center">
            <a class="text-decoration-none" href="divan.php">
              <img src="icon/divan.png" alt="Office Furniture" class="img-fluid mb-2" style="max-width: 70px;">
              <h6 class="mb-0 text-dark">Divan</h6>
            </a>
          </div>
        </div>

        <div class="row mt-4">
          <div class="col-4 col-md-2 your-div-class d-flex align-items-center justify-content-center">
            <a class="text-decoration-none" href="rack.php">
              <img src="icon/rack.png" alt="Office Furniture" class="img-fluid mb-2" style="max-width: 70px;">
              <h6 class="mb-0 text-dark">Rack</h6>
            </a>
          </div>
          <div class="col-4 col-md-2 your-div-class d-flex align-items-center justify-content-center">
            <a class="text-decoration-none" href="sidebox.php">
              <img src="icon/side-box2.png" alt="Office Furniture" class="img-fluid mb-2" style="max-width: 70px;">
              <h6 class="mb-0 text-dark">Side Box</h6>
            </a>
          </div>
          <div class="col-4 col-md-2 your-div-class d-flex align-items-center justify-content-center">
            <a class="text-decoration-none" href="mattress.php">
              <img src="icon/mattress.png" alt="Office Furniture" class="img-fluid mb-2" style="max-width: 70px;">
              <h6 class="mb-0 text-dark">Mattress</h6>
            </a>
          </div>
          <div class="col-4 col-md-2 your-div-class d-flex align-items-center justify-content-center">
            <a class="text-decoration-none" href="officeset.php">
              <img src="icon/office-set.png" alt="Office Furniture" class="img-fluid mb-2" style="max-width: 70px;">
              <h6 class="mb-0 text-dark">Office Set</h6>
            </a>
          </div>
          <div class="col-4 col-md-2 your-div-class d-flex align-items-center justify-content-center">
            <a class="text-decoration-none" href="homedecor.php">
              <img src="icon/home-decor.png" alt="Office Furniture" class="img-fluid mb-2" style="max-width: 70px;">
              <h6 class="mb-0 text-dark">Home Decor</h6>
            </a>
          </div>
          <div class="col-4 col-md-2 your-div-class d-flex align-items-center justify-content-center">
            <a class="text-decoration-none" href="weddingset.php">
              <img src="icon/wedding-set.png" alt="Office Furniture" class="img-fluid mb-2" style="max-width: 70px;">
              <h6 class="mb-0 text-dark">Wedding Set</h6>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- Icon categories End -->




    <div class="container mt-5">
      <h2 class="text-center text-dark mb-4">Smart Furniture</h2>
      <div class="row">
        <div class="col-6 col-md-4 mb-4">
          <a class="text-decoration-none" href="bedroom.php">
            <img src="img/bedroom.jpg" alt="Living Room Furniture" class="img-fluid mb-3">
            <h5 class="text-center text-dark">Bedroom</h5>
          </a>
        </div>
        <div class="col-6 col-md-4 mb-4">
          <a class="text-decoration-none" href="livingroom.php">
            <img src="img/livingroom.jpg" alt="Bedroom Furniture" class="img-fluid mb-3">
            <h5 class="text-center text-dark">Living Room</h5>
          </a>
        </div>
        <div class="col-6 col-md-4 mb-4">
          <a class="text-decoration-none" href="readingroom.php">
            <img src="img/readingroom.jpg" alt="Bedroom Furniture" class="img-fluid mb-3">
            <h5 class="text-center text-dark">Reading Room</h5>
          </a>
        </div>
        <div class="col-6 col-md-4 mb-4">
          <a class="text-decoration-none" href="diningroom.php">
            <img src="img/diningroom.jpg" alt="Dining Room Furniture" class="img-fluid mb-3">
            <h5 class="text-center text-dark">Dining Room</h5>
          </a>
        </div>
        <div class="col-6 col-md-4 mb-4">
          <a class="text-decoration-none" href="officeroom.php">
            <img src="img/officeroom.jpg" alt="Office Furniture" class="img-fluid mb-3">
            <h5 class="text-center text-dark">Office Room</h5>
          </a>
        </div>
      </div>

    </div>
    <!-- After the furniture categories section -->
    <div class="container-fluid mt-4 bg-light py-4">
      <h2 class="text-center mb-5">Why Choose Us</h2>
      <div class="row justify-content-center">
        <div class="col-md-3 text-center mb-4">
          <i class="fas fa-tools text-danger mb-3 d-block display-4"></i>
          <h3>Quality Craftsmanship</h3>
          <p>Our furniture is expertly crafted with premium materials for long-lasting durability.</p>
        </div>
        <div class="col-md-3 text-center mb-4">
          <i class="fas fa-layer-group text-danger mb-3 d-block display-4"></i>
          <h3>Wide Selection</h3>
          <p>Explore a diverse range of furniture designs to suit various tastes and preferences.</p>
        </div>
        <div class="col-md-3 text-center mb-4">
          <i class="fas fa-hands-helping text-danger mb-3 d-block display-4"></i>
          <h3>Exceptional Service</h3>
          <p>Our dedicated team is committed to providing exceptional customer service and support.</p>
        </div>
        <div class="col-md-3 text-center mb-4">
          <i class="fas fa-star text-danger mb-3 d-block display-4"></i>
          <h3>Premium Quality</h3>
          <p>Experience furniture of unparalleled excellence and luxury.</p>
        </div>
      </div>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>