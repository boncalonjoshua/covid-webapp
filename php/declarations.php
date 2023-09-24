<?php

include 'connection.php';

function validate_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (!$connection)
    die("Connection failed: " . mysqli_connect_error());


if (isset($_GET['delete'])) {

    $sql = "DELETE FROM declaration WHERE id = " . $_GET['delete'];
    if (mysqli_query($connection, $sql)) {
        $success = true;
    } else {
        $success = false;
    }
    echo $success;
}


if (isset($_GET['id'])) {

    if (intval($_GET['id']) > 0) {
        $sql = "SELECT * FROM declaration WHERE id = " . $_GET['id'];
        $result = mysqli_query($connection, $sql);
        $declarations[] = mysqli_fetch_assoc($result);
    } else {
        $sql = "SELECT * FROM declaration";
        $result = mysqli_query($connection, $sql);
        $declarations = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $declarations[] = $row;
        }
    }
    header('Content-type: application/json');
    echo json_encode($declarations);

}
if (isset($_GET['search'])) {

    $sql = "SELECT * FROM declaration WHERE full_name LIKE '%" . $_GET['search'] . "%'";
    $result = mysqli_query($connection, $sql);
    $declarations = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $declarations[] = $row;
    }
    header('Content-type: application/json');
    echo json_encode($declarations);

}

if (isset($_POST['update'])) {

    $full_name = isset($_POST['full_name']) ? $_POST['full_name'] : 'empty';
    $age = isset($_POST['age']) ? $_POST['age'] : 'empty';
    $mobile_no = isset($_POST['mobile_no']) ? $_POST['mobile_no'] : 'empty';
    $gender = isset($_POST['gender']) ? $_POST['gender'] : 'empty';
    $temperature = isset($_POST['temperature']) ? $_POST['temperature'] : '0.0';
    $vaccinated = isset($_POST['vaccinated']) ? $_POST['vaccinated'] : 'No';
    $diagnosed = isset($_POST['diagnosed']) ? $_POST['diagnosed'] : 'No';
    $encountered = isset($_POST['encountered']) ? $_POST['encountered'] : 'No';
    $nationality = isset($_POST['nationality']) ? $_POST['nationality'] : '';


    $sql = "UPDATE declaration SET " .
        "full_name = '" . $full_name . "', " .
        "age = '" . $age . "', " .
        "mobile_no = '" . $mobile_no . "', " .
        "gender = '" . $gender . "', " .
        "temperature = '" . $temperature . "', " .
        "vaccinated = '" . $vaccinated . "', " .
        "nationality = '" . $nationality . "', " .
        "encountered = '" . $encountered . "', " .
        "diagnosed = '" . $diagnosed . "'" .
        "WHERE id = " . $_POST['id'];

    if (mysqli_query($connection, $sql)) {
        $success = true;
    } else {
        $success = false;
    }

    echo $success;

}

mysqli_close($connection);

?>