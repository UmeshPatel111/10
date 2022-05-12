<?php
include "config.php";
$name =$_REQUEST['name'];
$passwored =$_REQUEST['passwored'];
$insert="INSERT INTO `stud`( `name`, `passwored`) VALUES ('$name','$passwored')";
$result= mysqli_query($con,$insert);


 $sql ="SELECT  * FROM `login` WHERE `name`='$name' AND `passwored`='$passwored'";

$result = mysqli_query($con,$sql);
$count = mysqli_num_rows($result);
$row =mysqli_fetch_assoc($result);

if($count > 0)
{
    
    //echo"Conected";
     session_start();
   
     $_SESSION['name']=$row['name']; 
     header("location:dashboard.php");

}
else{
    echo"<script>alert('Check your Username & Password!');</script>";
   echo"Not Connected";
}
?>