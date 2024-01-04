<?php
session_start(); // Start the session

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // If the session variable is not set or is not true (user is not logged in)
    $_SESSION['error'] = 'You are not allowed to access this page. Please log in as admin.';
    echo '<script>alert("You are not allowed to access this page. Please log in as admin.");';
    echo 'window.location.href = "Admin_Login.php";</script>';
    exit();
}

// If the user is logged in, proceed with the page content
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags for character set, viewport, and title -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Ittadi Furniture</title>
    <link rel="shortcut icon" href="../img/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="../css/admin.css">
    <script src="../js/admin.js"></script>
    <style>
        .containerr {
            max-width: 800px;
            margin: 20px auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .furniture-card {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
    </style>

</head>

<body>

    <!-- Responsive container to control width -->
    <div class="container-fluid justify-content-center border-dark mt-5">

        <!-- Bootstrap row for layout -->
        <div class="row mt-5">
            <div class="col-lg-2 col-md-12">

                <!-- Main Navigation -->
                <header>
                    <!-- Sidebar -->
                    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
                        <div class="position-sticky">
                            <div class="list-group list-group-flush mx-3 mt-4">
                                <!-- Navigation links with Bootstrap styling -->
                                <a href="dashboard.php" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                                    <i class="fas fa-tachometer-alt fa-fw  me-3"></i><span>Dashboard</span>
                                </a>

                                <!-- Bedroom -->
                                <a href="#" class="list-group-item list-group-item-action py-2" aria-expanded="false" data-bs-toggle="collapse" data-bs-target="#bedroomDropdown" aria-controls="bedroomDropdown">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fas fa-bed me-3"></i><span>Bedroom</span>
                                        </div>
                                        <i id="bedroomDropdownIcon" class="fas fa-caret-down"></i>
                                    </div>
                                </a>
                                <div class="collapse" id="bedroomDropdown">
                                    <div class="list-group">
                                        <a href="bedroom_upload.php" class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-upload me-3"></i><span>Upload Furniture</span>
                                        </a>
                                        <a href="bedroom_view.php" class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-eye me-3"></i><span>View Furniture</span>
                                        </a>
                                        <a href="bedroom_review.php" class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-star me-3"></i><span>Reviews</span>
                                        </a>
                                    </div>
                                </div>

                                <!-- Living Room -->
                                <a href="#" class="list-group-item list-group-item-action py-2" aria-expanded="false" data-bs-toggle="collapse" data-bs-target="#livingRoomDropdown" aria-controls="livingRoomDropdown">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fas fa-couch me-3"></i><span>Living Room</span>
                                        </div>
                                        <i id="livingRoomDropdownIcon" class="fas fa-caret-down"></i>
                                    </div>
                                </a>
                                <div class="collapse" id="livingRoomDropdown">
                                    <div class="list-group">
                                        <a href="living_upload.php" class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-upload me-3"></i><span>Upload Furniture</span>
                                        </a>
                                        <a href="living_view.php" class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-eye me-3"></i><span>View Furniture</span>
                                        </a>
                                        <a href="living_review.php" class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-star me-3"></i><span>Reviews</span>
                                        </a>
                                    </div>
                                </div>

                                <!-- Reading Room -->
                                <a href="#" class="list-group-item list-group-item-action py-2" aria-expanded="false" data-bs-toggle="collapse" data-bs-target="#readingRoomDropdown" aria-controls="readingRoomDropdown">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fas fa-book me-3"></i><span>Reading Room</span>
                                        </div>
                                        <i id="readingRoomDropdownIcon" class="fas fa-caret-down"></i>
                                    </div>
                                </a>
                                <div class="collapse" id="readingRoomDropdown">
                                    <div class="list-group">
                                        <a href="reading_upload.php" class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-upload me-3"></i><span>Upload Furniture</span>
                                        </a>
                                        <a href="reading_view.php" class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-eye me-3"></i><span>View Furniture</span>
                                        </a>
                                        <a href="reading_review.php" class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-star me-3"></i><span>Reviews</span>
                                        </a>
                                    </div>
                                </div>
                                <!-- Dining Room -->
                                <a href="#" class="list-group-item list-group-item-action py-2" aria-expanded="false" data-bs-toggle="collapse" data-bs-target="#diningRoomDropdown" aria-controls="diningRoomDropdown">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fas fa-utensils me-3"></i><span>Dining Room</span>
                                        </div>
                                        <i id="diningRoomDropdownIcon" class="fas fa-caret-down"></i>
                                    </div>
                                </a>
                                <div class="collapse" id="diningRoomDropdown">
                                    <div class="list-group">
                                        <a href="dinning_upload.php" class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-upload me-3"></i><span>Upload Furniture</span>
                                        </a>
                                        <a href="dinning_view.php" class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-eye me-3"></i><span>View Furniture</span>
                                        </a>
                                        <a href="dining_review.php" class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-star me-3"></i><span>Reviews</span>
                                        </a>
                                    </div>
                                </div>

                                <!-- Office Room -->
                                <a href="#" class="list-group-item list-group-item-action py-2" aria-expanded="false" data-bs-toggle="collapse" data-bs-target="#officeRoomDropdown" aria-controls="officeRoomDropdown">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fas fa-briefcase me-3"></i><span>Office Room</span>
                                        </div>
                                        <i id="officeRoomDropdownIcon" class="fas fa-caret-down"></i>
                                    </div>
                                </a>
                                <div class="collapse" id="officeRoomDropdown">
                                    <div class="list-group">
                                        <a href="office_upload.php" class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-upload me-3"></i><span>Upload Furniture</span>
                                        </a>
                                        <a href="office_view.php" class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-eye me-3"></i><span>View Furniture</span>
                                        </a>
                                        <a href="office_review.php" class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-star me-3"></i><span>Reviews</span>
                                        </a>
                                    </div>
                                </div>

                                <!-- Others Furniture -->
                                <a href="#" class="list-group-item list-group-item-action py-2" aria-expanded="false" data-bs-toggle="collapse" data-bs-target="#othersFurnitureDropdown" aria-controls="othersFurnitureDropdown">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fas fa-plus-circle me-3"></i><span>Others Furniture</span>
                                        </div>
                                        <i id="othersFurnitureDropdownIcon" class="fas fa-caret-down"></i>
                                    </div>
                                </a>
                                <div class="collapse" id="othersFurnitureDropdown">
                                    <div class="list-group">
                                        <a href="others_upload.php" class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-upload me-3"></i><span>Upload Furniture</span>
                                        </a>
                                        <a href="others_view.php" class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-eye me-3"></i><span>View Furniture</span>
                                        </a>
                                        <a href="others_review.php" class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-star me-3"></i><span>Reviews</span>
                                        </a>
                                    </div>
                                </div>

                                <a href="viewContact.php" class="list-group-item list-group-item-action py-2 ripple"><i class="fa-solid fa-address-book me-3"></i></i><span>Contact
                                    </span></a>

                                <!-- Logout link -->
                                <a href="logout.php" id="logoutLink" class="list-group-item list-group-item-action py-2 ripple text-danger">
                                    <i class="fas fa-sign-out-alt me-3"></i><span><b>Logout</b></span>
                                </a>

                                <!-- Add other navigation links here -->
                            </div>
                        </div>
                    </nav>


                    <!-- Navbar -->
                    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
                        <div class="container-fluid">
                            <!-- Brand -->
                            <a class="navbar-brand" href="dashboard.php">
                                <img src="../img/logo.jpg" height="50" alt="Ittadi Logo" loading="lazy">
                                Ittadi Furniture - Admin Panel
                            </a>

                            <!-- Toggle button -->
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <!-- Collapsible content -->
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <div class="list-group list-group-flush mx-3 mt-4 navbar-nav me-auto mb-2 mb-lg-0 d-lg-none">
                                    <!-- Navigation links with Bootstrap styling -->
                                    <a href="dashboard.php" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                                        <i class="fas fa-tachometer-alt fa-fw  me-3"></i><span>Dashboard</span>
                                    </a>

                                    <!-- Bedroom -->
                                    <a href="#" class="list-group-item list-group-item-action py-2" aria-expanded="false" data-bs-toggle="collapse" data-bs-target="#bedroomDropdown" aria-controls="bedroomDropdown">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <i class="fas fa-bed me-3"></i><span>Bedroom</span>
                                            </div>
                                            <i id="bedroomDropdownIcon" class="fas fa-caret-down"></i>
                                        </div>
                                    </a>
                                    <div class="collapse" id="bedroomDropdown">
                                        <div class="list-group">
                                            <a href="bedroom_upload.php" class="list-group-item list-group-item-action py-2">
                                                <i class="fas fa-upload me-3"></i><span>Upload Furniture</span>
                                            </a>
                                            <a href="bedroom_view.php" class="list-group-item list-group-item-action py-2">
                                                <i class="fas fa-eye me-3"></i><span>View Furniture</span>
                                            </a>
                                            <a href="bedroom_review.php" class="list-group-item list-group-item-action py-2">
                                                <i class="fas fa-star me-3"></i><span>Reviews</span>
                                            </a>
                                        </div>
                                    </div>

                                    <!-- Living Room -->
                                    <a href="#" class="list-group-item list-group-item-action py-2" aria-expanded="false" data-bs-toggle="collapse" data-bs-target="#livingRoomDropdown" aria-controls="livingRoomDropdown">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <i class="fas fa-couch me-3"></i><span>Living Room</span>
                                            </div>
                                            <i id="livingRoomDropdownIcon" class="fas fa-caret-down"></i>
                                        </div>
                                    </a>
                                    <div class="collapse" id="livingRoomDropdown">
                                        <div class="list-group">
                                            <a href="living_upload.php" class="list-group-item list-group-item-action py-2">
                                                <i class="fas fa-upload me-3"></i><span>Upload Furniture</span>
                                            </a>
                                            <a href="living_view.php" class="list-group-item list-group-item-action py-2">
                                                <i class="fas fa-eye me-3"></i><span>View Furniture</span>
                                            </a>
                                            <a href="living_review.php" class="list-group-item list-group-item-action py-2">
                                                <i class="fas fa-star me-3"></i><span>Reviews</span>
                                            </a>
                                        </div>
                                    </div>

                                    <!-- Reading Room -->
                                    <a href="#" class="list-group-item list-group-item-action py-2" aria-expanded="false" data-bs-toggle="collapse" data-bs-target="#readingRoomDropdown" aria-controls="readingRoomDropdown">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <i class="fas fa-book me-3"></i><span>Reading Room</span>
                                            </div>
                                            <i id="readingRoomDropdownIcon" class="fas fa-caret-down"></i>
                                        </div>
                                    </a>
                                    <div class="collapse" id="readingRoomDropdown">
                                        <div class="list-group">
                                            <a href="reading_upload.php" class="list-group-item list-group-item-action py-2">
                                                <i class="fas fa-upload me-3"></i><span>Upload Furniture</span>
                                            </a>
                                            <a href="reading_view.php" class="list-group-item list-group-item-action py-2">
                                                <i class="fas fa-eye me-3"></i><span>View Furniture</span>
                                            </a>
                                            <a href="reading_review.php" class="list-group-item list-group-item-action py-2">
                                                <i class="fas fa-star me-3"></i><span>Reviews</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Dining Room -->
                                    <a href="#" class="list-group-item list-group-item-action py-2" aria-expanded="false" data-bs-toggle="collapse" data-bs-target="#diningRoomDropdown" aria-controls="diningRoomDropdown">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <i class="fas fa-utensils me-3"></i><span>Dining Room</span>
                                            </div>
                                            <i id="diningRoomDropdownIcon" class="fas fa-caret-down"></i>
                                        </div>
                                    </a>
                                    <div class="collapse" id="diningRoomDropdown">
                                        <div class="list-group">
                                            <a href="dinning_upload.php" class="list-group-item list-group-item-action py-2">
                                                <i class="fas fa-upload me-3"></i><span>Upload Furniture</span>
                                            </a>
                                            <a href="dinning_view.php" class="list-group-item list-group-item-action py-2">
                                                <i class="fas fa-eye me-3"></i><span>View Furniture</span>
                                            </a>
                                            <a href="dining_review.php" class="list-group-item list-group-item-action py-2">
                                                <i class="fas fa-star me-3"></i><span>Reviews</span>
                                            </a>
                                        </div>
                                    </div>

                                    <!-- Office Room -->
                                    <a href="#" class="list-group-item list-group-item-action py-2" aria-expanded="false" data-bs-toggle="collapse" data-bs-target="#officeRoomDropdown" aria-controls="officeRoomDropdown">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <i class="fas fa-briefcase me-3"></i><span>Office Room</span>
                                            </div>
                                            <i id="officeRoomDropdownIcon" class="fas fa-caret-down"></i>
                                        </div>
                                    </a>
                                    <div class="collapse" id="officeRoomDropdown">
                                        <div class="list-group">
                                            <a href="office_upload.php" class="list-group-item list-group-item-action py-2">
                                                <i class="fas fa-upload me-3"></i><span>Upload Furniture</span>
                                            </a>
                                            <a href="office_view.php" class="list-group-item list-group-item-action py-2">
                                                <i class="fas fa-eye me-3"></i><span>View Furniture</span>
                                            </a>
                                            <a href="office_review.php" class="list-group-item list-group-item-action py-2">
                                                <i class="fas fa-star me-3"></i><span>Reviews</span>
                                            </a>
                                        </div>
                                    </div>

                                    <!-- Others Furniture -->
                                    <a href="#" class="list-group-item list-group-item-action py-2" aria-expanded="false" data-bs-toggle="collapse" data-bs-target="#othersFurnitureDropdown" aria-controls="othersFurnitureDropdown">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <i class="fas fa-plus-circle me-3"></i><span>Others Furniture</span>
                                            </div>
                                            <i id="othersFurnitureDropdownIcon" class="fas fa-caret-down"></i>
                                        </div>
                                    </a>
                                    <div class="collapse" id="othersFurnitureDropdown">
                                        <div class="list-group">
                                            <a href="others_upload.php" class="list-group-item list-group-item-action py-2">
                                                <i class="fas fa-upload me-3"></i><span>Upload Furniture</span>
                                            </a>
                                            <a href="others_view.php" class="list-group-item list-group-item-action py-2">
                                                <i class="fas fa-eye me-3"></i><span>View Furniture</span>
                                            </a>
                                            <a href="others_review.php" class="list-group-item list-group-item-action py-2">
                                                <i class="fas fa-star me-3"></i><span>Reviews</span>
                                            </a>
                                        </div>
                                    </div>

                                    <a href="viewContact.php" class="list-group-item list-group-item-action py-2 ripple"><i class="fa-solid fa-address-book me-3"></i></i><span>Contact
                                        </span></a>

                                    <!-- Logout link -->
                                    <a href="logout.php" id="logoutLink" class="list-group-item list-group-item-action py-2 ripple text-danger">
                                        <i class="fas fa-sign-out-alt me-3"></i><span><b>Logout</b></span>
                                    </a>

                                    <!-- Add other navigation links here -->

                                </div>
                            </div>
                    </nav>
                </header>

            </div>

            <div class="col-lg-10 col-md-12">
                <!-- Content section -->
                <div class="row justify-content-center mt-2">
                    <!-- <h1 class="mb-5  text-dark ">Welcome To Admin Panel </h1> -->
                    <!-- <h1 class="mb-5   text-white bg-dark d-flex d-block p-5 "> <u>Dashboard</u></h1> -->



                </div>

                <?php
                // PHP code block for fetching data from the database
                // ... (unchanged) ...
                include '../config.php';


                //BEDROOM
                $bedroomBed = mysqli_query($conn, "SELECT id FROM bedroom WHERE bedroom.type='bed' ORDER BY id");
                $bed = mysqli_num_rows($bedroomBed);

                $bedroomBed = mysqli_query($conn, "SELECT id FROM bedroom WHERE bedroom.type='bedside table' ORDER BY id");
                $bedside = mysqli_num_rows($bedroomBed);

                $bedroomBed = mysqli_query($conn, "SELECT id FROM bedroom WHERE bedroom.type='chest of drawer' ORDER BY id");
                $chest = mysqli_num_rows($bedroomBed);

                $bedroomBed = mysqli_query($conn, "SELECT id FROM bedroom WHERE bedroom.type='almirah' ORDER BY id");
                $almirah = mysqli_num_rows($bedroomBed);

                $bedroomBed = mysqli_query($conn, "SELECT id FROM bedroom WHERE bedroom.type='wardrobe' ORDER BY id");
                $wardrobe = mysqli_num_rows($bedroomBed);

                $bedroomBed = mysqli_query($conn, "SELECT id FROM bedroom WHERE bedroom.type='alna & hanger' ORDER BY id");
                $alna = mysqli_num_rows($bedroomBed);

                $bedroomBed = mysqli_query($conn, "SELECT id FROM bedroom WHERE bedroom.type='easy & smart stool' ORDER BY id");
                $easy = mysqli_num_rows($bedroomBed);

                $bedroomBed = mysqli_query($conn, "SELECT id FROM bedroom WHERE bedroom.type='dressing table' ORDER BY id");
                $dressing = mysqli_num_rows($bedroomBed);



                //LIVINGROOM
                $livingsofa = mysqli_query($conn, "SELECT id FROM living WHERE living.type='Sofa' ORDER BY id");
                $sofa = mysqli_num_rows($livingsofa);

                $livingbed = mysqli_query($conn, "SELECT id FROM living WHERE living.type='Sofa cum Bed' ORDER BY id");
                $sofabed = mysqli_num_rows($livingbed);

                $livingcenter = mysqli_query($conn, "SELECT id FROM living WHERE living.type='Center Table' ORDER BY id");
                $centertable = mysqli_num_rows($livingcenter);

                $livingdivan = mysqli_query($conn, "SELECT id FROM living WHERE living.type='Divan' ORDER BY id");
                $divan = mysqli_num_rows($livingdivan);

                $livingcabinet = mysqli_query($conn, "SELECT id FROM living WHERE living.type='Cabinet' ORDER BY id");
                $cabinet = mysqli_num_rows($livingcabinet);

                $livingshowcase = mysqli_query($conn, "SELECT id FROM living WHERE living.type='Showcase' ORDER BY id");
                $showcase = mysqli_num_rows($livingshowcase);

                $livingchair = mysqli_query($conn, "SELECT id FROM living WHERE living.type='Easy Chair' ORDER BY id");
                $easychair = mysqli_num_rows($livingchair);

                $livingchair1 = mysqli_query($conn, "SELECT id FROM living WHERE living.type='Rocking Chair' ORDER BY id");
                $rockingchair = mysqli_num_rows($livingchair1);



                //Readingroom
                $RreadingChair = mysqli_query($conn, "SELECT id FROM reading WHERE reading.type='Reading Chair' ORDER BY id");
                $readingchair = mysqli_num_rows($RreadingChair);

                $RcomputerChair = mysqli_query($conn, "SELECT id FROM reading WHERE reading.type='Computer Chair' ORDER BY id");
                $computerchair = mysqli_num_rows($RcomputerChair);

                $RreadingTable = mysqli_query($conn, "SELECT id FROM reading WHERE reading.type='Reading Table' ORDER BY id");
                $readingTable = mysqli_num_rows($RreadingTable);

                $RcomputerTable = mysqli_query($conn, "SELECT id FROM reading WHERE reading.type='Computer Table' ORDER BY id");
                $computerTable = mysqli_num_rows($RcomputerTable);

                $Rbookshelf= mysqli_query($conn, "SELECT id FROM reading WHERE reading.type='Bookshelf' ORDER BY id");
                $bookshelf = mysqli_num_rows($Rbookshelf);



                //diningroom
                $Ddinningtable = mysqli_query($conn, "SELECT id FROM dinning WHERE dinning.type='Dining Table' ORDER BY id");
                $dinningtable = mysqli_num_rows($Ddinningtable);

                $Ddinningchair = mysqli_query($conn, "SELECT id FROM dinning WHERE dinning.type='Dining Chair' ORDER BY id");
                $dinningchair = mysqli_num_rows($Ddinningchair);

                $Ddinningset = mysqli_query($conn, "SELECT id FROM dinning WHERE dinning.type='Dining Set' ORDER BY id");
                $dinningset = mysqli_num_rows($Ddinningset);

                $Ddinningwagon = mysqli_query($conn, "SELECT id FROM dinning WHERE dinning.type='Dinner Wagon' ORDER BY id");
                $dinningwagon = mysqli_num_rows($Ddinningwagon);

                $Dshowcase= mysqli_query($conn, "SELECT id FROM dinning WHERE dinning.type='Showcase' ORDER BY id");
                $showcase = mysqli_num_rows($Dshowcase);





                //Officeroom
                $Oexutable = mysqli_query($conn, "SELECT id FROM office WHERE office.type='Executive Table' ORDER BY id");
                $executivetable = mysqli_num_rows($Oexutable);

                $Osexutable = mysqli_query($conn, "SELECT id FROM office WHERE office.type='Senior Ex Table' ORDER BY id");
                $seniroextable = mysqli_num_rows($Osexutable);

                $Oswivelchair = mysqli_query($conn, "SELECT id FROM office WHERE office.type='Swivel Chair' ORDER BY id");
                $swivelchair = mysqli_num_rows($Oswivelchair);

                $Ovisitorchair = mysqli_query($conn, "SELECT id FROM office WHERE office.type='Visitor Chair' ORDER BY id");
                $visitorchair = mysqli_num_rows($Ovisitorchair);

                $Owaitingchair = mysqli_query($conn, "SELECT id FROM office WHERE office.type='Waiting Chair' ORDER BY id");
                $waitingchair = mysqli_num_rows($Owaitingchair);

                $Owaitingsofa = mysqli_query($conn, "SELECT id FROM office WHERE office.type='Waiting Sofa' ORDER BY id");
                $waitingsofa = mysqli_num_rows($Owaitingsofa);

                $Osidetable = mysqli_query($conn, "SELECT id FROM office WHERE office.type='Side Table' ORDER BY id");
                $sidetable = mysqli_num_rows($Osidetable);





                //Others
                $Orack = mysqli_query($conn, "SELECT id FROM others WHERE others.type='Rack' ORDER BY id");
                $rack = mysqli_num_rows($Orack);

                $Osidebox = mysqli_query($conn, "SELECT id FROM others WHERE others.type='Side Box' ORDER BY id");
                $sidebox = mysqli_num_rows($Osidebox);

                $Omattress = mysqli_query($conn, "SELECT id FROM others WHERE others.type='Mattress' ORDER BY id");
                $mattress = mysqli_num_rows($Omattress);

                $Oofficeset = mysqli_query($conn, "SELECT id FROM others WHERE others.type='Office Set' ORDER BY id");
                $officeset = mysqli_num_rows($Oofficeset);

                $Ohomedecor = mysqli_query($conn, "SELECT id FROM others WHERE others.type='Home Decor' ORDER BY id");
                $homedecor = mysqli_num_rows($Ohomedecor);

                $Oweddingset = mysqli_query($conn, "SELECT id FROM others WHERE others.type='Wedding Set' ORDER BY id");
                $weddingset = mysqli_num_rows($Oweddingset);

                $Oteatable = mysqli_query($conn, "SELECT id FROM others WHERE others.type='Tea Table' ORDER BY id");
                $teatable = mysqli_num_rows($Oteatable);





                ?>

                <!-- Cards displaying fetched data bedroom -->
                <div class="container">


                         <!-- Bedroom -->
                    <h3 class="text-success text-center mt-5">Total Bedroom Furniture</h3>
                    <div class="row">
                        <?php
                        // Define an array with furniture categories and their corresponding variables
                        $furnitureCategories = [
                            ['name' => 'Bed', 'count' => $bed],
                            ['name' => 'Bedside table', 'count' => $bedside],
                            ['name' => 'Dressing table', 'count' => $dressing],
                            ['name' => 'Chest of Drawer', 'count' => $chest],
                            ['name' => 'Almirah', 'count' => $almirah],
                            ['name' => 'Wardrobe', 'count' => $wardrobe],
                            ['name' => 'Alna & Hanger', 'count' => $alna],
                            ['name' => 'Easy & smart stool', 'count' => $easy],
                            // Add more categories as needed
                        ];

                        // Loop through the categories array and generate HTML for each category
                        foreach ($furnitureCategories as $category) {
                        ?>
                            <div class="col-lg-2 col-md-4 col-sm-6 col-6 mb-4">
                                <div class="furniture-card">
                                    <h6>
                                        <?php echo $category['name']; ?>
                                    </h6>
                                    <p>Total:
                                        <?php echo $category['count']; ?>
                                    </p>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div><hr class="p-1 text-success mb-5">
                    <!-- Cards displaying fetched data livingroom -->


                    <!-- Livingroom -->

                    <h3 class="text-success text-center mt-3">Total Livingroom Furniture</h3>
                    <div class="row">
                        <?php
                        // Define an array with furniture categories and their corresponding variables
                        $furnitureCategories = [
                            ['name' => 'Sofa', 'count' => $sofa],
                            ['name' => 'Sofa cum Bed', 'count' => $sofabed],
                            ['name' => 'Center Table', 'count' => $centertable],
                            ['name' => 'Divan', 'count' => $divan],
                            ['name' => 'Cabinet', 'count' => $cabinet],
                            ['name' => 'Showcase', 'count' => $showcase],
                            ['name' => 'Easy Chair', 'count' => $easychair],
                            ['name' => 'Rocking Chair', 'count' => $rockingchair],
                            // Add more categories as needed
                        ];

                        // Loop through the categories array and generate HTML for each category
                        foreach ($furnitureCategories as $category) {
                        ?>
                            <div class="col-lg-2 col-md-4 col-sm-6 col-6 mb-4">
                                <div class="furniture-card">
                                    <h6>
                                        <?php echo $category['name']; ?>
                                    </h6>
                                    <p>Total:
                                        <?php echo $category['count']; ?>
                                    </p>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div><hr class="p-1 text-success mb-5">




                    
                    <!-- Office Room -->

                    <h3 class="text-success text-center mt-3">Total Office Room Furniture</h3>
                    <div class="row">
                        <?php
                        // Define an array with furniture categories and their corresponding variables
                        $furnitureCategories = [
                            ['name' => 'Executive Table', 'count' => $executivetable],
                            ['name' => 'Senior Ex table', 'count' => $seniroextable],
                            ['name' => 'Swivel Chair', 'count' => $swivelchair],
                            ['name' => 'Visitor Chair', 'count' => $visitorchair],
                            ['name' => 'Waiting Chair', 'count' => $waitingchair],
                            ['name' => 'Waiting Sofa', 'count' => $waitingsofa],
                            ['name' => 'Side Table', 'count' => $sidetable],
                            // Add more categories as needed
                        ];

                        // Loop through the categories array and generate HTML for each category
                        foreach ($furnitureCategories as $category) {
                        ?>
                            <div class="col-lg-2 col-md-4 col-sm-6 col-6 mb-4">
                                <div class="furniture-card">
                                    <h6>
                                        <?php echo $category['name']; ?>
                                    </h6>
                                    <p>Total:
                                        <?php echo $category['count']; ?>
                                    </p>
                                </div>
                            </div>
                        <?php
                        }
                        ?> 
                    </div><hr class="p-1 text-success mb-5">



                    <!-- Others -->

                    <h3 class="text-success text-center mt-3">Total Others Furniture</h3>
                    <div class="row">
                        <?php
                        // Define an array with furniture categories and their corresponding variables
                        $furnitureCategories = [
                            ['name' => 'Rack', 'count' => $rack],
                            ['name' => 'Side Box', 'count' => $sidebox], 
                            ['name' => 'Mattress', 'count' => $mattress],
                            ['name' => 'Office Set', 'count' => $officeset],
                            ['name' => 'Home Decor', 'count' => $homedecor],
                            ['name' => 'Wedding Set', 'count' => $weddingset],
                            ['name' => 'Tea Table', 'count' => $teatable],
                            // Add more categories as needed
                        ];

                        // Loop through the categories array and generate HTML for each category
                        foreach ($furnitureCategories as $category) {
                        ?>
                            <div class="col-lg-2 col-md-4 col-sm-6 col-6 mb-4">
                                <div class="furniture-card">
                                    <h6>
                                        <?php echo $category['name']; ?>
                                    </h6>
                                    <p>Total:
                                        <?php echo $category['count']; ?>
                                    </p>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div><hr class="p-1 text-success mb-5">

                    <!-- Readingroom -->

                    <h3 class="text-success text-center mt-3">Total Readingroom Furniture</h3>
                    <div class="row">
                        <?php
                        // Define an array with furniture categories and their corresponding variables
                        $furnitureCategories = [
                            ['name' => 'Bookshelf', 'count' => $bookshelf],
                            ['name' => 'Reading Table', 'count' => $readingTable],
                            ['name' => 'Computer Table', 'count' => $computerTable],
                            ['name' => 'Computer Chair', 'count' => $computerchair],
                            ['name' => 'Reading Chair', 'count' => $readingchair],
                            
                            // Add more categories as needed
                        ];

                        // Loop through the categories array and generate HTML for each category
                        foreach ($furnitureCategories as $category) {
                        ?>
                            <div class="col-lg-2 col-md-4 col-sm-6 col-6 mb-4">
                                <div class="furniture-card">
                                    <h6>
                                        <?php echo $category['name']; ?>
                                    </h6>
                                    <p>Total:
                                        <?php echo $category['count']; ?>
                                    </p>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div><hr class="p-1 text-success mb-5">




                    <!-- Diningroom -->

                    <h3 class="text-success text-center mt-3">Total Diningroom Furniture</h3>
                    <div class="row">
                    <?php
                        // Define an array with furniture categories and their corresponding variables
                        $furnitureCategories = [
                            ['name' => 'Dining Table', 'count' => $dinningtable ],
                            ['name' => 'Dining Chair', 'count' => $dinningchair],
                            ['name' => 'Dining Set', 'count' => $dinningset],
                            ['name' => 'Dinner Wagon', 'count' => $dinningwagon],
                            ['name' => 'Showcase', 'count' => $showcase],
                            
                            // Add more categories as needed
                        ];

                        // Loop through the categories array and generate HTML for each category
                        foreach ($furnitureCategories as $category) {
                        ?>
                            <div class="col-lg-2 col-md-4 col-sm-6 col-6 mb-4">
                                <div class="furniture-card">
                                    <h6>
                                        <?php echo $category['name']; ?>
                                    </h6>
                                    <p>Total:
                                        <?php echo $category['count']; ?>
                                    </p>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div><hr class="p-1 text-success mb-5">



                </div>


            </div>
        </div>
    </div>

    <!-- Bootstrap and Popper.js JavaScript for responsive behavior -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>