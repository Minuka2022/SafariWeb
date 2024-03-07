<?php
// Connect to the database
include 'db_connection.php';

if (isset($_GET['park_id'])) {
    // Sanitize the input
    $parkId = mysqli_real_escape_string($connection, $_GET['park_id']);

    // Fetch image URLs for the specified park
    $query = "SELECT image_urls FROM national_parks WHERE id = '$parkId'";
    $result = mysqli_query($connection, $query);

    if ($result) {
        // Extract image URLs from the result
        $row = mysqli_fetch_assoc($result);
        $imageUrls = explode(',', $row['image_urls']);

        // Output image URLs as JSON
        echo json_encode($imageUrls);
    } else {
        // Error handling if query fails
        echo json_encode(array('error' => 'Failed to fetch images'));
    }
} else {
    // Error handling if park_id is not provided
    echo json_encode(array('error' => 'Park ID is not provided'));
}
?>
