<?php
$host="localhost";
$user="root";
$pass="";
$db="LearningDB";
$conn=mysqli_connect($host,$user,$pass,$db);
if (!$conn)
    {
        die ("Database not connected successfully");
    }
?>