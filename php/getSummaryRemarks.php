<?php 

    include 'connection.php';

    // check database connection
    if (!$connection)
        die("Connection failed: " . mysqli_connect_error());

    $sql = "SELECT COUNT(id) AS remarksCount, remarks 
            FROM participants 
            WHERE remarks IN ('Finished', 'On-going', 'Canceled', 'Completed')
            GROUP BY remarks";

    $result = mysqli_query($connection, $sql);

    $remarks = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $remarks[] = $row;
    }
    
    header('Content-type: application/json');
    echo json_encode($remarks);

    mysqli_close($connection);

?>