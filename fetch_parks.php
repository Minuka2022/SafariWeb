<?php
// Connect to database and fetch park data
include 'db_connection.php';

$query = "SELECT * FROM national_parks";
$result = mysqli_query($connection, $query);

$parks = array();
while($row = mysqli_fetch_assoc($result)) {
    $parks[] = $row;
}

echo json_encode($parks);
?>
