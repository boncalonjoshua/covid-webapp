<?php
session_start();
if(isset($_SESSION['username'])){
    $user = $_SESSION['username'];
}else{
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/index.css" rel="Stylesheet">
    <title>Dashboard</title>
    <style>body{ background: #fff; }</style>
</head>
<body>
<div class="dashboard-header">
    <h3 style="padding: 20px;color: #fff;"><img src="./images/covid.png" class="col-md-4" style="text-align: center; width: 5%;"> CoViD-19 Monitoring</h3>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12" style="display: inline-block;">
            <p style="float: right;color:#333;"><a href="./index.php?logout=true">Logout</a></p>
            <h4 style="">Dashboard</h4>
        </div>
        <div class="col-md-12">
            <h3>Welcome, <?php echo $user; ?>!</h3>
        </div>
    </div>
</div>
</body>
</html>
