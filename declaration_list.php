<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
}
include './common/header.php';
?>
<div class="container">
    <div class="col-md-12" style="display: inline-block;">
        <p style="float: right;color:#333;"><a href="./index.php?logout=true">Logout</a></p>
        <h2 style="">Data List</h2>
    </div>
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModalForm"
        onclick="formClear()">
        Add new participants
    </button> -->

    <div class="modal fade" id="addModalForm" tabindex="-1" aria-labelledby="addModalFormLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalFormLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div>
                            <label for="full_name" class="col-form-label">Full Name</label>
                            <input type="text" class="form-control" id="full_name">
                        </div>
                        <div>
                            <label for="age" class="col-form-label">Age</label>
                            <input type="text" class="form-control" id="age">
                        </div>
                        <div>
                            <label for="gender" class="col-form-label">Gender</label>
                            <input type="text" class="form-control" id="gender">
                        </div>
                        <div>
                            <label for="nationality" class="col-form-label">Nationality</label>
                            <input type="text" class="form-control" id="nationality">
                        </div>

                        <div>
                            <label for="mobile_no" class="col-form-label">Mobile No.</label>
                            <input type="text" class="form-control" id="mobile_no">
                        </div>
                        <div>
                            <label for="temperature" class="col-form-label">Body Temperature</label>
                            <input type="text" class="form-control" id="temperature">
                        </div>
                        <div>
                            <label for="vaccinated" class="col-form-label">Vaccinated</label>
                            <input type="text" class="form-control" id="vaccinated">
                        </div>
                        <div>
                            <label for="encountered" class="col-form-label">Encountered</label>
                            <input type="text" class="form-control" id="encountered">
                        </div>
                        <div>
                            <label for="diagnosed" class="col-form-label">Diagnosed</label>
                            <input type="text" class="form-control" id="diagnosed">
                        </div>

                        <input type="hidden" id="id" name="id">
                    </div>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="btnSave">Save</button>
                </div>
            </div>
        </div>
    </div>

    <table class="table table-hover" id="declarationsList">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Fullname</th>
                <th scope="col">Age</th>
                <th scope="col">Gender</th>
                <th scope="col">Nationality</th>
                <th scope="col">Mobile No.</th>
                <th scope="col">Body Temp.</th>
                <th scope="col">Vaccinated</th>
                <th scope="col">Encountered</th>
                <th scope="col">Diagnosed</th>
            </tr>
        </thead>
        <tbody>

        </tbody>

    </table>
</div>

<script src="./js/declarations.js"></script>
<?php include('common/footer.php') ?>