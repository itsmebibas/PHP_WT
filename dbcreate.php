<?php 
include "dbconnect.php";
$sql="CREATE DATABASE IF NOT EXISTS LearningDB";
$result=mysqli_query($conn,$sql);
if(!$result)
    {
      die("<br>Error in Database Creation".mysqli_error($conn));
    }
?>