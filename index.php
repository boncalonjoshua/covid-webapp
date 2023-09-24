<?php
if (isset($_GET['logout'])) {
    session_start();
    session_destroy();
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
    <title>Home</title>
</head>

<body>
    <?php include 'modals/loginPopup.php'; ?> <!--Login modal-->
    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="" alt="" />
                <h3>Welcome</h3>
                <p>Help our country to be healthy and COVID-Free. Fill-up your Covid declaration form now!</p>
                <!--<input type="submit" name="" value="Login" /><br />-->
                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#loginModal"
                    style="border-radius: 20px;padding: 5px 60px 5px 60px;">
                    Login
                </button>
            </div>
            <div class="col-md-9 register-right">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Declaration Form</h3>
                    <div class="row register-form">
                        <form class="row g-2 needs-validation" novalidate>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="inputFullName" placeholder="Full Name *"
                                        value="" name="full_name" required />
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" name="age" id="inputAge"
                                        placeholder="Age*" required />
                                </div>
                                <div class="form-group">
                                    <input type="text" minlength="11" maxlength="16" name="mobile_no" id="inputMobileNo"
                                        class="form-control" placeholder="Phone No. (+63-9xx-xxx-xxxx)" value=""
                                        required />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nationality" id="inputNationality"
                                        placeholder="Nationality" value="" required />
                                </div>
                                <div class="form-group">
                                    <div class="maxl">
                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="Male" id="inputGenderMale" checked>
                                            <span> Male </span>
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="Female" id="inputGenderFemale">
                                            <span>Female </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="number" class="form-control" name="temperature" id="inputTemperature"
                                        placeholder="Your Temperature *" value="" step="0.10" required />
                                </div>
                                <!-- <div class="form-group">
                                    <span> Vaccinated ? </span>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" name="vaccinated" value="Yes">
                                        <label class="form-check-label"> Yes </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" name="vaccinated" value="No" checked>
                                        <label class="form-check-label"> No </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <span> COVID-19 Diagnosed ? </span>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" name="diagnosed" value="Yes">
                                        <label class="form-check-label"> Yes </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" name="diagnosed" value="No" checked>
                                        <label class="form-check-label"> No </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <span> COVID-19 Encountered ? </span>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" name="encountered" value="Yes">
                                        <label class="form-check-label"> Yes </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" name="encountered" value="No" checked>
                                        <label class="form-check-label"> No </label>
                                    </div>
                                </div> -->
                                <div class="form-group">
                                    <span> Vaccinated? </span>
                                    &nbsp;&nbsp;&nbsp;<span>No</span>
                                    <div class="form-check form-switch form-check-inline">
                                        <input class="form-check-input" name="vaccinated" type="checkbox"
                                            id="inputVaccinated" value="Yes" checked>
                                        <span>Yes<span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <span>COVID-19 Diagnosed with? </span>
                                    &nbsp;&nbsp;&nbsp;<span>No</span>
                                    <div class="form-check form-switch form-check-inline">
                                        <input class="form-check-input" name="diagnosed" type="checkbox" value="Yes"
                                            id="inputDiagnosed">
                                        <span>Yes<span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <span>COVID-19 Encountered? </span>
                                    &nbsp;&nbsp;<span>No</span>
                                    <div class="form-check form-switch form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="encountered" value="Yes"
                                            id="inputEncountered">
                                        <span>Yes<span>
                                    </div>
                                </div>
                                <input type="submit" class="btnRegister" id="btnSaveDeclaration" type="submit"
                                    value="Submit" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        else {
                            let full_name = $('#inputFullName').val()
                            let age = $('#inputAge').val()
                            let mobile_no = $('#inputMobileNo').val()
                            let vaccinated = $('#inputVaccinated:checked').val() ? 'Yes' : 'No'
                            let encountered = $('#inputEncountered:checked').val() ? 'Yes' : 'No'
                            let diagnosed = $('#inputDiagnosed:checked').val() ? 'Yes' : 'No'
                            let nationality = $('#inputNationality').val()
                            let temperature = $('#inputTemperature').val()
                            let gender = $("input[type='radio'][name='gender']:checked").val()



                            let data = { full_name, age, mobile_no, vaccinated, encountered, diagnosed, nationality, gender, temperature }
                            $.ajax({
                                url: './php/addDeclaration.php',
                                method: 'POST',
                                data: data,
                                dataType: 'json',
                                success: (response) => {
                                    if (response) {
                                        data.id = response
                                        console.log(response)
                                    }
                                }
                            })
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
    <!-- <script src="./js/declaration.js"></script> -->
    <!-- <script src="./js/index.js"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>