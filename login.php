<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php 
    include("header.php");
    ?>
<form action="action/signin.php" method="post">
    <div class="container mt-3  " style="margin-left: 30%;">
        <div class="row">
            <div class="card" style="width: 40%; ">
                <h2 class="card-header">Login Here</h2>
                <div class="card-body">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email " class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password " class="form-control" name="password">
                    </div>
                    <div class="card-footer">
                        <input type="submit" class="btn btn-danger" name="submit" />
                    </div>
</body>
</html>