<?php

include 'connection.php';

// check database connection
if (!$connection)
    die("Connection failed: " . mysqli_connect_error());

$gender = isset($_GET['gender']) ? $_GET['gender'] : 'all';

if ($gender != 'all') {
    $sql = "SELECT COUNT(id) AS count, gender FROM declaration WHERE gender = '$gender'";
} else {
    $sql = "SELECT COUNT(id) AS count, gender
     FROM declaration
     GROUP BY gender";
}


$result = mysqli_query($connection, $sql);
$totalByGender = array();
while ($row = mysqli_fetch_assoc($result)) {
    $totalByGender[] = $row;
}

header('Content-type: application/json');
echo json_encode($totalByGender);

mysqli_close($connection);

?>