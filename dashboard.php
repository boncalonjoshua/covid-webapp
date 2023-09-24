<?php
session_start();
if (isset($_SESSION['username'])) {
    $user = $_SESSION['username'];
} else {
    header('Location: index.php');
}
include './common/header.php';
?>


<div class="container">
    <div class="row">
        <div class="col-md-12" style="display: inline-block;">
            <p style="float: right;color:#333;"><a href="./index.php?logout=true">Logout</a></p>
            <h2 style="">Dashboard</h2>
        </div>
        <div class="col-md-12">
            <h3>Welcome,
                <?php echo $user; ?>!
            </h3>
        </div>
    </div>
</div>




<?php
include './common/footer.php';
?>