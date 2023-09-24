<?php

include 'connection.php';

// check database connection
if (!$connection)
    die("Connection failed: " . mysqli_connect_error());


if (isset($_GET['total_declaration'])) {

    $sql = "SELECT COUNT(id) AS total_declaration FROM declaration";
    $result = mysqli_query($connection, $sql);
    $total_declaration[] = mysqli_fetch_assoc($result);
    header('Content-type: application/json');
    echo json_encode($total_declaration);

}

if (isset($_GET['total_fever'])) {
    $sql = "SELECT COUNT(id) AS total_fever FROM declaration WHERE temperature > 36.5";
    $result = mysqli_query($connection, $sql);
    $total_fever[] = mysqli_fetch_assoc($result);
    header('Content-type: application/json');
    echo json_encode($total_fever);
}

if (isset($_GET['total_vaccinated'])) {
    $sql = "SELECT COUNT(id) AS total_vaccinated FROM declaration WHERE vaccinated = 'Yes'";
    $result = mysqli_query($connection, $sql);
    $total_vaccinated[] = mysqli_fetch_assoc($result);
    header('Content-type: application/json');
    echo json_encode($total_vaccinated);
}

if (isset($_GET['total_encountered'])) {
    $sql = "SELECT COUNT(id) AS total_encountered FROM declaration WHERE encountered = 'Yes'";
    $result = mysqli_query($connection, $sql);
    $total_encountered[] = mysqli_fetch_assoc($result);
    header('Content-type: application/json');
    echo json_encode($total_encountered);
}
if (isset($_GET['total_diagnosed'])) {
    $sql = "SELECT COUNT(id) AS total_diagnosed FROM declaration WHERE diagnosed = 'Yes'";
    $result = mysqli_query($connection, $sql);
    $total_diagnosed[] = mysqli_fetch_assoc($result);
    header('Content-type: application/json');
    echo json_encode($total_diagnosed);
}

if (isset($_GET['total_adult'])) {
    $sql = "SELECT COUNT(id) AS total_adult FROM declaration WHERE age >= 18";
    $result = mysqli_query($connection, $sql);
    $total_adult[] = mysqli_fetch_assoc($result);
    header('Content-type: application/json');
    echo json_encode($total_adult);
}

if (isset($_GET['total_minor'])) {
    $sql = "SELECT COUNT(id) AS total_minor FROM declaration WHERE age < 18";
    $result = mysqli_query($connection, $sql);
    $total_minor[] = mysqli_fetch_assoc($result);
    header('Content-type: application/json');
    echo json_encode($total_minor);
}

if (isset($_GET['total_foreigner'])) {
    $sql = "SELECT COUNT(id) AS total_foreigner FROM declaration WHERE nationality <> 'Filipino'";
    $result = mysqli_query($connection, $sql);
    $total_foreigner[] = mysqli_fetch_assoc($result);
    header('Content-type: application/json');
    echo json_encode($total_foreigner);
}
// $gender = isset($_GET['gender']) ? $_GET['gender'] : 'all';

// if ($gender != 'all') {
//     $sql = "SELECT COUNT(id) AS count, gender FROM declaration WHERE gender = '$gender'";
// } else {
//     $sql = "SELECT COUNT(id) AS count, gender
//      FROM declaration
//      GROUP BY gender";
// }



// while ($row = mysqli_fetch_assoc($result)) {
//     $totalByGender[] = $row;
// }

// header('Content-type: application/json');
// echo json_encode($totalDeclaration);

mysqli_close($connection);

?>