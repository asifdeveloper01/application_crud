<?php
$name =$_POST["Sname"]; 
$Fame =$_POST["Fname"]; 
$Fnumber =$_POST["Fnumber"]; 
$classname =$_POST["classname"];

$conn = mysqli_connect("localhost", "root", "", "apps") or die("Connection is not secured");

$stuid = $_POST["sid"];

$update = "UPDATE `studentdata` SET `studentname`='$name',`fathername`='$Fame',`phonenumber`='$Fnumber' ,`classno`='$classname' WHERE id= $stuid ";
$result2 = mysqli_query($conn, $update) or die("not connected");

header("location:../application.php");

mysqli_close($conn);
?>