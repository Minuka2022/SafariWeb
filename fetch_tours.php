<?php
// Connect to database and fetch tour data
include 'db_connection.php';

if(isset($_GET['park_id'])) {
    $parkId = $_GET['park_id'];
    $query = "SELECT * FROM tour_details WHERE park_id = '$parkId'";
    $result = mysqli_query($connection, $query);

    $tours = array();
    while($row = mysqli_fetch_assoc($result)) {
        $tours[] = $row;
    }

    echo json_encode($tours);
}
?>
