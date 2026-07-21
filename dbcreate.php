<?php 
include "dbconnect.php";
$sql="CREATE DATABASE IF NOT EXISTS LearningDB";
$result=mysqli_query($conn,$sql);
if($result)
    {
        echo "<br>Database created successfully";
    }
else
    {
        echo "<br>Error creating database".mysqli_error($conn);
    }
?>