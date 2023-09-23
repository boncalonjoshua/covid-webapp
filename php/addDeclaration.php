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

$full_name = validate_input($_POST['full_name']);
$age = validate_input($_POST['age']);
$mobile_no = validate_input($_POST['mobile_no']);
$gender = validate_input($_POST['gender']);
$temperature = validate_input($_POST['temperature']);
$vaccinated = validate_input($_POST['vaccinated']);
$diagnosed = validate_input($_POST['diagnosed']);
$encountered = validate_input($_POST['encountered']);
$nationality = validate_input($_POST['nationality']);


$sql = "INSERT INTO declaration (full_name, age, gender, mobile_no, temperature, vaccinated, diagnosed, encountered, nationality)" .
    "VALUES ('" . $full_name . "', " .
    "'" . $age . "', " .
    "'" . $gender . "', " .
    "'" . $mobile_no . "', " .
    "'" . $temperature . "', " .
    "'" . $vaccinated . "', " .
    "'" . $diagnosed . "')" .
    "'" . $encountered . "', " .
    "'" . $nationality . "', ";

mysqli_query($connection, $sql);

echo mysqli_insert_id($connection);

mysqli_close($connection);

?>