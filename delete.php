<?php

$id = $_GET["id"];
$conn = mysqli_connect("localhost" , "root" , "" , "apps") or die("Connection is not secured");
$delete = "DELETE FROM `studentdata` WHERE `studentdata`.`id` = $id  ";
$query = mysqli_query($conn , $delete) or die("not connected");

header("Location:../application.php");




mysqli_close($conn);






?>