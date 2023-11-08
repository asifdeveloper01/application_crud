<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Walgreens</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        #ftn {
            font-size: 16px;
            text-align: center;
            align-items: center;
        }

        h2 {
            text-align: center;
            color: black;
        }

        .logo1 {
            height: 50px;
            width: 100%;
        }

        #head2 {
            background-color: #323264;
        }
    </style>

</head>

<body>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <?php
    session_start();
    ?>






    <header>
        <nav>
            <div class="row">
                <div class="col-sm-4">
                    <h2><a id="ftn" href="">Extra 15% off $25 sitewide with code OCT15</a></h2>
                </div>
                <div class="col-sm-4">
                    <h2><a id="ftn" href="">Extra 20% off $50 sitewide with code OCT20</a></h2>
                </div>
                <div class="col-sm-4">
                    <h2><a id="ftn" href="#">Clip your mystery deal!</a></h2>
                </div>
            </div>
        </nav>
        <nav id="head2" class="navbar navbar-expand-lg ">
            <a class="navbar-brand" href="#">
                <h1>APPLICATION</h1>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-3" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                </form> -->
                <!-- <ul class="navbar-nav mr-auto text-light">
                    <li class="nav-item active">
                        <a class="nav-link text-light" href="login.php">Main page <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="home.php">HOME</a>
                    </li>
                </ul> -->
                <?php
                // if (empty($_SESSION['name'])) {
                ?>

            </div>
            <form class="form-inline my-2 my-lg-0">

                <?php   ?>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">



                        <?php
                        if (empty( $_SESSION['email'])) {

                        ?>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="register.php">Register</a>

                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-light" href="login.php">logIn</a>
                            </li>
                        <?php   } else { ?>
                            <li class="nav-item active">
                                <a class="nav-link text-light" href="application.php">Application</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-light" href="index.php">index</a>

                            </li>
                            <div class="dropdown">
                                <button id="head2" class="btn " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <p class="dropdown-toggle" style="color: white;"> <?php echo  $_SESSION['username']; ?> </p>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="logout.php">logout</a>

                                </div>
                            </div>
                        <?php
                        } ?>
                    </ul>
                </div>


                <?php  ?>

            </form>
        </nav>
    </header>
</body>

</html>