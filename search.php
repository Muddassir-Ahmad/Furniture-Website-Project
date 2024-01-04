<?php
// Include your config.php file to establish the database connection
include 'config.php';

// Check if the search form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the search term from the form
    $searchTerm = $_POST['search'] ?? '';

    // Define an array mapping search terms to corresponding pages
    $searchPages = [
        'bed' => 'icon_bed.php',
        'bed side table' => 'bedside_table.php',
        'bed table' => 'bedside_table.php',
        'bed side' => 'bedside_table.php',
        'chest drawer' => 'chest_of_drawer.php',
        'chest of drawer' => 'chest_of_drawer.php',
        'sofa' => 'icon_sofa.php',
        'chair' => 'icon_chair.php',
        'dressing table' => 'dressing_table.php',
        'wardrobe' => 'wardrobe.php',
        'cabinet' => 'cabinet.php',
        'official table' => 'officialtable.php',
        'reading table' => 'reading_table.php',
        'dining table' => 'dining_table.php',
        'computer table' => 'computer_table.php',
        'tea table' => 'teatable.php',
        'divan' => 'divan.php',
        'rack' => 'rack.php',
        'side box' => 'sidebox.php',
        'mattress' => 'mattress.php',
        'office set' => 'officeset.php',
        'home decor' => 'homedecor.php',
        'wedding set' => 'weddingset.php',
        'bedroom' => 'bedroom.php',
        'living' => 'livingroom.php',
        'livingroom' => 'livingroom.php',
        'reading' => 'readingroom.php',
        'readingroom' => 'readingroom.php',
        'dining' => 'diningroom.php',
        'diningroom' => 'diningroom.php',
        'office' => 'officeroom.php',
        'officeroom' => 'officeroom.php',
        'almirah' => 'almirah.php',
        'alna' => 'alna_hanger.php',
        'hanger' => 'alna_hanger.php',
        'alna and hanger' => 'alna_hanger.php',
        'easy smart stool' => 'easy_smart_stool.php',
        'smart stool' => 'easy_smart_stool.php',
        'sofa cum bed' => 'sofa_cum_bed.php',
        'sofa bed' => 'sofa_cum_bed.php',
        'center table' => 'center_table.php',
        'living showcase' => 'showcase.php',
        'showcase' => 'showcase.php',
        'dining showcase' => 'dining_showcase.php',
        'easy chair' => 'easy_chair.php',
        'rocking chair' => 'rocking_chair.php',
        'bookshelf' => 'bookshelf.php',
        'reading chair' => 'reading_chair.php',
        'computer chair' => 'computer_chair.php',
        'dining chair' => 'dining_chair.php',
        'dining set' => 'dining_set.php',
        'dinner wagon' => 'dinner_wagon.php',
        'wagon' => 'dinner_wagon.php',
        'executive table' => 'executive_table.php',
        'swivel chair' => 'swivel_chair.php',
        'visitor chair' => 'visitor_chair.php',
        'visitor' => 'visitor_chair.php',
        'waiting chair' => 'waiting_chair.php',
        'waiting sofa' => 'waiting_sofa.php',
        'side table' => 'side_table.php',
        

        
        // Add other search terms and their corresponding pages here
    ];

    // Check if the search term exists in the mapping array
    if (array_key_exists(strtolower($searchTerm), $searchPages)) {
        // Redirect to the corresponding page
        $page = $searchPages[strtolower($searchTerm)];
        header("Location: $page");
        exit();
    } else {
        // Redirect to a default page or display an error message
        header("Location: default.php");
        exit();
    }
}
?>