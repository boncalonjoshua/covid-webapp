<?php 

    include 'connection.php';

    // check database connection
    if (!$connection)
        die("Connection failed: " . mysqli_connect_error());

    $sql = "SELECT COUNT(id) AS totalMale FROM participants WHERE gender = 'Male'";

    $result = mysqli_query($connection, $sql);

    $totalMale[] = mysqli_fetch_assoc($result);

    header('Content-type: application/json');
    echo json_encode($totalMale);

    mysqli_close($connection);

?>