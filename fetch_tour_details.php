<?php
// Connect to the database
include 'db_connection.php';

if(isset($_GET['tour_id'])) {
    $tourId = $_GET['tour_id'];
    // Fetch tour details based on the tour ID
    $query = "SELECT * FROM tour_details WHERE id = '$tourId'";
    $result = mysqli_query($connection, $query);

    if($result && mysqli_num_rows($result) > 0) {
        $tourDetails = mysqli_fetch_assoc($result);
        // Return the tour details as JSON
        echo json_encode($tourDetails);
    } else {
        // No tour found with the given ID
        echo json_encode(array('error' => 'Tour not found'));
    }
} else {
    // No tour ID provided
    echo json_encode(array('error' => 'No tour ID provided'));
}
?>
