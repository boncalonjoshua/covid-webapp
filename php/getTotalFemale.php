<?php 

    include 'connection.php';

    // check database connection
    if (!$connection)
        die("Connection failed: " . mysqli_connect_error());

    $sql = "SELECT COUNT(id) AS totalFemale FROM participants WHERE gender = 'Female'";

    $result = mysqli_query($connection, $sql);

    $totalFemale[] = mysqli_fetch_assoc($result);

    header('Content-type: application/json');
    echo json_encode($totalFemale);

    mysqli_close($connection);

?>