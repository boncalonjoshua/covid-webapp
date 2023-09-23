<?php
require('connection.php');
session_start();

$username = isset($_POST['username'])?$_POST['username']:'empty';
$password = isset($_POST['password'])?$_POST['password']:'empty';

$_SESSION['username'] = $username;

$query = "SELECT * FROM users WHERE user_name = '$username' AND password = '$password'";
$result = mysqli_query($connection,$query);

if(mysqli_num_rows($result) > 0){
    header('location: ../dashboard.php');
}else {
    header('location: ../index.php');
}

?>
