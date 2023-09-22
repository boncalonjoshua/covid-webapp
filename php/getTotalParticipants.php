<?php 

    include 'connection.php';

    // check database connection
    if (!$connection)
        die("Connection failed: " . mysqli_connect_error());

    $sql = "SELECT COUNT(id) AS totalParticipants FROM participants";

    $result = mysqli_query($connection, $sql);

    $totalParticipants[] = mysqli_fetch_assoc($result);

    header('Content-type: application/json');
    echo json_encode($totalParticipants);

    mysqli_close($connection);

?>