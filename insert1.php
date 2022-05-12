<?php
include "config.php";
$name =$_REQUEST['name'];
$passwored =$_REQUEST['passwored'];
$insert="INSERT INTO `stud`( `name`, `passwored`) VALUES ('$name','$passwored')";
$result= mysqli_query($con,$insert);
?>