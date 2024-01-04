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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="../css/admin.css">
    <script src="../js/admin.js"></script>

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
                                <a href="dashboard.php" class="list-group-item list-group-item-action py-2 ripple"
                                    aria-current="true">
                                    <i class="fas fa-tachometer-alt fa-fw  me-3"></i><span>Dashboard</span>
                                </a>

                                <!-- Bedroom -->
                                <a href="#" class="list-group-item list-group-item-action py-2" aria-expanded="false"
                                    data-bs-toggle="collapse" data-bs-target="#bedroomDropdown"
                                    aria-controls="bedroomDropdown">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fas fa-bed me-3"></i><span>Bedroom</span>
                                        </div>
                                        <i id="bedroomDropdownIcon" class="fas fa-caret-down"></i>
                                    </div>
                                </a>
                                <div class="collapse" id="bedroomDropdown">
                                    <div class="list-group">
                                        <a href="bedroom_upload.php"
                                            class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-upload me-3"></i><span>Upload Furniture</span>
                                        </a>
                                        <a href="bedroom_view.php" class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-eye me-3"></i><span>View Furniture</span>
                                        </a>
                                        <a href="bedroom_review.php"
                                            class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-star me-3"></i><span>Reviews</span>
                                        </a>
                                    </div>
                                </div>

                                <!-- Living Room -->
                                <a href="#" class="list-group-item list-group-item-action py-2" aria-expanded="false"
                                    data-bs-toggle="collapse" data-bs-target="#livingRoomDropdown"
                                    aria-controls="livingRoomDropdown">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fas fa-couch me-3"></i><span>Living Room</span>
                                        </div>
                                        <i id="livingRoomDropdownIcon" class="fas fa-caret-down"></i>
                                    </div>
                                </a>
                                <div class="collapse" id="livingRoomDropdown">
                                    <div class="list-group">
                                        <a href="living_upload.php"
                                            class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-upload me-3"></i><span>Upload Furniture</span>
                                        </a>
                                        <a href="living_view.php"
                                            class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-eye me-3"></i><span>View Furniture</span>
                                        </a>
                                        <a href="living_review.php"
                                            class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-star me-3"></i><span>Reviews</span>
                                        </a>
                                    </div>
                                </div>

                                <!-- Reading Room -->
                                <a href="#" class="list-group-item list-group-item-action py-2" aria-expanded="false"
                                    data-bs-toggle="collapse" data-bs-target="#readingRoomDropdown"
                                    aria-controls="readingRoomDropdown">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fas fa-book me-3"></i><span>Reading Room</span>
                                        </div>
                                        <i id="readingRoomDropdownIcon" class="fas fa-caret-down"></i>
                                    </div>
                                </a>
                                <div class="collapse" id="readingRoomDropdown">
                                    <div class="list-group">
                                        <a href="reading_upload.php"
                                            class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-upload me-3"></i><span>Upload Furniture</span>
                                        </a>
                                        <a href="reading_view.php"
                                            class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-eye me-3"></i><span>View Furniture</span>
                                        </a>
                                        <a href="reading_review.php"
                                            class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-star me-3"></i><span>Reviews</span>
                                        </a>
                                    </div>
                                </div>
                                <!-- Dining Room -->
                                <a href="#" class="list-group-item list-group-item-action py-2" aria-expanded="false"
                                    data-bs-toggle="collapse" data-bs-target="#diningRoomDropdown"
                                    aria-controls="diningRoomDropdown">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fas fa-utensils me-3"></i><span>Dining Room</span>
                                        </div>
                                        <i id="diningRoomDropdownIcon" class="fas fa-caret-down"></i>
                                    </div>
                                </a>
                                <div class="collapse" id="diningRoomDropdown">
                                    <div class="list-group">
                                        <a href="dinning_upload.php"
                                            class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-upload me-3"></i><span>Upload Furniture</span>
                                        </a>
                                        <a href="dinning_view.php"
                                            class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-eye me-3"></i><span>View Furniture</span>
                                        </a>
                                        <a href="dining_review.php"
                                            class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-star me-3"></i><span>Reviews</span>
                                        </a>
                                    </div>
                                </div>

                                <!-- Office Room -->
                                <a href="#" class="list-group-item list-group-item-action py-2" aria-expanded="false"
                                    data-bs-toggle="collapse" data-bs-target="#officeRoomDropdown"
                                    aria-controls="officeRoomDropdown">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fas fa-briefcase me-3"></i><span>Office Room</span>
                                        </div>
                                        <i id="officeRoomDropdownIcon" class="fas fa-caret-down"></i>
                                    </div>
                                </a>
                                <div class="collapse" id="officeRoomDropdown">
                                    <div class="list-group">
                                        <a href="office_upload.php"
                                            class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-upload me-3"></i><span>Upload Furniture</span>
                                        </a>
                                        <a href="office_view.php"
                                            class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-eye me-3"></i><span>View Furniture</span>
                                        </a>
                                        <a href="office_review.php"
                                            class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-star me-3"></i><span>Reviews</span>
                                        </a>
                                    </div>
                                </div>

                                <!-- Others Furniture -->
                                <a href="#" class="list-group-item list-group-item-action py-2" aria-expanded="false"
                                    data-bs-toggle="collapse" data-bs-target="#othersFurnitureDropdown"
                                    aria-controls="othersFurnitureDropdown">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fas fa-plus-circle me-3"></i><span>Others Furniture</span>
                                        </div>
                                        <i id="othersFurnitureDropdownIcon" class="fas fa-caret-down"></i>
                                    </div>
                                </a>
                                <div class="collapse" id="othersFurnitureDropdown">
                                    <div class="list-group">
                                        <a href="others_upload.php"
                                            class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-upload me-3"></i><span>Upload Furniture</span>
                                        </a>
                                        <a href="others_view.php"
                                            class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-eye me-3"></i><span>View Furniture</span>
                                        </a>
                                        <a href="others_review.php"
                                            class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-star me-3"></i><span>Reviews</span>
                                        </a>
                                    </div>
                                </div>

                                <a href="viewContact.php"
                                    class="list-group-item list-group-item-action py-2 ripple"><i
                                        class="fa-solid fa-address-book me-3"></i></i><span>Contact
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
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <!-- Collapsible content -->
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <div
                                    class="list-group list-group-flush mx-3 mt-4 navbar-nav me-auto mb-2 mb-lg-0 d-lg-none">
                                    <!-- Navigation links with Bootstrap styling -->
                                    <a href="dashboard.php" class="list-group-item list-group-item-action py-2 ripple"
                                    aria-current="true">
                                    <i class="fas fa-tachometer-alt fa-fw  me-3"></i><span>Dashboard</span>
                                </a>

                                <!-- Bedroom -->
                                <a href="#" class="list-group-item list-group-item-action py-2" aria-expanded="false"
                                    data-bs-toggle="collapse" data-bs-target="#bedroomDropdown"
                                    aria-controls="bedroomDropdown">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fas fa-bed me-3"></i><span>Bedroom</span>
                                        </div>
                                        <i id="bedroomDropdownIcon" class="fas fa-caret-down"></i>
                                    </div>
                                </a>
                                <div class="collapse" id="bedroomDropdown">
                                    <div class="list-group">
                                        <a href="bedroom_upload.php"
                                            class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-upload me-3"></i><span>Upload Furniture</span>
                                        </a>
                                        <a href="bedroom_view.php" class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-eye me-3"></i><span>View Furniture</span>
                                        </a>
                                        <a href="bedroom_review.php"
                                            class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-star me-3"></i><span>Reviews</span>
                                        </a>
                                    </div>
                                </div>

                                <!-- Living Room -->
                                <a href="#" class="list-group-item list-group-item-action py-2" aria-expanded="false"
                                    data-bs-toggle="collapse" data-bs-target="#livingRoomDropdown"
                                    aria-controls="livingRoomDropdown">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fas fa-couch me-3"></i><span>Living Room</span>
                                        </div>
                                        <i id="livingRoomDropdownIcon" class="fas fa-caret-down"></i>
                                    </div>
                                </a>
                                <div class="collapse" id="livingRoomDropdown">
                                    <div class="list-group">
                                        <a href="living_upload.php"
                                            class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-upload me-3"></i><span>Upload Furniture</span>
                                        </a>
                                        <a href="living_view.php"
                                            class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-eye me-3"></i><span>View Furniture</span>
                                        </a>
                                        <a href="living_review.php"
                                            class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-star me-3"></i><span>Reviews</span>
                                        </a>
                                    </div>
                                </div>

                                <!-- Reading Room -->
                                <a href="#" class="list-group-item list-group-item-action py-2" aria-expanded="false"
                                    data-bs-toggle="collapse" data-bs-target="#readingRoomDropdown"
                                    aria-controls="readingRoomDropdown">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fas fa-book me-3"></i><span>Reading Room</span>
                                        </div>
                                        <i id="readingRoomDropdownIcon" class="fas fa-caret-down"></i>
                                    </div>
                                </a>
                                <div class="collapse" id="readingRoomDropdown">
                                    <div class="list-group">
                                        <a href="reading_upload.php"
                                            class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-upload me-3"></i><span>Upload Furniture</span>
                                        </a>
                                        <a href="reading_view.php"
                                            class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-eye me-3"></i><span>View Furniture</span>
                                        </a>
                                        <a href="reading_review.php"
                                            class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-star me-3"></i><span>Reviews</span>
                                        </a>
                                    </div>
                                </div>
                                <!-- Dining Room -->
                                <a href="#" class="list-group-item list-group-item-action py-2" aria-expanded="false"
                                    data-bs-toggle="collapse" data-bs-target="#diningRoomDropdown"
                                    aria-controls="diningRoomDropdown">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fas fa-utensils me-3"></i><span>Dining Room</span>
                                        </div>
                                        <i id="diningRoomDropdownIcon" class="fas fa-caret-down"></i>
                                    </div>
                                </a>
                                <div class="collapse" id="diningRoomDropdown">
                                    <div class="list-group">
                                        <a href="dinning_upload.php"
                                            class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-upload me-3"></i><span>Upload Furniture</span>
                                        </a>
                                        <a href="dinning_view.php"
                                            class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-eye me-3"></i><span>View Furniture</span>
                                        </a>
                                        <a href="dining_review.php"
                                            class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-star me-3"></i><span>Reviews</span>
                                        </a>
                                    </div>
                                </div>

                                <!-- Office Room -->
                                <a href="#" class="list-group-item list-group-item-action py-2" aria-expanded="false"
                                    data-bs-toggle="collapse" data-bs-target="#officeRoomDropdown"
                                    aria-controls="officeRoomDropdown">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fas fa-briefcase me-3"></i><span>Office Room</span>
                                        </div>
                                        <i id="officeRoomDropdownIcon" class="fas fa-caret-down"></i>
                                    </div>
                                </a>
                                <div class="collapse" id="officeRoomDropdown">
                                    <div class="list-group">
                                        <a href="office_upload.php"
                                            class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-upload me-3"></i><span>Upload Furniture</span>
                                        </a>
                                        <a href="office_view.php"
                                            class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-eye me-3"></i><span>View Furniture</span>
                                        </a>
                                        <a href="office_review.php"
                                            class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-star me-3"></i><span>Reviews</span>
                                        </a>
                                    </div>
                                </div>

                                <!-- Others Furniture -->
                                <a href="#" class="list-group-item list-group-item-action py-2" aria-expanded="false"
                                    data-bs-toggle="collapse" data-bs-target="#othersFurnitureDropdown"
                                    aria-controls="othersFurnitureDropdown">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fas fa-plus-circle me-3"></i><span>Others Furniture</span>
                                        </div>
                                        <i id="othersFurnitureDropdownIcon" class="fas fa-caret-down"></i>
                                    </div>
                                </a>
                                <div class="collapse" id="othersFurnitureDropdown">
                                    <div class="list-group">
                                        <a href="others_upload.php"
                                            class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-upload me-3"></i><span>Upload Furniture</span>
                                        </a>
                                        <a href="others_view.php"
                                            class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-eye me-3"></i><span>View Furniture</span>
                                        </a>
                                        <a href="others_review.php"
                                            class="list-group-item list-group-item-action py-2">
                                            <i class="fas fa-star me-3"></i><span>Reviews</span>
                                        </a>
                                    </div>
                                </div>

                                <a href="viewContact.php"
                                    class="list-group-item list-group-item-action py-2 ripple"><i
                                        class="fa-solid fa-address-book me-3"></i></i><span>Contact
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



                <!-- ------------------------------------------------------------------------------------------------------------------ -->
                <!-- Content section -->
                <div class="container mt-4 mb-5">
                    <caption>
                        <h4 class="text-center"> Living Details </h4>
                    </caption>
                    <table>

                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Code</th>
                                <th scope="col">Price</th>
                                <th scope="col">Type</th>
                                <th scope="col">Image</th>
                                <th scope="col">Update</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Connect to your database here (you'll need your database connection logic)
                            include 'config.php';
                            // Execute the SQL query
                            $sql = "SELECT living.id, living.name, living.code, living.price, living.type, MIN(living_images.image_path) AS image_path
                            FROM living
                            LEFT JOIN living_images ON living.id = living_images.furniture_id
                            GROUP BY living.id, living.name, living.code, living.price, living.type";
                            $result = mysqli_query($conn, $sql);

                            // Check if there are results
                            if (mysqli_num_rows($result) > 0) {
                                // Output data of each row
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td data-label='ID'>" . $row["id"] . "</td>";
                                    echo "<td data-label='Name'>" . $row["name"] . "</td>";
                                    echo "<td data-label='Code'>" . $row["code"] . "</td>";
                                    echo "<td data-label='Price'>" . $row["price"] . "</td>";
                                    echo "<td data-label='Type'>" . $row["type"] . "</td>";
                                    echo "<td data-label='Image'><img src='" . $row["image_path"] . "' width='60px'></td>";
                                    echo "<td data-label='Update'><a class='btn btn-primary' href='living_update.php?id=" . $row["id"] . "'>Update</a></td>";
                                    echo "<td data-label='Delete'><a class='btn btn-danger' href='javascript:void(0);' onclick='confirmDelete(" . $row["id"] . ")'>Delete</a></td>";

                                }
                            } else {
                                echo "0 results";
                            }

                            // Close the database connection
                            mysqli_close($conn);
                            ?>

                        </tbody>
                    </table>
                </div>
                <!-- ------------------------------------------------------------------------------------------------------------- -->


            </div>
        </div>
    </div>
   
   
    <div class="dark-overlay"></div>
    <script>
    
    function confirmDelete(id) {
        if (confirm("Are you sure you want to delete this item?")) {
            window.location.href = "living_delete.php?id=" + id;
        }
    }


</script>

    <!-- Bootstrap and Popper.js JavaScript for responsive behavior -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>

</body>

</html>