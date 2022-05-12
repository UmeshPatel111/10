<?php
include "config.php";

echo"welcome";

 session_start();
if(!isset($_SEESION['name']))
 {
     header("location:dashboard.php");
 }

?>