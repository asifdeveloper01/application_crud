<?php
session_start();


$email = $_POST["email"];
$password = $_POST["password"];

$conn = mysqli_connect("localhost" , "root" , "" , "apps") or die("connection is not secured");

$query = "SELECT * FROM  `register` WHERE `email`='$email' AND `password` ='$password' ";
$result = mysqli_query($conn , $query) or die("not connected");


$q = mysqli_num_rows($result);

if($q  > 0){
    $rows = mysqli_fetch_array($result);
      $_SESSION['username'] = $rows['username'];  


      $_SESSION['email'] = $rows['email'];
      $_SESSION['id '] = $rows['id'];
      echo    $_SESSION['username'] ;
    header("location:../application.php");
    $_SESSION['name'] = $rows['fname'];
    // $_SESSION['name'] = "SELECT * FROM `register` WHERE `username`=$username";
    // echo $_SESSION['username'];
    // $rows2 = mysqli_fetch_all($result);
    // $_SESSION['username1'] = $rows2('username');


}
else{
    echo "Email and password are not connected";
}
