<?php




$fname = $_POST["fname"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$cpassword =  $_POST["cpassword"];


//select query



if ($password == $cpassword) {

    //create connection
    $conn = mysqli_connect("localhost", "root", "", "apps") or die("connection is not secured");


//email validation check

    $query2 = "SELECT * FROM `register` WHERE  email='$email' ";
    $q = mysqli_query($conn, $query2) or die("not connected");


    $row = mysqli_num_rows($q);



    if ($row > 1) {
         $msg ="EMAIL ALREADY EXIST";
         header('Location:../register.php?error='.$msg);
    } else {
        $query = " INSERT INTO `register`(fname,email,username,password)
        VALUES ('$fname','$email','$username','$password') ";


    $result = mysqli_query($conn, $query) or die("not connected");
    header("location:../login.php");  

   
        
    } 
} else {
    $msg = "password is not same";
    header('Location:../register.php?error='.$msg);

}
