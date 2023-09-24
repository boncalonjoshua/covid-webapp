<?php

include 'connection.php';

// check database connection
if (!$connection)
    die("Connection failed: " . mysqli_connect_error());

function validate_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$full_name = isset($_POST['full_name']) ? $_POST['full_name'] : 'empty';
$age = isset($_POST['age']) ? $_POST['age'] : 'empty';
$mobile_no = isset($_POST['mobile_no']) ? $_POST['mobile_no'] : 'empty';
$gender = isset($_POST['gender']) ? $_POST['gender'] : 'empty';
$temperature = isset($_POST['temperature']) ? $_POST['temperature'] : '0.0';
$vaccinated = isset($_POST['vaccinated']) ? $_POST['vaccinated'] : 'No';
$diagnosed = isset($_POST['diagnosed']) ? $_POST['diagnosed'] : 'No';
$encountered = isset($_POST['encountered']) ? $_POST['encountered'] : 'No';
$nationality = isset($_POST['nationality']) ? $_POST['nationality'] : '';

$sql = "INSERT INTO declaration (full_name, age, gender, mobile_no, temperature, vaccinated, diagnosed, encountered, nationality)" .
    "VALUES ('" . $full_name . "', " .
    "'" . $age . "', " .
    "'" . $gender . "', " .
    "'" . $mobile_no . "', " .
    "'" . $temperature . "', " .
    "'" . $vaccinated . "', " .
    "'" . $diagnosed . "', " .
    "'" . $encountered . "', " .
    "'" . $nationality . "') ";

$result = mysqli_query($connection, $sql);

echo mysqli_insert_id($connection);

mysqli_close($connection);

?>