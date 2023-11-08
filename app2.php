<?php

$name =$_POST["Sname"]; 
$Fame =$_POST["Fname"]; 
$Fnumber =$_POST["Fnumber"]; 
$classname =$_POST["classname"]; 

$imgfile = $_FILES["studentimg"]["name"];
$target = "asif/img/".$imgfile;
move_uploaded_file($_FILES["studentimg"]["tmp_name"],$target);
$extension = pathinfo($imgfile, PATHINFO_EXTENSION);
$imgfile = time().".".$extension;

$conn = mysqli_connect("localhost" , "root" , "" , "apps") or die("Connection is not secured");
if(empty($name)){
  $msg = "Enter student Name";
  header('Location:./application.php?error='.$msg);
}else{

$query = "INSERT INTO `studentdata`( `studentname`, `fathername`, `phonenumber`, `docs`, `classno`)
  VALUES('$name', '$Fame','$Fnumber' ,'$imgfile' , '$classname' ) ; " or die("not connected");
    header("location:./application.php");
     $result = mysqli_query($conn ,$query) or die("not connected");
     $rows = "SELECT * FROM `studentdata` WHERE `studentname`= '$name' OR `fathername`='$Fame' OR `phonenumber`= '$Fnumber' OR  `docs`='$imgfile' ";
     $datafetch=mysqli_query($conn ,$rows) or die("not connected");
     $rows = mysqli_fetch_array($datafetch);  
   
}
//  if (!empty($_POST["$name"] )) {
   
//   } else {
    
//     $msg = "All field is required";
//     header('Location:../application.php?error='.$msg);

//   }






?>