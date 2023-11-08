<?php
include("header.php");
?>






    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <?php if (!empty($_GET['error'])) {
                ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Try Again!</strong> <?php echo $_GET['error']; ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                <?php
                } ?>
                <div class="card">
                    <div class="card-header">
                        Register Here
                    </div>
                    <div class="card-body">
                        <form action="action/signup.php" method="post">
                            <div class="card-body">

                                <div class="form-group">
                                    <label>FullName</label>
                                    <input type="text " class="form-control" name="fname">
                                </div>
                                <div class="form-group">
                                    <label>UserName</label>
                                    <input type="text " class="form-control" name="username">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email " class="form-control" name="email">
                                </div>

                                <div class="form-group">
                                    <label>password</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password  " class="form-control" name="cpassword">
                                </div>
                                <div class="card-footer">
                                    <input type="submit" class="btn btn-danger" name="submit" />
                                    <!-- <input type="submit "  class="btn btn-danger" name="submit" value="Submit" />  -->
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
