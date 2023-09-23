<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" id="loginModalbg">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <h3 style="color:#fff; text-align: center;margin-bottom: 15px;"><img src="./images/covid.png" class="col-md-4" style="text-align: center; width: 5%;"> CoViD-19 Monitoring App</h3>
                        <div class="col-md-4" style="background-color: #fff; margin: auto; border-radius: 10px;">
                            <form action="./php/checkLogin.php" method="post">
                                <div class="mb-3">
                                    <h3 style="text-align: center;margin-top: 50px;margin-bottom: -20px; color:#495057;">Login</h3>
                                </div>
                                <div class="mb-3">
                                    <label for="username" class="col-form-label">Username</label>
                                    <input type="text" name="username" class="form-control" id="username" />
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="col-form-label">Password</label>
                                    <input type="text" name="password" class="form-control" id="password" />
                                </div>
                                <div class="mb-3" style="padding-bottom: 50px;">
                                    <input type="submit" class="form-control btn-primary" value="Submit" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>-->
        </div>
    </div>
</div>