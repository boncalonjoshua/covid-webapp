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
            <h2 style="">Dashboard (
                <?php echo $user; ?> )
            </h2>
        </div>
    </div>
    <div class="row w-100" style="margin-top: 5%;">
        <div class="col-md-3 stat-card-container">
            <div class="card border-info mx-sm-1 p-3">
                <div class="card border-info shadow text-info p-3 my-card"><span class="fa fa-file-text-o"
                        aria-hidden="true"></span></div>
                <div class="text-info text-center mt-3">
                    <h4>Declarations</h4>
                </div>
                <div class="text-info text-center mt-2">
                    <h1 id="total_declarations">0</h1>
                </div>
            </div>
        </div>
        <div class="col-md-3 stat-card-container">
            <div class="card border-success mx-sm-1 p-3">
                <div class="card border-success shadow text-success p-3 my-card">
                    <span class="fa fa-heart" aria-hidden="true"></span>
                </div>
                <div class="text-success text-center mt-3">
                    <h4>Vaccinated</h4>
                </div>
                <div class="text-success text-center mt-2">
                    <h1 id="total_vaccinated">0</h1>
                </div>
            </div>
        </div>
        <div class="col-md-3 stat-card-container">
            <div class="card border-danger mx-sm-1 p-3">
                <div class="card border-danger shadow text-danger p-3 my-card">
                    <span class="fa fa-thermometer-three-quarters" aria-hidden="true"></span>
                </div>
                <div class="text-danger text-center mt-3">
                    <h4>Fever</h4>
                </div>
                <div class="text-danger text-center mt-2">
                    <h1 id="total_fever">0</h1>
                </div>
            </div>
        </div>
        <div class="col-md-3" stat-card-container>
            <div class="card border-warning mx-sm-1 p-3">
                <div class="card border-warning shadow text-warning p-3 my-card" style="border-radius:50%;">
                    <span class="fa fa-inbox" aria-hidden="true"></span>
                </div>
                <div class="text-warning text-center mt-3">
                    <h4>Encounters</h4>
                </div>
                <div class="text-warning text-center mt-2">
                    <h1 id="total_encountered"> 0</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row w-100" style="margin-top: 5%;">
        <div class="col-md-3 stat-card-container">
            <div class="card border-info mx-sm-1 p-3">
                <div class="card border-info shadow text-info p-3 my-card"><span class="fa fa-flag"
                        aria-hidden="true"></span></div>
                <div class="text-info text-center mt-3">
                    <h4>Adult</h4>
                </div>
                <div class="text-info text-center mt-2">
                    <h1 id="total_adult">0</h1>
                </div>
            </div>
        </div>
        <div class="col-md-3 stat-card-container">
            <div class="card border-success mx-sm-1 p-3">
                <div class="card border-success shadow text-success p-3 my-card">

                    <span class="fa fa-thermometer-three-quarters" aria-hidden="true"></span>
                </div>
                <div class="text-success text-center mt-3">
                    <h4>Minor</h4>
                </div>
                <div class="text-success text-center mt-2">
                    <h1 id="total_minor">0</h1>
                </div>
            </div>
        </div>
        <div class="col-md-3 stat-card-container">
            <div class="card border-danger mx-sm-1 p-3">
                <div class="card border-danger shadow text-danger p-3 my-card"><span class="fa fa-heart"
                        aria-hidden="true"></span></div>
                <div class="text-danger text-center mt-3">
                    <h4>Diagnosed</h4>
                </div>
                <div class="text-danger text-center mt-2">
                    <h1 id="total_diagnosed">0</h1>
                </div>
            </div>
        </div>
        <div class="col-md-3" stat-card-container>
            <div class="card border-warning mx-sm-1 p-3">
                <div class="card border-warning shadow text-warning p-3 my-card" style="border-radius:50%;">
                    <span class="fa fa-inbox" aria-hidden="true"></span>
                </div>
                <div class="text-warning text-center mt-3">
                    <h4>Foreigner</h4>
                </div>
                <div class="text-warning text-center mt-2">
                    <h1 id="total_foreigner">0</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="./js/statistics.js"></script>
<?php
include './common/footer.php';
?>